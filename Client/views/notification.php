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
if (isset($_POST["recipient"]) and isset($_POST["subject"]) and isset($_POST["message"])) {
    $notifiObj->insertNotifi($_SESSION["email"], $_POST["recipient"], $_POST["subject"], $_POST["message"]);
}
?>

<main>
    <div class="container">
        <div class="row justify-content-center card">
            <section>
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
                                        if ($notifi[$notification]['receiver'] == $_SESSION['email'] and $notifi[$notification]['status'] == 'new') {

                                            echo '<div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Subject: ' . htmlspecialchars($notifi[$notification]['subject']) . '</h5>
                                                    <p class="text-muted">' . htmlspecialchars($notifi[$notification]["sender"]) . '</p>
                                                    <h6 class="card-title">Message:</h6>
                                                    <p class="card-text">' . htmlspecialchars($notifi[$notification]["message"]) . '</p>             
                                                    <div class="btn-group">
                                                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" data-rec="' . $notifi[$notification]["sender"] . '" data-sub="RE: ' . $notifi[$notification]["subject"] . '">Answer</button>
                                                    <form method="post" action=""><input name="notid" type="hidden" value="' . $notifi[$notification]["id"] . '"/><button type="submit" name="markread" class="btn btn-secondary">Mark read</button></form>
                                                    </div></div>
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
                                        if ($notifi[$notification]['receiver'] == $_SESSION['email'] and $notifi[$notification]['status'] == 'read') {
                                            echo '<div class="card">
                                                    <div class="card-body">
                                                    <h5 class="card-title">Subject: ' . htmlspecialchars($notifi[$notification]['subject']) . '</h5>
                                                    <p class="text-muted">' . htmlspecialchars($notifi[$notification]["sender"]) . '</p>
                                                    <h6 class="card-title">Message:</h6>
                                                    <p class="card-text">' . htmlspecialchars($notifi[$notification]["message"]) . '</p>
                                                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal" data-rec="' . $notifi[$notification]["sender"] . '" data-sub="RE: ' . $notifi[$notification]["subject"] . '">Answer</button>
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
            </section>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name" name="recipient">
                        </div>
                        <div class="form-group">
                            <label for="subject-name" class="col-form-label">Subject:</label>
                            <input type="text" class="form-control" id="subject-name" name="subject">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text" name="message"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "footer.php" ?>
</body>
<script>
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('rec')
        var subject = button.data('sub')// Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('New message to ' + recipient)
        modal.find('.modal-body #recipient-name').val(recipient)
        modal.find('.modal-body #subject-name').val(subject)
    })
</script>

</html>
