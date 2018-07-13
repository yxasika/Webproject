<!DOCTYPE html>
<html lang="en">

<head>
    <title>Notification</title>
    <?php include "head.php" ?>
</head>

<body>

<?php
include "navbar.php";
include "../db/createNotification.php";

$notifiObj = new notification();


if(isset($_POST["markread"]))
{
    $notifiObj->readNotifi($_POST["notid"]);

}

?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-newMessage-tab" data-toggle="pill" href="#newMessage"
                           role="tab" aria-controls="pills-newMessage" aria-selected="true">New Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-readMessage-tab" data-toggle="pill" href="#readMessage"
                           role="tab" aria-controls="pills-readMessage" aria-selected="false">Read Messages</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-newMessage" role="tabpanel"
                         aria-labelledby="pills-newMessage-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <?php
                                    $notifi = getNotifi();
                                    foreach ($notifi as $notification => $notification) {
                                        if ($notifi[$notification]['receiver'] == ($_SESSION['email'] && $notifi[$notification]['status'] == 'new')) {
                                            print '<div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Subject: ' . htmlspecialchars($notifi[$notification]['subject']) . '</h5>
                                                    <p class="text-muted">' . htmlspecialchars($notifi[$notification]["sender"]) . '</p>
                                                    <h6 class="card-title">Message:</h6>
                                                    <p class="card-text">' . htmlspecialchars($notifi[$notification]["message"]) . '</p>
                                                    <a class="btn btn-primary">Answer</a>
                                                    <form method="post" action=""><input name="notid" type="hidden" value="'.$notifi[$notification]["id"].'"/><button type="submit" name="markread" class="btn btn-secondary">Mark read</button></form>
                                                    </div>
                                                    </div>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-readMessage" role="tabpanel"
                         aria-labelledby="pills-readMessage-tab">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <?php
                                    $notifi = getNotifi();
                                    foreach ($notifi as $notification => $notification) {
                                        if ($notifi[$notification]['receiver'] == ($_SESSION['email'] && $notifi[$notification]['status'] == 'read')) {
                                            print '<div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Subject: ' . htmlspecialchars($notifi[$notification]['subject']) . '</h5>
                                                    <p class="text-muted">' . htmlspecialchars($notifi[$notification]["sender"]) . '</p>
                                                    <h6 class="card-title">Message:</h6>
                                                    <p class="card-text">' . htmlspecialchars($notifi[$notification]["message"]) . '</p>
                                                    <a class="btn btn-primary">Answer</a>
                                                    </div>
                                                    </div>';
                                        }
                                    }
                                    ?>
                                </div>
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
