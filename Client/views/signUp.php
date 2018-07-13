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