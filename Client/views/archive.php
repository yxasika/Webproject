<!DOCTYPE html>
<html lang="en">

<head>
    <title>Archive</title>
    <?php include "head.php" ?>
</head>

<body>
<?php include "navbar.php";
include "../scripts/articlecardgenerator.php";
include "cookie_alert.php" ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card container">
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading">Archive</h1>
                        <p class="card-text">This is the archive. Here are all published articles listed. You can access
                            them if you click on -Read more-.</p>
                    </div>
                </section>

                <hr>
                <div class="container">
                <div class="row">

                    <?php
                    $articles = getArticles('published');

                    foreach ($articles as $article => $articlecard) {
                        generateArticleCard("archive", $articlecard);
                    }
                    ?>

                </div></div>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php" ?>
</body>
<!--<script rel="script" type="text/javascript" src="../scripts/showMore.js"></script>-->
</html>
