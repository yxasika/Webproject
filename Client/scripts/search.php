<?php
if (isset($_GET['search']) || isset($_GET['letter']) || isset($_GET['category'])) {
    try {
        $db = new SQLite3("../db/dpad.db");

        if (isset($_GET['search'])) {
            $query = htmlspecialchars($_GET['search']);
            $sql = "SELECT id, title, author, published_date, upvote
                FROM articlelist
                WHERE (lower(title) LIKE '%" . $query . "%') OR (author LIKE '%" . $query . "%') OR (lower(published_date) LIKE '%" . $query . "%')";
        } else if (isset($_GET['letter'])) {
            $query = htmlspecialchars($_GET['letter']);
            $sql = "SELECT id, title, author, published_date, upvote
                FROM articlelist
                WHERE (lower(title) LIKE '" . $query . "%')";
        } else if (isset($_GET['category'])) {
            $query = htmlspecialchars($_GET['category']);
            $sql = "SELECT id, title, author, published_date, upvote
                FROM articlelist
                INNER JOIN categorylist ON articlelist.categoryid == categorylist.artid
                WHERE (lower(categorylist.catname) LIKE '%" . $query . "%')";
        }

        $stmt = $db->prepare($sql);
        $ergebnis = $stmt->execute();

        while ($row = $ergebnis->fetchArray()) {
            $categories = getCategories($row["id"]);
            echo '<tr><td>' . $row["title"] . '</td>
                    <td>' . $row["author"] . '</td>
                    <td>' . $row["published_date"] . '</td>
                    <td>';
            foreach ($categories as $category) {
                echo $category . ' ';
            }
            echo '</td><td>' . $row["upvote"] . '</td>
                     <td><a class="btn btn-primary" href="http://localhost/Webproject/Client/views/article.php?artid=' . $row["id"] . '"><i class="material-icons">arrow_forward</i></a></td></tr>';
        }
        $db->close();
    } catch (Exception $ex) {
        echo "Fehler: " . $ex->getMessage();
    }
}