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
<?php
include "navbar.php";
include "../scripts/articleeditor.php";
include "../db/db_auslesen.php";
include "../scripts/articlecardgenerator.php";
include "../scripts/popupgenerator.php"
?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card container">
                <section class="jumbotron text-center">
                    <div class="container">
                        <h1 class="jumbotron-heading">Articles</h1>
                        <p class="lead text-muted">This is the perspective of an editor. You can view all of articles
                            , approve or reject them here.</p>
                    </div>
                </section>

                <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-pending-tab" data-toggle="pill" href="#pills-pending"
                           role="tab" aria-controls="pills-pending" aria-selected="true">Pending articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-approved-tab" data-toggle="pill" href="#pills-approved" role="tab"
                           aria-controls="pills-approved" aria-selected="false">Approved articles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-rejected-tab" data-toggle="pill" href="#pills-rejected" role="tab"
                           aria-controls="pills-rejected" aria-selected="false">Rejected articles</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-pending" role="tabpanel"
                         aria-labelledby="pills-pending-tab">
                        <div class="container">
                            <div class="row">

                                <?php

                                $articles = getArticles('pending');

                                foreach ($articles as $article => $articlecard) {
                                    if ($articles[$article]['authormail'] != $_SESSION["email"]) {

                                        generatepopup("approve", ($articlecard["id"]), "Are you sure you want to approve this article?", "success");

                                        generatepopup("reject", ($articlecard["id"]), "Are you sure you want to reject this article?", "danger");

                                        generateArticleCard('editor_pending', $articlecard);
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                        <div class="container">
                            <div class="row">
                                <?php

                                $articles = getArticles('approved');

                                foreach ($articles as $article => $articlecard) {
                                    generatepopup("publish", ($articlecard["id"]), "Are you sure you want to publish this article?", "warning");

                                    generateArticleCard('editor_approved', $articlecard);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                        <div class="container">
                            <div class="row">
                                <?php
                                $articles = getArticles('rejected');

                                foreach ($articles as $article => $articlecard) {
                                    generateArticleCard('editor_rejected', $articlecard);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>

</html>
