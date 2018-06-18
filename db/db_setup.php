<?php
include "createArticle.php";
include "createUserlist.php";
include "createCategorylist.php";

$userObj = new user();
$userObj->insertUser('Max', 'Musterman', 'muster@mail.com', '5452eea2e1ff9cefa25f5fb590386dfb', 'editor');
$userObj->insertUser('test', 'Mustertest', 'test@mail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'author');

$articleObj = new article();
$articleObj->insertArticle('testArticle', 'test Mustertest', 'test@mail.com' ,  '2018-06-15', 2, NULL, NULL, 'pending', 'blablabla', '4');
$articleObj->insertArticle('testArticle2', 'Max Mustermann', 'muster@mail.com' ,  '2018-06-15', 1, NULL, NULL, 'pending', 'blablabla', '4');


$categoryObj = new category();
$categoryObj->insertCategory(1, 'rpg');
$categoryObj->insertCategory(2, 'shooter');



?>