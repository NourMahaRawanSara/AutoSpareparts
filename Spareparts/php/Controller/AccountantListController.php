<?php
session_start();
require("../ConnectionToDB.php");
//require("User.php");
require_once ("../Model/UserModel.php");


        $user = new UserModel();
        $numberOfUsers  = $user->ViewAccountant();

        ?>