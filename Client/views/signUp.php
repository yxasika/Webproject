<?php
session_start();

include "navbar.php";

include "../db/createArticle.php";
include "../db/createUserlist.php";
include "../db/createCategorylist.php";
include "../db/createNotification.php";

$error = array();
$success = false;
if (isset($_POST["register"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass1 = md5($_POST["psw1"]);
    $pass2 = md5($_POST["psw2"]);

    $users = getUsers();

    if ($fname == "" || $lname == "" || $email == "" || $pass1 == "" || $pass2 == "") {
        $error[] = "Some inputfield are blank.";
    }
    if ($pass1 != $pass2) {
        $error[] = "Passwords do not match.";
    }

    if ($pass1 == $pass2) {
        foreach ($users as $user => $user) {
            if ($email == $users[$user]["email"]) {
                $error[] = "Email is already taken";
            }
        }
        if (count($error) == 0) {
            $userObj = new user();
            $userObj->insertUser($fname, $lname, $email, $pass1, 'author');

            $success = true;
            header('Refresh: 2; URL=../views/login.php');
        }
    }
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Sign Up</title>
    <?php include "head.php" ?>
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6  modal-content">
            <div class="modal-body">
                <h5 class="modal-title modal-header" id="exampleModalLabel">Registration</h5>
                <form method="post" action="">
                    <input class="form-control" type="text" placeholder="Enter First Name" name="fname" required/>
                    <input class="form-control" type="text" placeholder="Enter Last Name" name="lname" required/>
                    <input class="form-control" type="email" placeholder="Enter E-Mail" name="email" required/>
                    <input class="form-control" type="password" placeholder="Enter Password" name="psw1" required/>
                    <input class="form-control" type="password" placeholder="Repeat Password" name="psw2" required/>
                    <?php
                    if (count($error) > 0) {
                        echo "<ul class='text-danger' style='list-style-type: none;'>";
                        foreach ($error as $e) {
                            echo "<li>" . $e . "</li>";
                        }
                        echo "</ul>";
                    }
                    if ($success) {
                        echo '<ul class="text-success" style= "list-style-type: none;"><li>Registration successful. Forwarding to Login page in a moment.</li></ul>';
                    }
                    ?>
                    <div class="modal-footer">
                        <button name="register" class="popupBtn btn btn-primary my-2 my-sm-0" type="submit">Sign Up
                        </button>
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