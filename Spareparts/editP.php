<?php
session_start();
require("user.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_SESSION["ID"])){
    $user = new User($_SESSION["ID"]);
}

if (isset($_POST['edit'])){
    $firstname = test_input($_POST["fname"]);
    $lastname = test_input($_POST["lname"]);
    $username = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $gender = test_input($_POST["gender"]);

        if($user->editInfo($firstname,  $lastname, $username , $password)){
        echo 'updated'; }
 }
?>
