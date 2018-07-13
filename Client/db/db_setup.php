<?php
session_start();
$_SESSION['db_set'] = true;

include "../db/createArticle.php";
include "../db/createUserlist.php";
include "../db/createCategorylist.php";
include "../db/createNotification.php";

$userObj = new user();
$userObj->insertUser('test', 'Mustertest', 'test@mail.com', md5("test"), 'author');
$userObj->insertUser('Max', 'Musterman', 'muster@mail.com', md5("muster"), 'editor');
$userObj->insertUser('Dietrich', 'Boles', 'dibo@mail.com', md5("dibo"), 'editor');
$userObj->insertUser('Pol', 'van Rijn', 'pol@mail.com', md5("pol"), 'author');

$articleObj = new article();
$articleObj->insertArticle("Tom Clancy's RainbowSix: Siege", 'test Mustertest', 'test@mail.com', '2018-01-15', 1, NULL, NULL, 'published', 'blablabla', '20');
$articleObj->insertArticle('Overwatch', 'test Mustertest', 'test@mail.com', '2018-02-10', 2, NULL, NULL, 'published', 'blablabla', '23');
$articleObj->insertArticle('Warcraft 3', 'test Mustertest', 'test@mail.com', '2018-03-08', 3, NULL, NULL, 'pending', 'blablabla', '41');
$articleObj->insertArticle('Path of Exile', 'test Mustertest', 'test@mail.com', '2018-02-09', 4, NULL, NULL, 'pending', 'blablabla', '12');
$articleObj->insertArticle('Bloodborne', 'Max Mustermann', 'muster@mail.com', '2018-01-15', 5, NULL, NULL, 'pending', 'blablabla', '17');
$articleObj->insertArticle("Monster Hunter World", 'test Mustertest', 'test@mail.com', '2017-06-15', 6, NULL, NULL, 'published', 'blablabla', '14');
$articleObj->insertArticle('Battlefield 1', 'test Mustertest', 'test@mail.com', '2018-02-12', 7, NULL, NULL, 'published', 'blablabla', '34');
$articleObj->insertArticle('Crash Bandicoot', 'test Mustertest', 'test@mail.com', '2018-06-20', 8, NULL, NULL, 'pending', 'blablabla', '20');
$articleObj->insertArticle('Rayman Legends', 'test Mustertest', 'test@mail.com', '2018-06-09', 9, NULL, NULL, 'pending', 'blablabla', '30');
$articleObj->insertArticle('Ratchet & Clank', 'Max Mustermann', 'muster@mail.com', '2018-06-15', 10, NULL, NULL, 'pending', 'blablabla', '40');


$categoryObj = new category();
$categoryObj->insertCategory(1, 'Shooter');
$categoryObj->insertCategory(2, 'Shooter');
$categoryObj->insertCategory(3, 'Rpg');
$categoryObj->insertCategory(4, 'Rpg');
$categoryObj->insertCategory(5, 'Action');
$categoryObj->insertCategory(5, 'Rpg');
$categoryObj->insertCategory(6, "Rpg");
$categoryObj->insertCategory(7, 'Shooter');
$categoryObj->insertCategory(8, 'Jumpnrun');
$categoryObj->insertCategory(9, 'Jumpnrun');
$categoryObj->insertCategory(10, 'Jumpnrun');


$notifiObj = new notification();
$notifiObj->insertNotifi('test@mail.com', 'muster@mail.com', 'Missing Abstract', 'Here is a text message.', 'new');
$notifiObj->insertNotifi('muster@mail.com', 'test@mail.com', 'RE:Missing Abstract', 'Here is a response message.', 'read');
?>