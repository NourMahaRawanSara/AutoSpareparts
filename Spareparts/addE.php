<?php
  require("ConnectionToDB.php");
  require("User.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Scarica gratis GARAGE Template html/css - Web Domus Italia - Web Agency </title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="style/slider.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="style/login.css">
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
				<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.html">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LISTS <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="#">VOLkSWAGEN</a></li>
						<li><a href="#">BMW</a></li>
						<li><a href="#">SKODA</a></li>
						<li><a href="#">OPEL</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div id="content">
	 <div id="content2">
             <form method="post" action="submit.php">
			<div id="form1">
             <h1>Signup</h1>
			<div id="form1">
             <strong>First-Name:<strong><br>
             <input type="text" name="firstName" placeholder="Enter First Name" required><br>
             <strong>Last-name:<strong><br>
            <input type="text" placeholder="Enter Last Name" name="lastName" required><br>
			<strong>Username:<strong><br>
			<input type="text" name="userName" placeholder="Enter Username" required><br>
			<div style="color:red"><?=(isset($_SESSION['userError'])) ? $_SESSION['userError'] : ''?></div>
			<strong>Password:</strong><br>
			<input type="password" name="password" placeholder="Enter Password" required><br>
			 <strong>Mobile:<strong><br>
            <input type="text" placeholder="Enter Last Name" name="mob" required><br>
			 <strong>email:<strong><br>
            <input type="text" placeholder="Enter Last Name" name="ema" required><br>
			<strong>Birth-date:</strong><br>
            <input type="date" name="bDate"><br>
			<br>
			<strong> User type ID?</strong><br>
			<textarea rows="4" cols="50" name="userid">
            </textarea><br>
            <input type="submit" value="Submit">
			<input type="button" value="Cancel">
			</div>
            </form>
			</div>
</div>
</div>
</body>
