<!DOCTYPE html>
<html lang="en">

<head>
    <title>Archive</title>
    <?php include "head.php" ?>
</head>

<body>
<?php include "navbar.php";
include "../db/db_auslesen.php";
include "../scripts/articlecardgenerator.php";
include "cookie_alert.php" ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card container">
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading">Archive</h1>
                        <p class="card-text">This is the archive. You can view all published articles here. You can also search for articles here.</p>
                    </div>
                </section>

                <form class="form-inline my-2 my-lg-0 " action="archive.php">
                    <?php
                    if (isset($_SESSION["search"])) {
                        echo '<input class="searchInput form-control mr-sm-2" id="myInput" onkeyup="searchFunction()"
                           type="search" placeholder="Search" aria-label="Search" value="' . $_SESSION['search'] . '">';
                        echo '<script>searchFunction()</script>';
                        unset($_SESSION["search"]);
                    } else {
                        echo '<input class="searchInput form-control mr-sm-2" id="myInput" onkeyup="searchFunction()"
                           type="search" placeholder="Search" aria-label="Search">';
                    }
                    ?>
                </form>
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


<!--                <div id="content"></div>-->
<!--                <button id="showMore" class="btn col">Show more</button>-->
            </div>
        </div>
    </div>
</main>

<footer class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="col">
        <div class="row">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center">
                    <a class="nav-link" href="impressum.php">IMPRESSUM</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="contact.php">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <p class="text-secondary  mx-auto">&copy; 2018 DPAD</p>
        </div>
    </div>
</footer>
</body>
<script rel="script" type="text/javascript" src="../scripts/showMore.js"></script>


</html>
