<!DOCTYPE html>
<html lang="en">

<!-- Seite ist angelehnt an Bootstrap Album example
 https://getbootstrap.com/docs/4.0/examples/album/-->

<head>
    <title>Online-Journal</title>
    <meta charset="utf-8" lang="de">
    <meta name="viewport" content="width = device-width, height = device-height, initial-scale=1.0,
  user-scalable=yes">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/loginPopup.css">
    <script rel="script" type="text/javascript" src="../scripts/loginPopup.js"></script>
    <script rel="script" type="text/javascript" src="../scripts/jquery.rotate.1-1.js"></script>
    <script type="text/javascript" src="../scripts/search.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
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
