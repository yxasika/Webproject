<link rel="stylesheet" type="text/css" href="../css/blackNav.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
    $(window).on('scroll', function () {
        if ($(window).scrollTop()) {
            $('nav').addClass('black');
        }
        else {
            $('nav').removeClass('black');
        }
    })
    $('#searchCheckbox').change(function () {
        if (this.checked) {
            $('.searchInput').animate({width: '+=200px'});
        }
    })
</script>

<nav>
    <div class="logo">
        <label for="navToggle">D+Pad</label>
    </div>
    <ul class="leftnav nav">
        <li><a href="home.php">Home</a></li>
        <li><a href="archive.php">Archive</a></li>
        <?php
        if (isset($_SESSION["role"]) && $_SESSION["role"] == "editor") {
            echo '<li><a href="editor.php">Editor</a></li>';
            echo '<li><a href="author.php">Author</a></li>';
        }
        if (isset($_SESSION["role"]) && $_SESSION["role"] == "author") {
            echo '<li><a href="author.php">Author</a></li>';
        }
        ?>
    </ul>
    <ul class="rightnav nav">
        <li><a href="searchResults.php"><i class="material-icons">search</i></a></li>
        <?php
        if (!isset($_SESSION["firstname"])) {
            echo '<li><a class="active" href="login.php" name="loginBtn">Log In</a></li>
                  <li><a class="active" href="signUp.php" name="signupBtn">Sign In</a></li>';
        } else {
            echo '<li><a href="notification.php"><i class="material-icons">notifications</i><span class="badge"></span></a></li>';
            echo '<li><a class="active" href="logout.php.php" name="logoutBtn">Log out</a></li>';
        }
        ?>
    </ul>
</nav>
