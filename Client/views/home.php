<?php
session_start();
$cookie_name = "user";
$cookie_value = "Max Mustermann";
setCookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <title>Online-Journal</title>
    <meta charset="utf-8">
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
<?php include "cookie_alert.php";
include "../db/db_auslesen.php";
include "../scripts/articlecardgenerator.php";
include "navbar.php" ?>


<!--<section class="contentS">
    <div class="wrapper">
        <h1>About Us</h1>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
            eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
            no sea takimata sanctus est Lorem ipsasdasasdum dolor sit amet. Lorem ipsum dolor sit amet,
            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam
            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
            Lorem ipsum dolor sit amet.</p>
    </div>
</section>-->
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <div class="card">
                    <h3 class="card-header">About us</h3>
                    <div class="card-body">
                        <h5 class="card-title">Title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero
                            eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                            no sea takimata sanctus est Lorem ipsasdasasdum dolor sit amet. Lorem ipsum dolor sit amet,
                            consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                            et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
                <br>
                <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-latest-tab" data-toggle="pill" href="#pills-latest"
                           role="tab" aria-controls="pills-latest" aria-selected="true">Latest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-bestRated-tab" data-toggle="pill" href="#pills-bestRated"
                           role="tab" aria-controls="pills-bestRated" aria-selected="false">Best rated</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-latest" role="tabpanel"
                         aria-labelledby="pills-latest-tab">
                        <div class="container">
                            <div class="row">
                                <?php
                                $articles = getArticles_sortby('published', 'published_date', false);

                                // Momentan wird noch jeder published article ausgelesen. wir sollten eventuell nur die letzten 6 oder so anzeigen.
                                foreach ($articles as $article => $articlecard) {
                                    generateArticleCard('archive', $articlecard);
                                }

                                ?>
                            </div>
                            <div id="content" class="col-md-4"></div>
                            <button id="showMore" class="btn col">Show more</button>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-bestRated" role="tabpanel"
                         aria-labelledby="pills-bestRated-tab">
                        <div class="container">
                            <div class="row">
                                <?php

                                $articles2 = getArticles_sortby('published', 'upvote', false);


                                // Momentan wird noch jeder published article ausgelesen. wir sollten eventuell nur die letzten 6 oder so anzeigen.
                                foreach ($articles2 as $article => $articlecard) {
                                    generateArticleCard('archive', $articlecard);
                                }

                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>
<script rel="script" type="text/javascript" src="../scripts/showMoreHome.js"></script>
</html>
