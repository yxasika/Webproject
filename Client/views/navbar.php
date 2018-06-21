<?php
if (isset($_POST["search"])) {
    $_SESSION["search"] = $_POST["search"];
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
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
</head>
<body>
<div class="wrapper">
    <nav>
        <div class="logo">
            <i id="menu" class="material-icons">dehaze</i>
            <label for="navToggle">D+Pad</label>
            <input type="checkbox" id="navToggle"></div>
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
            <input type="checkbox" id="searchCheckbox">
            <li><label for="searchCheckbox"><i class="material-icons">search</i></label></li>
            <li><input type="search" class="searchInput" placeholder="Search.."></li>
            <li><i class="material-icons">notifications</i><span class="badge"></span></a></li>
            <?php
            if (!isset($_SESSION["username"])) {
                echo '<li><a class="active" href="login.php" name="loginBtn">Log In</a></li>';
                echo '<li><a class="active" href="signUp.php" name="signupBtn">Sign Up</a></li>';
            } else {
                echo '<li><a class="active" href="logout.php" name="logoutBtn">Log out</a></li>';
            }
            ?>
        </ul>
    </nav>
</div>
</body>