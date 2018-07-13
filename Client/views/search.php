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
            <ul class="searchNav">
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=A">A</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=B">B</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=C">C</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=D">D</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=E">E</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=F">F</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=G">G</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=H">H</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=I">I</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=J">J</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=K">K</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=L">L</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=M">M</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=N">N</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=O">O</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=P">P</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=Q">Q</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=R">R</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=S">S</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=T">T</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=U">U</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=V">V</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=W">W</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=X">X</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=Y">Y</a></li>
                <li><a href="http://localhost/Webproject/Client/views/search.php?letter=Z">Z</a></li>
            </ul>
            <div id="searchForm">
                <form method="get" action="">
                    <input class="searchInput" name="search">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
                <hr>
                <ul>
                    <?php include "../scripts/search.php" ?>
                </ul>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php" ?>

</body>

</html>
