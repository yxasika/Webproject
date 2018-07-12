<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <?php include "head.php" ?>
</head>

<body>
<?php
include "navbar.php";
$cookie_name = "user";
$cookie_value = "Max Mustermann";
setCookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
include "cookie_alert.php";
include "../db/db_auslesen.php";
include "../scripts/articlecardgenerator.php";
?>

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
