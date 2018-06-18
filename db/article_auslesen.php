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
            $db = new SQLite3("dpad.db");
            $sql = "SELECT * FROM articlelist
                
                WHERE status = '" . $status . "'";


            $ergebnis = $db->query($sql);

            $articles = array();

            while ($row_article = $ergebnis->fetchArray()) {
                $articles[] = $row_article;

                echo htmlspecialchars($row_article["id"]) .
                    "| " . htmlspecialchars($row_article["title"]) .
                    "| " . htmlspecialchars($row_article["author"]) .
                    "| " . htmlspecialchars($row_article["published_date"]) .
                    "| " . htmlspecialchars($row_article["img"]) .
                    "| " . htmlspecialchars($row_article["pdf"]) .
                    "| " . htmlspecialchars($row_article["categoryid"]) .
                    "| " . htmlspecialchars($row_article["status"]) .
                    "| " . htmlspecialchars($row_article["description"]) .
                    "| " . htmlspecialchars($row_article["upvote"]);

            }
            $db->close();

            return $articles;
        }
        catch (Exception $ex) {
            echo "Fehler: " . $ex->getMessage();
        }
    }
getArticles('pending');
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
