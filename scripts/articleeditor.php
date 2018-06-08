<?php

$source = file_get_contents("../json/articles.json");
$articles = json_decode($source, true);
$kind = "";
$tempid = "";


if(isset($_GET["approve"])){

    approvearticle($_GET["approve"]);
}
if(isset($_GET["reject"])){

    rejectarticle($_GET["reject"]);
}
if(isset($_GET["publish"])){

    publisharticle($_GET["publish"]);
}


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

}

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