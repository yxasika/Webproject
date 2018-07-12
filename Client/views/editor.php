<!DOCTYPE html>
<html lang="en">

<head>
    <title>Editor</title>
    <?php include "head.php" ?>
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
                <?php
                if(isset($_SESSION["role"]) && $_SESSION["role"] == "editor")
                {
                    echo'<section class="jumbotron text-center">
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
                            <div class="row">';

                    $articles = getArticles('pending');

                    foreach ($articles as $article => $articlecard) {
                        if ($articles[$article]['authormail'] != $_SESSION["email"]) {

                            generatepopup("approve", ($articlecard["id"]), "Are you sure you want to approve this article?", "success");

                            generatepopup("reject", ($articlecard["id"]), "Are you sure you want to reject this article?", "danger");

                            generateArticleCard('editor_pending', $articlecard);
                        }
                    }


                    echo'</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-approved" role="tabpanel" aria-labelledby="pills-approved-tab">
                        <div class="container">
                            <div class="row">';

                    $articles = getArticles('approved');

                    foreach ($articles as $article => $articlecard) {
                        generatepopup("publish", ($articlecard["id"]), "Are you sure you want to publish this article?", "warning");

                        generateArticleCard('editor_approved', $articlecard);
                    }

                    echo'</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-rejected" role="tabpanel" aria-labelledby="pills-rejected-tab">
                        <div class="container">
                            <div class="row">
                                <?php
                                $articles = getArticles(\'rejected\');

                                foreach ($articles as $article => $articlecard) {
                                    generateArticleCard(\'editor_rejected\', $articlecard);
                                }
                                ?>
                            </div>
                        </div>
                    </div></div>';

                }
                else{
                    echo'<br /><br /><br /><br />
<p class="text-danger">Missing permissions to access this page. If you believe this is a mistake, contact our admin.</p>
';
                }

                ?>
            </div>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>

</html>
