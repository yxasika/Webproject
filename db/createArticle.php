<?php

class article
{
    private $pdo = null;

    public function __construct()
    {
        $user = "root";
        $pw = null;
        $dsn = "sqlite:dpad.db";
        $id_article = "id INTEGER PRIMARY KEY AUTOINCREMENT,";

        try {
            $this->pdo = new PDO($dsn, $user, $pw);
            $sql = "CREATE TABLE article (" . $id_article . " title VARCHAR(50), author VARCHAR(100), published_date DATE, category VARCHAR(30), img BLOB, pdf BLOB, status VARCHAR(40), desciption TEXT, upvote INT);";
            $this->pdo->exec($sql);
            echo "Tabelle article angelegt.<br/>";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertArticle($title, $author, $published_date, $category, $img, $pdf, $status, $desciption, $upvote)
    {
        $sql = "INSERT INTO article (title, author, published_date, category, img, pdf, status, desciption, upvote) 
            VALUES (:title, :author, :published_date, :category, :img, :pdf, :status, :desciption, :upvote);";
        $stmt = $this->pdo->prepare($sql);

        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':published_date', $published_date);
        $stmt->bindParam(':category', $category);
        $stmt->bindParam(':img', $img);
        $stmt->bindParam(':pdf', $pdf);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':description', $desciption);
        $stmt->bindParam(':upvote', $upvote);

        return $stmt->execute();
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}

$articleObj = new article();
$articleObj->insertArticle('testArticle', 'Max Musterman', '2018-06-15', 'rpg', NULL, NULL, 'pending', 'blablabla', '4');
?>
