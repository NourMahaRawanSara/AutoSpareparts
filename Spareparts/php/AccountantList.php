<?php
	session_start();
	require("ConnectionToDB.php");
	//require("User.php");
require_once ("Model/UserModel.php")
?>

<!DOCTYPE html>


<html>
<head>
	<style>
	table, th, td {
	    border: 1px solid black;
	}
	</style>
	<meta charset="UTF-8">
	<title>Delta Auto Spare Parts </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../style/slider.css">
	<link rel="stylesheet" type="text/css" href="../style/mystyle.css">
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
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
				<li class="active"><a href="#">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
                        <li><a href="SalesList.php">Sales List</a></li>
                        <li><a href="InventoryList.php">Inventory List</a></li>
                        <li><a href="AccountantList.php">Accountant List</a></li>
                        <li><a href="DeliveryList.php">Delivery List</a></li>
                        <li><a href="AdminList.php">Admin List</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">spare parts <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="#">price list</a></li>
						<li><a href="#">spare orders</a></li>
						<li><a href="#">total income </a></li>

					</ul>
				</li>
				<li>
					<a href="contact.html">CONTACT</a>

				</li>
			</ul>
		</div>
	</nav>
</div>
<div style=" text-align: center; padding-top:30px;">
    <table>
        <thead>
        <tr>
            <th>ID </th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Date Of Birth</th>
            <th>Email</th>
            <!--<th>UserType</th>-->
            <th>Username</th>
        </tr>
        </thead>
        <tbody>
        <?php

        $user = new UserModel();
        $numberOfUsers  = $user->ViewAccountant();

        for ($i = 0; $i<=$numberOfUsers; $i++){
            echo "<tr>";
            echo "<td>".$user->ID[$i]."</td>";
            echo "<td>".$user->FName[$i]."</td>";
            echo "<td>".$user->LName[$i]."</td>";
            echo "<td>".$user->Mobile[$i]."</td>";
            echo "<td>".$user->DOB[$i]."</td>";
            echo "<td>".$user->Email[$i]."</td>";
            //echo "<td>".$user->UserTypeID[$i]."</td>";
            echo "<td>".$user->Username[$i]."</td>";
            echo "</tr>";
        }
        ?>

        </tbody>

    </table>


</div>
<div style=" text-align: center; padding-top:50px;">
<a href="addEmp.php"> <button type="button" value="add">Add</button> </a>
<a href="updateE.php"><button type="button" value="edit">update</button> </a>
<a href="deletE.php"><button type="button" value="delete ">delete!</button> </a>
</div>


<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="../source/js/isotope.js"></script>
<script type="text/javascript" src="../source/js/myscript.js"></script>
<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>
