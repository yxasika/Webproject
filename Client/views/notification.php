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


if (isset($_POST["markread"])) {
    $notifiObj->readNotifi($_POST["notid"]);

}
$i = 0;

function generatemessagepopup($receiver, $sender, $subject, $id)
{
    echo '
    <div class="modal fade" id="ModalMessage' . $id . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalMessage' . $id . 'Title">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post">
            <div class="modal-body">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Subject:</label>
                            <input type="text" class="form-control" value="'.$subject.'" id="subject" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" value="'.$receiver.'" id="recipient" name="recipient">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" name="message"></textarea>
                        </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input type="hidden" value="'.$sender.'" name="sender"/>
                <button type="submit" name="send" class="btn btn-primary" >Send Message</button>
            </div>
            </form>
        </div>
    </div>
    </div>
    ';
}

?>

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="content">
                <ul class="nav nav-tabs" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-newMessage-tab" data-toggle="pill" href="#pills-newMessage"
                           role="tab" aria-controls="pills-newMessage" aria-selected="true">New Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-readMessage-tab" data-toggle="pill" href="#pills-readMessage"
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

                                            generatemessagepopup(htmlspecialchars($notifi[$notification]["receiver"]), htmlspecialchars($notifi[$notification]["sender"]), "RE: ".htmlspecialchars($notifi[$notification]["subject"]), $i);

                                            echo '<div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Subject: ' . htmlspecialchars($notifi[$notification]['subject']) . '</h5>
                                                    <p class="text-muted">' . htmlspecialchars($notifi[$notification]["sender"]) . '</p>
                                                    <h6 class="card-title">Message:</h6>
                                                    <p class="card-text">' . htmlspecialchars($notifi[$notification]["message"]) . '</p>
                                                    <a class="btn btn-primary" data-toggle="modal" data-target="#ModalMessage'.$notifi[$notification]["id"].'">Answer</a>
                                                    <form method="post" action=""><input name="notid" type="hidden" value="' . $notifi[$notification]["id"] . '"/><button type="submit" name="markread" class="btn btn-secondary">Mark read</button></form>
                                                    </div>
                                                    </div>';
                                            $i++;
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
                                            echo '<div class="card">
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
