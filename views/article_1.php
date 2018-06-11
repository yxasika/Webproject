<?php
session_start();
?>
<?php include "../scripts/logReg.php" ?>
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
<?php include "logReg.php"?>
<?php include "navbar.php"?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <article>

                    <div class="card">
                        <div class="row">
                            <div class="col">
                                <img class="card-img-left mx-auto" src="../src/imgs/monster_hunter_world.jpg"
                                     alt="monster_hunter_world">
                            </div>
                            <div class="col">
                                <div class="card-body">
                                    <h5 class="card-title">Article 1</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed
                                        diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Lorem
                                        ipsum dolor
                                        sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                                        labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                                        et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum.</p>
                                </div>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">author: <a class="card-link" href="#">Max Mustermann</a></li>
                            <li class="list-group-item">published: 11.09.2018</li>
                            <li class="list-group-item">category: <a href="#" class="badge badge-primary">RPG</a>, <a
                                    href="#" class="badge badge-warning">ACTION</a></li>
                            <li class="list-group-item">
                                <a class="btn btn-outline-primary icon" role="button" target="_blank" href="../scripts/pdf.js-gh-pages/web/viewer.html?file=../../../src/imgs/article.myJournal.pdf">
                                    <i class="material-icons">book</i> read</a>
                                <a class="btn btn-outline-primary icon" role="button" target="_blank"
                                   href="../src/imgs/article.myJournal.pdf" download="article_1">
                                    <i class="material-icons">file_download</i> Download</a>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <hr/>
                    <form class="comment" name="comment">
                        <div class="form-group">
                            <label for="commentbox">COMMENT</label>
                            <textarea id="commentbox" name="comment" placeholder="write your comment..." cols="20"
                                      rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="anonym">
                                <label class="form-check-label" for="anonym">
                                    anonymous comment
                                </label>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="SEND" class="btn btn-primary float-right"/>
                            </div>
                        </div>
                    </form>
                </article>
            </div>
        </div>
    </div>
</main>

<footer class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="col">
        <div class="row">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item text-center">
                    <a class="nav-link" href="impressum.html">IMPRESSUM</a>
                </li>
                <li class="nav-item text-center">
                    <a class="nav-link" href="contact.html">CONTACT</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <p class="text-secondary  mx-auto">&copy; 2018 DPAD</p>
        </div>
    </div>
</footer>
</body>

</html>
