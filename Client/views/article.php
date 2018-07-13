<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article</title>
    <?php include "head.php" ?>
</head>

<body>
<?php
include "navbar.php";
include "../db/createArticle.php";

$articleObj = new article();

$noarticle = true;
$articles = array_merge(getArticles('pending'), getArticles('approved'), getArticles('rejected'), getArticles('published'));

if (isset($_GET["artid"])) {
    foreach ($articles as $article => $articlecard) {
        //echo "<p>".$articlecard["id"]."</p>";
        if ($articlecard["id"] == $_GET["artid"]) {
            $currentarticle = $articlecard;
            $noarticle = false;
        }
    }
    //echo "<p class='text-warning'>".$_GET["artid"]."</p>";
}

if(isset($_POST["upvotebtn"]))
{
    if(!isset($_SESSION["upvote".$currentarticle["id"]]))
    {
    $articleObj->upvoteArticle($_POST["upvotebtn"]);
    $_SESSION["upvote".$currentarticle["id"]] = true;
        header("Refresh:0");
    }
}
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <article>
                <div class="card">
                    <div class="row">
                        <div class="col">
                            <?php
                            if ($noarticle) {
                                echo "<p class='text-warning'>No valid article given in url. How did you get here?</p>";
                            }
                            else
                            {
                            echo '
                                        <img class="card-img-top img-fluid" src="' . $currentarticle["img"] . '" alt="article image">
                                         </div>
                                            <div class="col">
                                    <div class="card-body">
                                    <h5 class="card-title">' . $currentarticle["title"] . '</h5>
                                    <p class="card-text">' . $currentarticle["description"] . '</p>
                                    
                                    </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Author: <a class="card-link" href="#">' . $currentarticle["author"] . '</a></li>
                            <li class="list-group-item">Published: ' . $currentarticle["published_date"] . '</li>
                            <li class="list-group-item">Category: ';
                            $categories = getCategories($currentarticle['id']);
                            foreach ($categories as $category) {
                                echo '<a href="#" class="badge badge-info mr-2">' . $category . '</a>';
                            }
                            echo '
                                    
                                    </li>
                            <li class="form-group row mt-2">
                                <a class="btn btn-outline-primary icon" role="button" target="_blank"
                                   href="../scripts/pdf.js-gh-pages/web/viewer.html?file=../../' . $currentarticle["pdf"] . '">
                                    <i class="material-icons">book</i> read</a>
                                <a class="btn btn-outline-primary icon mr-4" role="button" target="_blank"
                                   href="' . $currentarticle["pdf"] . '" download="article ' . $currentarticle["id"] . '">
                                    <i class="material-icons">file_download</i> Download</a>
                                ';
                                if($currentarticle["status"]=="published")
                                    {
                                        if(!isset($_SESSION["upvote".$currentarticle["id"]]))
                                        {
                                            echo '<form method="post"> <button type="submit" value="'.$currentarticle["id"].'" name="upvotebtn" role="button" href="#" class="btn btn-outline-success icon"><i class="material-icons">favorite_border</i>'. $currentarticle["upvote"] . '</button></form>';
                                        }
                                        else
                                        {
                                            echo '<button disabled value="upvote" name="upvotebtn" role="button" class="btn btn-success icon"><i class="material-icons">favorite</i>'. $currentarticle["upvote"] . '</button>';
                                        }

                                    }

                                echo'
                            </li>
                        </ul>
                    
                    <br>';
                            }?>
                        </div></div></div>
            </article>
        </div>
    </div>
</main>

<footer class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="col">
        <div class="row">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center">
                    <a class="nav-link" href="impressum.html">IMPRESSUM</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <p class="text-secondary  mx-auto">&copy; 2018 DPAD</p>
        </div>
    </div>
</footer>
</body>

</html>
