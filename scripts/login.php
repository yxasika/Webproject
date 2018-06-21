<?php
if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $data = file_get_contents("../json/test.json");
    $users = json_decode($data, true);
    foreach ($users as $user => $user) {
        if ($email == $users[$user]["email"]) {
            if ($password == $users[$user]["password"]) {
                session_start();
                $_SESSION["email"] = $email;
                header("Location: ../views/editor.src");
                die;
            }
        }
    }
}
?>