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
try {
    $db = new SQLite3("dpad.db");
    $sql = "SELECT * FROM article";
    $ergebnis = $db->query($sql);

    echo "<ul>";
    while ($zeile = $ergebnis->fetchArray()) {
        echo "<li>" . htmlspecialchars($zeile["id"]) .
            ": " . htmlspecialchars($zeile["title"]) .
            ": " . htmlspecialchars($zeile["author"]) .
            ": " . htmlspecialchars($zeile["published_date"]) .
            ": " . htmlspecialchars($zeile["img"]) .
            ": " . htmlspecialchars($zeile["pdf"]) .
            ": " . htmlspecialchars($zeile["category"]) .
            ": " . htmlspecialchars($zeile["status"]) .
            ": " . htmlspecialchars($zeile["description"]) .
            ": " . htmlspecialchars($zeile["upvote"]) ."</li>";
    }
    echo "</ul>";

    $db->close();
} catch (Exception $ex) {
    echo "Fehler: " . $ex->getMessage();
}
?>
