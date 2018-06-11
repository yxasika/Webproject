<?php
$error = false;
if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $data = file_get_contents("../json/users.json");
    $users = json_decode($data, true);

    foreach ($users as $user => $user) {
        if ($email == $users[$user]["email"]) {
            if ($password == $users[$user]["password"]) {
                session_start();
                $_SESSION["username"] = $users[$user]["firstname"];
                $_SESSION["lastname"] = $users[$user]["lastname"];
                $_SESSION["role"] = $users[$user]["role"];
                $_SESSION["email"] = $users[$user]["email"];

                header("Location: ../views/editor.php");
                die;
            }
        }
    }
    $error = true;
}

if(isset($_POST["register"]))
{

    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pass1 = $_POST["psw1"];
    $pass2 = $_POST["psw2"];

    $emailtaken = false;

    $data = file_get_contents("../json/users.json");
    $users = json_decode($data, true);

    if($pass1 == $pass2)
    {
        foreach ($users as $user => $user)
        {
            if ($email == $users[$user]["email"])
            {
                $emailtaken = true;
            }
        }
        if($emailtaken == false)
        {
            $newuser = array(
                "firstname" => $fname,
                "lastname" => $lname,
                "email" => $email,
                "password" => md5($pass1),
                "role" => "author"
            );

            array_push($users, $newuser);

            $newdata = json_encode($users);

            file_put_contents("../json/users.json", $newdata);
            header("Location: ../views/home.php");
        }

    }
}
?>