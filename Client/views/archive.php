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
            <div class="content">
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
                <ul id="myUL">

                    <?php
                    $articles = getArticles('published');

                    foreach ($articles as $article => $articlecard) {

                        echo"<li>";
                        generateArticleCard("archive", $articlecard);
                        echo"</li>";

                    }
                    ?>
                    <div id="content"></div>
                </ul>
                <button id="showMore" class="btn col">Show more</button>
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
