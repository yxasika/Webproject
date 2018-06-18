<?php
include "../db/createArticle.php";
include "../db/createUserlist.php";
include "../db/createCategorylist.php";
include "../db/createNotification.php";

$userObj = new user();
$userObj->insertUser('Max', 'Musterman', 'muster@mail.com', '5452eea2e1ff9cefa25f5fb590386dfb', 'editor');
$userObj->insertUser('test', 'Mustertest', 'test@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'author');

$articleObj = new article();
$articleObj->insertArticle('testArticle', 'test Mustertest', 'test@mail.com' ,  '2018-06-15', 2, NULL, NULL, 'pending', 'blablabla', '4');
$articleObj->insertArticle('testArticle2', 'Max Mustermann', 'muster@mail.com' ,  '2018-06-15', 1, NULL, NULL, 'pending', 'blablabla', '4');

$categoryObj = new category();
$categoryObj->insertCategory(1, 'rpg');
$categoryObj->insertCategory(2, 'shooter');

$notifiObj = new notification();
$notifiObj->insertNotifi('test Mustertest', 'Max Musterman', 'Missing Abstract',  'Here is a text message.', 'new');
$notifiObj->insertNotifi('Max Musterman', 'test Mustertest', 'RE:Missing Abstract',  'Here is a response message.', 'new');
?>