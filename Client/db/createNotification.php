<?php
/**
 * Created by PhpStorm.
 * User: hung2
 * Date: 18.06.2018
 * Time: 23:50
 */

class notification
{
    private $pdo = null;

    public function __construct()
    {
        $user = "root";
        $pw = null;
        $dsn = "sqlite:../db/dpad.db";
        $id_notifi = "id INTEGER PRIMARY KEY AUTOINCREMENT,";

        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $sql = "CREATE TABLE notification (" . $id_notifi . " sender VARCHAR(50), receiver VARCHAR(50), subject VARCHAR(50), message TEXT, status VARCHAR(20));";
            $this->pdo->exec($sql);
            if(isset($_SESSION['db_set'])){echo "Tabelle notifications angelegt.<br/>";}
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertNotifi($sender, $receiver, $subject, $message, $status)
    {
        $sql = "INSERT INTO notification (sender, receiver, subject, message, status) 
            VALUES (:sender, :receiver, :subject, :message, :status);";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':sender', $sender);
        $stmt->bindParam(':receiver', $receiver);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':status', $status);

        return $stmt->execute();
    }


    public function __destruct()
    {
        $this->pdo = null;
    }
}

?>
