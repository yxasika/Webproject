<?php
session_start();
include "../db/db_auslesen.php";

$categories = getAllCategories();
foreach ($categories as $category) {
    echo ($category."<br />");
}

?>