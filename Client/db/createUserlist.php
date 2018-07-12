<?php

class user
{
    private $pdo = null;

    public function __construct()
    {
        $user = "root";
        $pw = null;
        $dsn = "sqlite:../db/dpad.db";
        $id_user = "id INTEGER PRIMARY KEY AUTOINCREMENT,";

        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $sql = "CREATE TABLE userlist (" . $id_user . " firstname VARCHAR(40), lastname VARCHAR(40), email VARCHAR(50) UNIQUE, password VARCHAR(32), role VARCHAR(20));";
            $this->pdo->exec($sql);
            if($_SESSION['db_set'] == false){echo "Tabelle userlist angelegt.<br/>";}
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertUser($fname, $lname, $email, $password, $role)
    {
        $sql = "INSERT INTO userlist (firstname, lastname, email, password, role) 
            VALUES (:firstname, :lastname, :email, :password, :role);";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':firstname', $fname);
        $stmt->bindParam(':lastname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);

        return $stmt->execute();
    }

    public function updateUser($id, $fname, $lname, $email, $password, $role)
    {
        $sql = "UPDATE userlist
                SET firstname = :firstname,
                AND lastname = :lastname,
                AND email = :email,
                AND password = :password,
                AND role = :role
                WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':firstname', $fname);
        $stmt->bindParam(':lastname', $lname);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':role', $role);

        return $stmt->execute();
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}


?>
