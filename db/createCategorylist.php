<?php

class category
{
    private $pdo = null;

    public function __construct()
    {
        $user = "root";
        $pw = null;
        $dsn = "sqlite:dpad.db";
        $id_user = "artid INTEGER PRIMARY KEY,";

        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $sql = "CREATE TABLE categorylist (" . $id_user . " catname VARCHAR(20));";
            $this->pdo->exec($sql);
            echo "Tabelle categorylist angelegt.<br/>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertCategory($artid, $catname)
    {
        $sql = "INSERT INTO categorylist (artid, catname) 
            VALUES (:artid, :catname);";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':artid', $artid);
        $stmt->bindParam(':catname', $catname);

        return $stmt->execute();
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}

?>