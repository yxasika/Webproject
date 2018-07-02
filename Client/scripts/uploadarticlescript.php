<?php
include "../db/db_auslesen.php";
include "../db/createArticle.php";
include "../db/createCategorylist.php";

$success = false;
$error = array();

if (isset($_POST["upload"])) {

    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST['descriptionarea']);
    //$pdflink = "../src/imgs/article.myJournal.pdf"; //wird später durch den pdf-dateiinput ersetzt
    //$imglink = "../src/imgs/dark_souls.jpg"; //wird später über die aktuelle login-session gelesen
    $authorname = $_SESSION["firstname"] . " " . $_SESSION["lastname"];
    //$articlelink = "../views/article_1.php";    //wird später durch eine hoffentlich automatisch generierte php-seite ersetzt
    $authormail = $_SESSION["email"];
    $publishdate = NULL;

    $articles = array_merge(getArticles('pending'), getArticles('approved'), getArticles('rejected'), getArticles('published'));
    $catid = count($articles)+1;

    $imgpath = "../../Server/imgs/" .$catid. basename($_FILES["imgfile"]["name"]);
    $pdfpath = "../../Server/pdfs/" .$catid. basename($_FILES["pdffile"]["name"]);

    $mail = $_SESSION["email"];
    $rpg = isset($_POST["rpg"]);
    $jump = isset($_POST["jump"]);
    $action = isset($_POST["action"]);
    $shooter = isset($_POST["shooter"]);

    //testing for errors:
    $filetype = strtolower(pathinfo($imgpath,PATHINFO_EXTENSION));
    if($filetype != "png" && $filetype != "jpg" && $filetype != "jpeg")
    {
        $error[] = "Wrong image format. Please select a PNG, JPG or JPEG.";
    }
    $filetype = strtolower(pathinfo($pdfpath,PATHINFO_EXTENSION));

    if($filetype != "pdf")
    {
        $error[] = "Wrong article format. Please select a PDF.";
    }
    if (count($error) == 0)
    {
        $success = true;
        move_uploaded_file($_FILES["imgfile"]["tmp_name"], $imgpath);
        move_uploaded_file($_FILES["pdffile"]["tmp_name"], $pdfpath);
        header('Refresh: 2; URL=../views/login.php');
    }




    $articleObj = new article();


    $articleObj->insertArticle($title, $authorname, $authormail, $publishdate, $catid, $imgpath, $pdfpath, 'pending', $description, 0);

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