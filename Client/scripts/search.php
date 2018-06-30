<?php
if (isset($_GET['search']) || isset($_GET['letter'])) {
    try {
        $db = new SQLite3("../db/dpad.db");

        if (isset($_GET['search'])) {
            $query = htmlspecialchars($_GET['search']);
            $sql = "SELECT title, published_date, description, author
                FROM articlelist
                WHERE (lower(title) LIKE '%" . $query . "%') OR (published_date LIKE '%" . $query . "%') OR (lower(description) LIKE '%" . $query . "%') OR (lower(author) LIKE '%" . $query . "%')";
        } else if (isset($_GET['letter'])) {
            $query = htmlspecialchars($_GET['letter']);
            $sql = "SELECT title, published_date, description, author
                FROM articlelist
                WHERE (lower(title) LIKE '" . $query . "%')";
        }

        $stmt = $db->prepare($sql);
        $ergebnis = $stmt->execute();
        $rowResult = array();

        while ($row = $ergebnis->fetchArray()) {

            echo '<li>
    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">' . $row["title"] . '</h5>
            <small class="text-muted">' . $row["published_date"] . '</small>
        </div>
        <p class="mb-1">' . $row["description"] . '</p><small>' . $row["author"] . '</small>
    </a>
</li>';
        }
        $db->close();
    } catch (Exception $ex) {
        echo "Fehler: " . $ex->getMessage();
    }
}