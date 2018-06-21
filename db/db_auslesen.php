<?php
/*$user = "root";
$pw = null;
$dsn = "sqlite:dpad.db";
$db = new PDO($dsn, $user, $pw);

$sql = "SELECT * FROM article";
$ergebnis = $db->query($sql);
echo "<ul>";
foreach ($ergebnis as $zeile) {
    echo "<li>" . htmlspecialchars($zeile["id"]) .
        ": " . htmlspecialchars($zeile["title"]) .
        ": " . htmlspecialchars($zeile["author"]) .
        ": " . htmlspecialchars($zeile["published_date"]) .
        ": " . htmlspecialchars($zeile["category"]) .
        ": " . htmlspecialchars($zeile["status"]) .
        ": " . htmlspecialchars($zeile["description"]) .
        ": " . htmlspecialchars($zeile["upvote"]) ."</li>";
}
echo "</ul>";*/

function getArticles($status)
{
    try {
        $db = new SQLite3("../db/dpad.db");
        $sql = "SELECT * FROM articlelist
                
                WHERE status = '" . $status . "'";

        $ergebnis = $db->query($sql);

        $articles = array();

        while ($row_article = $ergebnis->fetchArray()) {
            $articles[] = $row_article;
        }
        $db->close();

        return $articles;
    } catch (Exception $ex) {
        echo "Fehler: " . $ex->getMessage();
    }
}

function getArticles_sortby($status, $sortby, $asc)
{

    try {
        $db = new SQLite3("../db/dpad.db");

        if($asc)
        {
            $sql = "SELECT * FROM articlelist
                
                WHERE status = :status
                ORDER BY :sortby ASC";
        }
        else
        {
            $sql = "SELECT * FROM articlelist
                
                WHERE status = :status
                ORDER BY :sortby DESC";
        }


        $stmt = $db->prepare($sql);

        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':sortby', $sortby);

        $ergebnis = $stmt->execute();

        $articles = array();

        while ($row_article = $ergebnis->fetchArray()) {
            $articles[] = $row_article;
        }
        $db->close();

        return $articles;
    } catch (Exception $ex) {
        echo "Fehler: " . $ex->getMessage();
    }
}

function getUsers()
{
    try {
        $db = new SQLite3("../db/dpad.db");
        $sql = "SELECT * FROM userlist";

        $ergebnis = $db->query($sql);

        $users = array();

        while ($row_user = $ergebnis->fetchArray()) {
            $users[] = $row_user;
        }
        $db->close();

        return $users;
    } catch (Exception $ex) {
        echo "Fehler: " . $ex->getMessage();
    }
}

function getNotifi()
{
    try {
        $db = new SQLite3("../db/dpad.db");
        $sql = "SELECT * FROM notification";

        $result = $db->query($sql);

        $notifi = array();

        while ($row = $result->fetchArray()) {
            $notifi[] = $row;
        }
        $db->close();

        return $notifi;
    } catch (Exception $ex) {
        echo "Fehler: " . $ex->getMessage();
    }
}

/*
try {
    $db = new SQLite3("dpad.db");
    $sql = "SELECT * FROM articlelist";

    $ergebnis = $db->query($sql);

    echo "<ul>";
    while ($zeile = $ergebnis->fetchArray()) {
        echo "<li>" . htmlspecialchars($zeile["id"]) .
            ": " . htmlspecialchars($zeile["title"]) .
            ": " . htmlspecialchars($zeile["author"]) .
            ": " . htmlspecialchars($zeile["published_date"]) .
            ": " . htmlspecialchars($zeile["img"]) .
            ": " . htmlspecialchars($zeile["pdf"]) .
            ": " . htmlspecialchars($zeile["categoryid"]) .
            ": " . htmlspecialchars($zeile["status"]) .
            ": " . htmlspecialchars($zeile["description"]) .
            ": " . htmlspecialchars($zeile["upvote"]) ."</li>";
    }
    echo "</ul>";

    $db->close();
} catch (Exception $ex) {
    echo "Fehler: " . $ex->getMessage();
}
*/
?>
