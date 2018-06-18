<?php
include "../db/createArticle.php";


$source = file_get_contents("../json/articles.json");
$articles = json_decode($source, true);
$kind = "";
$tempid = "";

$articleObj = new article();

if(isset($_POST["approve"])){
    $articleObj->editArticle($_POST["approve"], 'approved');
    /*approvearticle($_GET["approve"]);*/
}
if(isset($_POST["reject"])){

    rejectarticle($_POST["reject"]);
}
if(isset($_POST["publish"])){

    publisharticle($_POST["publish"]);
}

/*
function approvearticle($artid)
{


    $source = file_get_contents("../json/articles.json");
    $articles = json_decode($source, true);

    foreach ($articles as $article => $article) {
        if($articles[$article]["id"] == $artid)
        {
            $articles[$article]["status"] = "approved";
        }
    }

    $newJsonString = json_encode($articles);
    file_put_contents("../json/articles.json", $newJsonString);

}*/

function rejectarticle($artid)
{
    $source = file_get_contents("../json/articles.json");
    $articles = json_decode($source, true);

    foreach ($articles as $article => $article) {
        if($articles[$article]["id"] == $artid)
        {
            $articles[$article]["status"] = "rejected";
        }
    }

    $newJsonString = json_encode($articles);
    file_put_contents("../json/articles.json", $newJsonString);

}

function publisharticle($artid)
{
    $source = file_get_contents("../json/articles.json");
    $articles = json_decode($source, true);

    foreach ($articles as $article => $article) {
        if($articles[$article]["id"] == $artid)
        {
            $articles[$article]["status"] = "published";
        }
    }

    $newJsonString = json_encode($articles);
    file_put_contents("../json/articles.json", $newJsonString);

}
?>