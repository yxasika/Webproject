<?php
try {
    $db = new SQLite3("dpad.db");
    $sql = "SELECT * FROM userlist";
    $ergebnis = $db->query($sql);

    echo "<ul>";
    while ($zeile = $ergebnis->fetchArray()) {
        echo "<li>" . htmlspecialchars($zeile["id"]) .
            ": " . htmlspecialchars($zeile["firstname"]) .
            ": " . htmlspecialchars($zeile["lastname"]) .
            ": " . htmlspecialchars($zeile["email"]) .
            ": " . htmlspecialchars($zeile["password"]) .
            ": " . htmlspecialchars($zeile["role"]) ."</li>";
    }
    echo "</ul>";

    $db->close();
} catch (Exception $ex) {
    echo "Fehler: " . $ex->getMessage();
}
?>
