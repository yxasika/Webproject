<?php
include "../db/db_auslesen.php";
include "../db/createArticle.php";
include "../db/createCategorylist.php";


if (isset($_POST["upload"])) {

    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST['descriptionarea']);
    //$pdflink = "../src/imgs/article.myJournal.pdf"; //wird später durch den pdf-dateiinput ersetzt
    //$imglink = "../src/imgs/dark_souls.jpg"; //wird später über die aktuelle login-session gelesen
    $authorname = $_SESSION["firstname"] . " " . $_SESSION["lastname"];
    //$articlelink = "../views/article_1.php";    //wird später durch eine hoffentlich automatisch generierte php-seite ersetzt
    $authormail = $_SESSION["email"];
    $publishdate = NULL;

    $img = $_POST["imglink"];
    $pdf = $_POST["pdflink"];


    $articles = array_merge(getArticles('pending'), getArticles('approved'), getArticles('rejected'), getArticles('published'));

    $catid = count($articles)+1;
    //$categories = array();
    $mail = $_SESSION["email"];
    $rpg = isset($_POST["rpg"]);
    $jump = isset($_POST["jump"]);
    $action = isset($_POST["action"]);
    $shooter = isset($_POST["shooter"]);

    $articleObj = new article();


    $articleObj->insertArticle($title, $authorname, $authormail, $publishdate, $catid, $img, $pdf, 'pending', $description, 0);

    $categoryObj = new category();


    if ($rpg) {
        $categoryObj->insertCategory($catid,"rpg");
    }
    if ($jump) {
        $categoryObj->insertCategory($catid,"jump'n run");
    }
    if ($action) {
        $categoryObj->insertCategory($catid,"action");
    }
    if ($shooter) {
        $categoryObj->insertCategory($catid,"shooter");
    }


/*
    $articledata = file_get_contents("../json/articles.json");
    $articles = json_decode($articledata, true);

    $id = ($articles[count($articles) - 1]["id"]) + 1;

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
*/
    //header("Location: ../views/author.php");
}


?>