<?php
include "../db/createArticle.php";
include "../db/createCategorylist.php";

$success = false;
$error = array();

if (isset($_POST["upload"])) {

    $title = htmlspecialchars($_POST["title"]);
    $description = htmlspecialchars($_POST['descriptionarea']);
    $authorname = $_SESSION["firstname"] . " " . $_SESSION["lastname"];
    $authormail = $_SESSION["email"];
    $publishdate = NULL;

    $articles = array_merge(getArticles('pending'), getArticles('approved'), getArticles('rejected'), getArticles('published'));
    $catid = count($articles) + 1;

    $imgpath = "../../Server/imgs/" . $catid . basename($_FILES["imgfile"]["name"]);
    $pdfpath = "../../Server/pdfs/" . $catid . basename($_FILES["pdffile"]["name"]);

    $mail = $_SESSION["email"];

    $categories = $_POST['categories'];

    //testing for errors:
    $filetype = strtolower(pathinfo($imgpath, PATHINFO_EXTENSION));
    if ($filetype != "png" && $filetype != "jpg" && $filetype != "jpeg") {
        $error[] = "Wrong image format. Please select a PNG, JPG or JPEG.";
    }
    $filetype = strtolower(pathinfo($pdfpath, PATHINFO_EXTENSION));

    if ($filetype != "pdf") {
        $error[] = "Wrong article format. Please select a PDF.";
    }
    if (count($error) == 0) {
        $success = true;
        move_uploaded_file($_FILES["imgfile"]["tmp_name"], $imgpath);
        move_uploaded_file($_FILES["pdffile"]["tmp_name"], $pdfpath);
        echo '<script type="text/javascript">
                    function myFunction() {
                        window.location.href = "../views/author.php"
                    }
                setTimeout(myFunction, 2000);
              </script>';
    }


    $articleObj = new article();


    $articleObj->insertArticle($title, $authorname, $authormail, $publishdate, $catid, $imgpath, $pdfpath, 'pending', $description, 0);

    $categoryObj = new category();

    foreach ($categories as $category) {
        $categoryObj->insertCategory($catid, $category);
    }


}


?>