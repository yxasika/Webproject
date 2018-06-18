<?php

class article
{
    private $pdo = null;

    public function __construct()
    {
        $user = "root";
        $pw = null;
        $dsn = "sqlite:../db/dpad.db";
        $id_article = "id INTEGER PRIMARY KEY AUTOINCREMENT,";

        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $sql = "CREATE TABLE articlelist (" . $id_article . " title VARCHAR(50), author VARCHAR(100), authormail VARCHAR(50), published_date DATE, categoryid INT UNIQUE, img BLOB, pdf BLOB, status VARCHAR(40), description TEXT, upvote INT DEFAULT 0);";
            $this->pdo->exec($sql);
            echo "Tabelle articlelist angelegt.<br/>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertArticle($title, $author, $authormail, $published_date, $categoryid, $img, $pdf, $status, $description, $upvote)
    {
        $sql = "INSERT INTO articlelist (title, author, authormail, published_date, categoryid, img, pdf, status, description, upvote) 
            VALUES (:title, :author, :authormail, :published_date, :categoryid, :img, :pdf, :status, :description, :upvote);";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':authormail', $authormail);
        $stmt->bindParam(':published_date', $published_date);
        $stmt->bindParam(':categoryid', $categoryid);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':pdf', $pdf);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':upvote', $upvote);

        return $stmt->execute();
    }

    public function editArticle($id, $status)
    {
        $sql = "UPDATE articlelist
                SET status = :status
                WHERE id = :id;";

        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }




    public function __destruct()
    {
        $this->pdo = null;
    }
}

?>
