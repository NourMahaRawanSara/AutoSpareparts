<?php

require_once ('../Model/OrderStatusModel.php');
require_once ('../ConnectionToDB.php');
require_once ('../Model/OrderDetailsModel.php')

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Delta Auto Spare Parts </title>
    <title>
        Order Status
    </title>
    <meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
    <meta name="author" content="Web Domus Italia">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../style/slider.css">
    <link rel="stylesheet" type="text/css" href="../../style/mystyle.css">
    <link rel="stylesheet" type="text/css" href="../../style/login.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
    <div class="header">
        <ul class="givusacall">
            <li>Give us a call : +66666666 </li>
        </ul>
    </div>
    <!-- Navbar Up -->
    <nav class="topnavbar navbar-default topnav">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                    <span class="sr-only"> Toggle navigaion</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                </div>
        </div>
        <div class="collapse navbar-collapse" id="upmenu">
            <ul class="nav navbar-nav" id="navbarontop">
                <li class="active"><a href="../AccountantLogin.php">HOME</a> </li>

            </ul>
        </div>
    </nav>



<body>
Select Order Details
<form method="get" action="../Controller/OrderStatusController.php">
    <select name="OrderStatus">
        <?php
        $Invoice=new OrderDetailsModel();
        $InID=$Invoice->View();
        for ($i=0; $i<=$InID; $i++){
            echo "<option
                value='".$Invoice->ID[$i]."'>".$Invoice->ID[$i]."
        </option>";
        }
        ?>
    </select>
    <input type="submit" value="submit" name="submit">
</form>
</body>
</html>
