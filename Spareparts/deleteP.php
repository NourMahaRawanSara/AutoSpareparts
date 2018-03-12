<?php
session_start();
require("sales list.php");

if(isset($_SESSION["userID"])){
    $user = new User($_SESSION["userID"]);
    $user->deleteUser();
    session_unset($_SESSION["userID"]);
    echo 'deleted';
}



?>