<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
?>

<nav class="navbar fixed-top navbar-expand-xl navbar-dark bg-dark">
    <a class="navbar-brand" href="home.php"><img src="../src/imgs/logo.png" alt="logo" align="center"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="home.php">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="archive.php">ARCHIVE</a></li>
            <?php
            if (isset($_SESSION["role"]) && $_SESSION["role"] == "editor") {
                echo '<li class="nav-item"><a class="nav-link" href="editor.php">EDITOR</a></li>';
                echo '<li class="nav-item"><a class="nav-link" href="author.php">AUTHOR</a></li>';
            }
            if (isset($_SESSION["role"]) && $_SESSION["role"] == "author") {
                echo '<li class="nav-item"><a class="nav-link" href="author.php">AUTHOR</a></li>';
            }
            ?>
        </ul>
        <ul class="navbar-nav">
            <a href="search.php" class="btn btn-primary icon my-2 mr-2" role="button"><i
                        class="material-icons">search</i></a>
            <?php
            if (!isset($_SESSION["firstname"])) {
                echo '<a href="login.php" class="btn btn-primary my-2 mr-2" name="loginBtn">Log In</a>
                    <a href="signUp.php" class="btn btn-primary my-2 mr-2" name="signupBtn">Sign Up</a>';
            } else {
                // echo '<a class="btn btn-primary icon my-2 mr-2" role="button" href="notification.php">
                //                       <i class="material-icons">notifications</i><span class="badge"></span></a>';
                echo '<a class="btn btn-warning icon my-2 mr-2" role="button" href="notification.php">
                       <i class="material-icons">notifications_active</i><span class="badge"></span></a>';
                echo '<a href="logout.php" class="btn btn-primary my-2 mr-2" name="logoutBtn">Log out</a>';
            }
            ?>
        </ul>
    </div>
</nav>
