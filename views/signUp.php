<?php include "navbar.php" ?>
<?php include "footer.php" ?>
<?php
$error = array();
if (isset($_POST["register"])) {

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass1 = $_POST["psw1"];
    $pass2 = $_POST["psw2"];

    $data = file_get_contents("../json/users.json");
    $users = json_decode($data, true);
    if($fname == "" || $lname == "" || $email == "" || $pass1 == "" || $pass2 == ""){
        $error[] = "Some inputfield are blank.";
    }
    if($pass1 != $pass2){
        $error[] = "Passwords do not match.";
    }

    if ($pass1 == $pass2) {
        foreach ($users as $user => $user) {
            if ($email == $users[$user]["email"]) {
                $error[] = "Email is already taken";
            }
        }
        if (count($error) == 0) {
            $newuser = array(
                "firstname" => $fname,
                "lastname" => $lname,
                "email" => $email,
                "password" => md5($pass1),
                "role" => "author"
            );

            array_push($users, $newuser);

            $newdata = json_encode($users);

            file_put_contents("../json/users.json", $newdata);
            header("Location: ../views/home.php");
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
    <link rel="stylesheet" type="text/css" href="../css/search.css">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col">
        </div>
        <div class="col-6  modal-content">
            <h5 class="modal-title modal-header" id="exampleModalLabel">Registration</h5>
            <div class="modal-body">
                <form class="container" method="post" action="">
                    <input class="form-control mb-1" type="text" placeholder="Enter First Name" name="fname"/>
                    <input class="form-control mb-1" type="text" placeholder="Enter Last Name" name="lname"/>
                    <input class="form-control mb-1" type="text" placeholder="Enter E-Mail" name="email"/>
                    <input class="form-control mb-1" type="password" placeholder="Enter Password" name="psw1"/>
                    <input class="form-control mb-3" type="password" placeholder="Repeat Password" name="psw2"/>
                    <?php
                        if(count($error) > 0){
                            echo "<ul class='text-danger' style='list-style-type: none;'>";
                            foreach ($error as $e){
                                echo "<li>".$e."</li>";
                            }
                            echo "</ul>";
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

</body>
</html>