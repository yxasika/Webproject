<?php
session_start();
?>
<?php include "../scripts/function.php" ?>
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

<body id="contactform" onload="document.contactform.sender.focus();">
<?php include "logReg.php"?>
<?php include "navbar.php"?>
<?php include "cookie_alert.php"?>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <form class="content" name="contact" action="home.php">
        <h2>Contact us</h2>
        <div class="form-group">
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="email" name="sender" placeholder="my.adress@example.com" class="form-control" required/>
        </div>
        <div class="form-group">
          <select class="form-control" required>
        <option value="" selected disabled>Subject</option>
        <option value="articles">Articles</option>
        <option value="author">Author</option>
        <option value="profile">Profile</option>
        <option value="other">Other</option>
      </select>
        </div>
        <div>
          <label for="message">Your message:</label>
          <textarea id="message" name="message" placeholder="write your text here..." cols="20" rows="10" class="form-control"></textarea>
        </div>
        <div>
          <input type="submit" value="SEND" class="btn btn-primary float-right" />
        </div>
      </form>
    </div>
  </div>
</main>
<?php include "footer.php"?>
</body>

</html>
