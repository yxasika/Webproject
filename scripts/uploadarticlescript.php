<?php
session_start();
if (isset($_POST["upload"]))
{
    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST['descriptionarea']);
    $pdflink = "../src/imgs/article.myJournal.pdf"; //wird später durch den pdf-dateiinput ersetzt
    $imglink = "../src/imgs/dark_souls.jpg"; //wird später über die aktuelle login-session gelesen
    $authorname = $_SESSION["username"]." ". $_SESSION["lastname"];
    $articlelink = "../views/article_1.php";    //wird später durch eine hoffentlich automatisch generierte php-seite ersetzt
    $categories = array();
    $mail = $_SESSION["email"];
    $rpg = $_POST["rpg"];
    $jump = $_POST["jump'n run"];
    $action = $_POST["action"];
    $shooter = $_POST["shooter"];


    if($rpg)
    {
        array_push($categories, "rpg");
    }
    if($jump)
    {
        array_push($categories, "jump'n run");
    }
    if($action)
    {
        array_push($categories, "action");
    }
    if($shooter)
    {
        array_push($categories, "shooter");
    }


    $articledata = file_get_contents("../json/articles.json");
    $articles = json_decode($articledata, true);

    $id = ($articles[count($articles)-1]["id"])+1;

    $newarticle = array(
        "id" => $id,
        "title" => $title,
        "author" => $authorname,
        "mail" => $mail,
        "published" => date("j.n.Y"),
        "categories" => $categories,
        "imglink" => $imglink,
        "pdflink" => $pdflink,
        "articlelink" => $articlelink,
        "status" => "pending",
        "description" => $description
    );

    array_push($articles, $newarticle);

    $newdata = json_encode($articles);
    file_put_contents("../json/articles.json", $newdata);
    header("Location: ../views/author.php");
}


?>