<?php

class user
{

    private $pdo = null;

    public function __construct()
    {
        $user = "root";
        $pw = null;
        $dsn = "sqlite:dpad.db";
        $id_user = "id INTEGER PRIMARY KEY AUTOINCREMENT,";

        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $sql = "CREATE TABLE userlist (" . $id_user . " firstname VARCHAR(40), lastname VARCHAR(40), email VARCHAR(50), password VARCHAR(32), role VARCHAR(20));";
            $this->pdo->exec($sql);
            echo "Tabelle userlist angelegt.<br/>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertUser($fname, $lname, $email, $password, $role){
        $sql = "INSERT INTO userlist (firstname, lastname, email, password, role) 
            VALUES (:firstname, :lastname, :email, :password, :role);";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':firstname',$fname);
        $stmt->bindParam(':lastname', $lname);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);

        return $stmt->execute();
    }

    public function updateUser($fname, $lname, $email, $password, $role){

    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}

$userObj = new user();
$userObj->insertUser('Max', 'Musterman', 'muster@mail.com', '5452eea2e1ff9cefa25f5fb590386dfb', 'editor');
$userObj->insertUser('test', 'Mustertest', 'test@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'author');
?>
