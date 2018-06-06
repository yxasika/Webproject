<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    if (file_exists("../json/" . $username . ".json")) {
        $data = file_get_contents("../json/" . $username . ".json");
        $user = json_decode($data);
        if ($password == $user->password) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: ../views/editor.php");
        }
    }
}
?>