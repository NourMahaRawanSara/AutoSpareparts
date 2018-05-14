<?php
session_start();
//$_SESSION['auth'] = "true";
require("../ConnectionToDB.php");
require_once("../Model/UserModel.php");


//$_SESSION['ID']=$userID;
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = new UserModel();

    $usertypeID=$user->login($username,$password);
    //echo $usertypeID;
    $_SESSION['loggedIn'] = $usertypeID;

    //$_SESSION['ID']=$usertypeID;

    //echo $usertypeID;
}

?>