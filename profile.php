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
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
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
    <link rel="stylesheet" type="text/css" href="assets/css/loginPopup.css">
    <script rel="script" type="text/javascript" src="assets/js/loginPopup.js"></script>
    <script rel="script" type="text/javascript" src="assets/js/jquery.rotate.1-1.js"></script>
    <script type="text/javascript" src="assets/js/search.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/search.css">
    <script type="text/javascript" src="assets/js/js.js"></script>
</head>

<body>
<?php include "logReg.php" ?>
<?php include "navbar.php" ?>

<!--Save Popup-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <form class="content" name="profile" action="profile.php">
                <div class="imgcontainer">
                    <i id="pic" alt="Avatar" class="avatar material-icons">account_circle</i>
                </div>
                <div class="container">
                    <input type="text" placeholder="Enter First Name" name="fname">
                    <input type="text" placeholder="Enter Last Name" name="lname">
                    <input type="date" placeholder="DD/MM/YYYY" name="date">
                    <input type="text" placeholder="Enter E-Mail" name="email">
                    <input type="password" placeholder="Enter Password" name="psw">
                    <input type="password" placeholder="Repeat Password" name="psw2">
                    <button type="button" class="popupBtn btn btn-primary my-2 my-sm-0" data-toggle="modal"
                            data-target="#exampleModalCenter">Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>

</html>
