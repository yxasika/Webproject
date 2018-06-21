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
    <script rel="script" type="text/javascript" src="../js/loginPopup.js"></script>
    <script rel="script" type="text/javascript" src="../js/jquery.rotate.1-1.js"></script>
    <script type="text/javascript" src="../js/search.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body>
<?php include "logReg.php" ?>
<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="../imgs/logo.png" alt="logo" align="center"
                                                  onclick="$(this).rotate(45)"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="archive.php">ARCHIVE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile.php">PROFILE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="editor.php">EDITOR</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="author.php">AUTHOR</a>
            </li>
        </ul>
        <ul class="navbar-nav ">
            <form class="form-inline my-2 my-lg-0" id="searchForm">
                <input class="searchInput form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"
                       id="searchInput">
            </form>
            <a class="btn btn-primary icon my-2 mr-2" role="button" href="notification.php">
                <i class="material-icons">notifications</i><span class="badge">4</span></a>
            <button class="btn btn-primary my-2 mr-2"
                    onclick="document.getElementById('login-wrapper').style.display='block'">LOG IN
            </button>
            <button class="btn btn-primary my-2 sm-0"
                    onclick="document.getElementById('register-wrapper').style.display='block'">SIGN UP
            </button>
        </ul>
    </div>
</nav>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <form class="form-inline my-2 my-lg-0 " action="searchResults.php">
                    <input class="searchInput form-control mr-sm-2" id="myInput" onkeyup="searchFunction()"
                           type="search" placeholder="Search" aria-label="Search">
                </form>
                <hr>
                <ul id="myUL" class="list-group">

                    <?php
                    $source = file_get_contents("assets/json/articles.json");
                    $articles = json_decode($source, true);

                    foreach ($articles as $article => $article)
                    {
                        if($articles[$article]["status"] == "published") {
                            echo
                                '
                            <li><a href=' . $articles[$article]["articlelink"] . ' class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">' . $articles[$article]["title"] . '
                            <small class="text-muted">' . $articles[$article]["published"] . '</small>
                            </div>
                        <p class="mb-1">' . $articles[$article]["description"] . '</p>
                        <small>' . $articles[$article]["author"] . '</small></a></li>
                        ';
                        }
                    }
                    ?>
                </ul>

                <ul class="pagination" style="margin-top: 1em;">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                </ul>
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

</html>
