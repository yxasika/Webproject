<?php
include "../db/createArticle.php";

$articleObj = new article();

if (isset($_POST["approve"])) {
    $articleObj->editArticle($_POST["approve"], 'approved');
    /*approvearticle($_GET["approve"]);*/
}
if (isset($_POST["reject"])) {

    $articleObj->editArticle($_POST["reject"], 'rejected');
}
if (isset($_POST["publish"])) {

    $articleObj->editArticle($_POST["publish"], 'published');
}

?>