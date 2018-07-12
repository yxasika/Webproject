<!DOCTYPE html>

<html lang="en">

<head>
    <title>Login</title>
    <?php include "head.php" ?>
</head>

<body>
<?php include "navbar.php" ?>
<?php
$error = false;
$success = false;
include "../db/db_auslesen.php";

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    if (isset($_POST["loginCheckbox"])) {
        $cookie_name = "email";
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    }

    $users = getUsers();

    foreach ($users as $user => $user) {
        if ($email == $users[$user]["email"]) {
            if ($password == $users[$user]["password"]) {
                $_SESSION["firstname"] = $users[$user]["firstname"];
                $_SESSION["lastname"] = $users[$user]["lastname"];
                $_SESSION["email"] = $users[$user]["email"];
                $_SESSION["role"] = $users[$user]["role"];
                $success = true;
                header('Refresh: 2; URL=../views/home.php');
            }
        }
    }
    if ($success == false) {
        $error = true;
    }

}
?>
</br>
</br>
</br>

<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6  modal-content">
            <div class="modal-body">
                <h5 class="modal-title modal-header" id="exampleModalLabel">Log In</h5>
                <form class="container" method="post" action=""/>
                <?php
                if (isset($_COOKIE["email"])) {
                    echo '<input class="form-control" type="text" placeholder="Enter your Email" name="email" value="' . $_COOKIE["email"] . '" required/>';
                } else {
                    echo '<input class="form-control" type="text" placeholder="Enter your Email" name="email" required/>';
                }
                ?>
                <input class="form-control" type="password" placeholder="Enter Password" name="password" required/>
                <?php
                if ($error) {
                    echo "<p class='text-danger'>Invalid email and/or password.</p>";
                }
                if ($success) {
                    echo '<ul class="text-success" style= "list-style-type: none;"><li>Login successful. Forwarding to home page in a moment.</li></ul>';
                }
                ?>
                <input name="loginCheckbox" type="checkbox" style="margin:26px 30px;"/> Remember me
                <a href="#" style="text-decoration:none; float:right; margin-right:34px; margin-top:26px;">Forgot
                    Password?</a>
                <div class="modal-footer">
                    <button class="popupBtn btn btn-primary my-2 my-sm-0" type="submit" name="login">Log In</button>
                </div>
                </form>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>
<?php include "footer.php" ?>

</body>
</html>