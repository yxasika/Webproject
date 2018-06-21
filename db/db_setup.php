<?php
include "../db/createArticle.php";
include "../db/createUserlist.php";
include "../db/createCategorylist.php";
include "../db/createNotification.php";

$userObj = new user();
$userObj->insertUser('test', 'Mustertest', 'test@mail.com', md5("test"), 'author');
$userObj->insertUser('Max', 'Musterman', 'muster@mail.com', md5("muster"), 'editor');

$articleObj = new article();
$articleObj->insertArticle('testArticle', 'test Mustertest', 'test@mail.com' ,  '2018-06-15', 2, NULL, NULL, 'pending', 'blablabla', '4');
$articleObj->insertArticle('testArticle2', 'Max Mustermann', 'muster@mail.com' ,  '2018-06-15', 1, NULL, NULL, 'pending', 'blablabla', '4');

$categoryObj = new category();
$categoryObj->insertCategory(1, 'rpg');
$categoryObj->insertCategory(2, 'shooter');

$notifiObj = new notification();
$notifiObj->insertNotifi('test@mail.com', 'muster@mail.com', 'Missing Abstract',  'Here is a text message.', 'new');
$notifiObj->insertNotifi('muster@mail.com', 'test@mail.com', 'RE:Missing Abstract',  'Here is a response message.', 'new');
?>