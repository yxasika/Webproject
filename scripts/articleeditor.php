<?php

$source = file_get_contents("../json/articles.json");
$articles = json_decode($source, true);
$kind = "";
$tempid = "";


if(isset($_GET)){

    if (gettype($_GET) == string)
    {
        $tempid = $_GET;

        if(strpos($tempid, "approve")){
            str_replace("approve", "", $tempid);
            $kind = "approve";
        }
        if(strpos($tempid, "reject")){
            str_replace("reject", "", $tempid);
            $kind = "reject";
        }
        if(strpos($tempid, "publish")){
            str_replace("publish", "", $tempid);
            $kind = "publish";
        }

        switch($kind)
        {
            case "approve":
                approvearticle($tempid);
                break;
            case "reject":
                rejectarticle($tempid);
                break;
            case "publish":
                publisharticle($tempid);
                break;
            default:
                break;
        }
    }


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

    header("Refresh:0");
}
?>