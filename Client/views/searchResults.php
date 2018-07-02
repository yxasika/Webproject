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
    <link rel="stylesheet" type="text/css" href="../css/searchBar.css">
</head>
<body>

<?php include "navbar.php" ?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <ul class="searchNav">
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=A">A</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=B">B</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=C">C</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=D">D</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=E">E</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=F">F</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=G">G</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=H">H</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=I">I</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=J">J</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=K">K</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=L">L</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=M">M</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=N">N</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=O">O</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=P">P</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=Q">Q</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=R">R</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=S">S</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=T">T</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=U">U</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=V">V</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=W">W</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=X">X</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=Y">Y</a></li>
                    <li><a href="http://localhost/Webproject/Client/views/searchResults.php?letter=Z">Z</a></li>
                </ul>
                <div id="searchForm">
                    <form method="get" action="">
                        <input class="searchInput" name="search">
                        <button type="submit"><i class="material-icons">search</i></button>
                    </form>
                </div>
                <hr>
                <ul>
                    <!--<li class="wrapper">
                        <a>
                            <ul class="results">
                                <li>title</li>
                                <li>author</li>
                                <li>desc</li>
                                <li>publisched_date</li>
                            </ul>
                        </a>
                    </li>-->
                    <?php include "../scripts/search.php" ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php" ?>

</body>

</html>
