<?php
if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $data = file_get_contents("../json/test.json");
    $user = json_decode($data, true);
    for ($i=0; $i < count($user); $i++) {
        if ($email == $user[i]->users->email) {
            if ($password == $user[i]->password) {
                session_start();
                $_SESSION["username"] = $username;
                header("Location: ../views/editor.php");
                die;
            }
        }
    }
}
?>