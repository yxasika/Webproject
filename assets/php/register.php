<?php
$error = "";
if (isset($_POST["register"])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $cpassword = md5($_POST["cpassword"]);

    $data = file_get_contents("../json/test.json");
    $array_data = json_decode($data, true);

    if ($firstname == "") {
        $errors = "<Label class='text-danger'>Firstname is blank</Label>";
    }
    if ($lastname == "") {
        $errors = "<Label class='text-danger'>Lastname is blank</Label>";
    }
    if ($email == "") {
        $errors = "<Label class='text-danger'>Email is blank</Label>";
    }
    if ($password == "" || $cpassword == "") {
        $errors = "<Label class='text-danger'>Passwords are blank</Label>";
    }
    if ($password != $cpassword) {
        $errors = "<Label class='text-danger'>Passwords do not match</Label>";
    }
    if ($errors == "") {
        $newData = array(
            "firstname" => $firstname,
            "lastname" => $lastname,
            "email" => $email,
            "password" => $password,
            "role" => null,
            "picture" => null,
            "birthday" => null
        );
        $array_data[] = $newData;
        $final_data = json_encode($array_data);
        if (file_put_contents("../json/test.json", $final_data)) {
            $message = "<Label class='text-success'>Registration sucessful</Label>";
        }
    }
}
?>