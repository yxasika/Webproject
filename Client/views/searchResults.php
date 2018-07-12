<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <?php include "head.php" ?>
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
