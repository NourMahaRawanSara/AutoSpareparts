<?php

require_once("../Model/UserModel.php");
require_once "../ConnectionToDB.php";


if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname=$_POST['Lname'];
    $dob = $_POST['DateOfBirth'];
    $mobile=$_POST['Mobile'];
    $email = $_POST['Email'];
    $username=$_POST['Username'];
    $password = $_POST['password'];

    $user = new UserModel();
    $user->FName = $fname;
    $user->LName=$lname;
    $user->DOB = $dob;
    $user->Mobile=$mobile;
    $user->Email = $email;
    $user->Username=$username;
    $user->Password = md5($password);


    $user->AddClient();



}
?>

