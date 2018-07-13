<?php
session_start();
$_SESSION['db_set'] = true;

include "../db/createArticle.php";
include "../db/createUserlist.php";
include "../db/createCategorylist.php";
include "../db/createNotification.php";

$db = new SQLite3("../db/dpad.db");
$sql = "SELECT DISTINCT categorylist.catname
            FROM categorylist;";

$tableExists = $db->query("SHOW TABLES LIKE 'userlist'")->rowCount() > 0;

echo

$userObj = new user();
$userObj->insertUser('test', 'Mustertest', 'test@mail.com', md5("test"), 'author');
$userObj->insertUser('Max', 'Musterman', 'muster@mail.com', md5("muster"), 'editor');

$articleObj = new article();
$articleObj->insertArticle('testArticle', 'test Mustertest', 'test@mail.com', '2018-06-15', 2, NULL, NULL, 'published', 'blablabla', '1');
$articleObj->insertArticle('testArticle3', 'test Mustertest', 'test@mail.com', '2018-06-10', 3, NULL, NULL, 'published', 'blablabla', '3');
$articleObj->insertArticle('testArticle4', 'test Mustertest', 'test@mail.com', '2018-06-08', 4, NULL, NULL, 'pending', 'blablabla', '0');
$articleObj->insertArticle('testArticle5', 'test Mustertest', 'test@mail.com', '2018-06-09', 5, NULL, NULL, 'pending', 'blablabla', '0');
$articleObj->insertArticle('testArticle2', 'Max Mustermann', 'muster@mail.com', '2018-06-15', 1, NULL, NULL, 'pending', 'blablabla', '0');

$categoryObj = new category();
$categoryObj->insertCategory(1, 'rpg');
$categoryObj->insertCategory(2, 'shooter');
$categoryObj->insertCategory(3, 'rpg');
$categoryObj->insertCategory(4, 'rpg');
$categoryObj->insertCategory(5, 'rpg');
$categoryObj->insertCategory(5, "jump'n run");

$notifiObj = new notification();
$notifiObj->insertNotifi('test@mail.com', 'muster@mail.com', 'Missing Abstract', 'Here is a text message.', 'new');
$notifiObj->insertNotifi('muster@mail.com', 'test@mail.com', 'RE:Missing Abstract', 'Here is a response message.', 'read');
?>