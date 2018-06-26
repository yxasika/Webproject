<?php
session_start();
?>

<!DOCTYPE html>


<html lang="en">

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
