<!DOCTYPE html>
<html lang="en">

<head>
    <title>Article</title>
    <?php include "head.php" ?>
</head>

<body>
<?php
include "navbar.php";
include "../db/db_auslesen.php";
include "../db/createArticle.php";
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
                            <li class="list-group-item">
                                <a class="btn btn-outline-primary icon" role="button" target="_blank"
                                   href="../scripts/pdf.js-gh-pages/web/viewer.html?file=../../' . $currentarticle["pdf"] . '">
                                    <i class="material-icons">book</i> read</a>
                                <a class="btn btn-outline-primary icon mr-4" role="button" target="_blank"
                                   href="' . $currentarticle["pdf"] . '" download="article ' . $currentarticle["id"] . '">
                                    <i class="material-icons">file_download</i> Download</a>
                                ' . $currentarticle["upvote"] . ' <a name="upvotebtn" role="button" href="#" class="btn btn-outline-success icon" ><i class="material-icons">favorite_border</i> Upvote</a>
                            </li>
                        </ul>
                    </div>
                    <br>'; ?>


                            <form class="comment" name="comment">
                                <div class="form-group">
                                    <label for="commentbox">Comment</label>
                                    <textarea id="commentbox" name="comment" placeholder="Write your comment..."
                                              cols="20"
                                              rows="3" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="anonym">
                                        <label class="form-check-label" for="anonym">Anonymous comment</label>
                                        <input type="submit" value="SEND" class="btn btn-primary float-right"/>
                                    </div>
                                </div>
                            </form>
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
