<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <?php include "head.php" ?>
</head>

<body>

<?php include "navbar.php";
include "../db/db_auslesen.php";
include "../scripts/articlecardgenerator.php"
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="album py-5 bg-light">
                <div class="card container">
                    <section class="jumbotron text-center">
                        <div class="container">
                            <h1 class="jumbotron-heading">My articles</h1>
                            <p class="lead text-muted">This is the perspective of an author. You can view all of your
                                articles
                                and edit them here. You can upload new articles too.</p>
                            <p>
                                <a href="#" class="btn btn-primary my-2"
                                   onclick="window.location.href='uploadarticle.php'">Upload
                                    a new
                                    article</a>
                            </p>
                        </div>
                    </section>

                    <div class="container">
                        <div class="row">

                            <?php

                            $articles = array_merge(getArticles('pending'), getArticles('approved'), getArticles('rejected'), getArticles('published'));

                            foreach ($articles as $article => $articlecard) {
                                if ($articlecard['authormail'] == $_SESSION["email"]) {

                                    generateArticleCard("author", $articlecard);

                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<?php include "footer.php" ?>
</body>

</html>
