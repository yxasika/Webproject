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
                <li><a href="?letter=A">A</a></li>
                <li><a href="?letter=B">B</a></li>
                <li><a href="?letter=C">C</a></li>
                <li><a href="?letter=D">D</a></li>
                <li><a href="?letter=E">E</a></li>
                <li><a href="?letter=F">F</a></li>
                <li><a href="?letter=G">G</a></li>
                <li><a href="?letter=H">H</a></li>
                <li><a href="?letter=I">I</a></li>
                <li><a href="?letter=J">J</a></li>
                <li><a href="?letter=K">K</a></li>
                <li><a href="?letter=L">L</a></li>
                <li><a href="?letter=M">M</a></li>
                <li><a href="?letter=N">N</a></li>
                <li><a href="?letter=O">O</a></li>
                <li><a href="?letter=P">P</a></li>
                <li><a href="?letter=Q">Q</a></li>
                <li><a href="?letter=R">R</a></li>
                <li><a href="?letter=S">S</a></li>
                <li><a href="?letter=T">T</a></li>
                <li><a href="?letter=U">U</a></li>
                <li><a href="?letter=V">V</a></li>
                <li><a href="?letter=W">W</a></li>
                <li><a href="?letter=X">X</a></li>
                <li><a href="?letter=Y">Y</a></li>
                <li><a href="?letter=Z">Z</a></li>
                <li>
                    <div class="dropdown">
                        <button class="btn btn-primary">Category</button>
                        <div class="dropdown-content">
                            <a href="?category=action">Action</a>
                            <a href="?category=jumpnrun">Jump'n
                                Run</a>
                            <a href="?category=rpg">Rpg</a>
                            <a href="?category=shooter">Shooter</a>
                        </div>
                    </div>
                </li>
            </ul>
            <div id="searchForm">
                <form method="get" action="">
                    <input class="searchInput" name="search">
                    <button type="submit"><i class="material-icons">search</i></button>
                </form>
                <hr>

                <table>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Publish date</th>
                        <th>Categories</th>
                        <th>Rating</th>
                        <th>Read</th>
                    </tr>
                    <?php include "../scripts/search.php" ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php" ?>

</body>

</html>
