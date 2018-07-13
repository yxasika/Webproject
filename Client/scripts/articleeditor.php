<?php
include "../db/createArticle.php";
include "../db/createNotification.php";

$articleObj = new article();
$notifiObj = new notification();

if (isset($_POST["approve"])) {
    $articleObj->editArticle($_POST["approve"], 'approved');
    $subject  = "'".$_POST["arttitle"] . "' was approved!";
    $msg = "Congratulations! Your Article '".$_POST["arttitle"]."' was approved.";
    $notifiObj->insertNotifi($_SESSION["email"], $_POST["authormail"], $subject, $msg);
}
if (isset($_POST["reject"])) {
    $articleObj->editArticle($_POST["reject"], 'rejected');
    $subject  = "'".$_POST["arttitle"] . "' was rejected.";
    $msg = "Sorry, man! Your Article '".$_POST["arttitle"]."' was rejected. Contact us to discuss on why and how to improve it.";
    $notifiObj->insertNotifi($_SESSION["email"], $_POST["authormail"], $subject, $msg);
}
if (isset($_POST["publish"])) {
    $articleObj->editArticle($_POST["publish"], 'published');
    $subject  = "'".$_POST["arttitle"] . "' was published!";
    $msg = "You da MAN! Your Article '".$_POST["arttitle"]."' was published!";
    $notifiObj->insertNotifi($_SESSION["email"], $_POST["authormail"], $subject, $msg);
}

?>