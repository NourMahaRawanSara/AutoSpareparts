<html>
<head>
	<meta charset="UTF-8">
	<title>Delta Auto Spare Parts </title>
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
		 <form method="POST">
<div id="form1">
<strong>Picture:<strong><br>
<input type="image" name="pic" placeholder="upload picture" required><br>

<strong>OEM:<strong><br>
<input type="text" name="OEM" placeholder="OEM" required><br>

<strong>Internal Code:<strong><br>
 <input type="email" name="IC" placeholder="Internal Code" required><br>

 <strong>Company Provider Code:<strong><br>
	<input type="text" name="Pcode" placeholder="Exporter Code" required><br>


 <strong>Is the item corrupted?:<strong><br>Yes
	 <input type="radio" name="yes" required><br>NO
	 <input type="radio" name="No" required><br>

	 <strong>Mobile Number:<strong><br>
		 <input type="tel" name="Mobile" placeholder="Mobile Number" required><br>


<strong>Birthdate:</strong><br>
			<input type="date" name="DateOfBirth"><br>
<br>

		<input type="submit" name="submit" value="Submit">
		<input type="reset" value="Cancel">
		</div>
					</form>

		</div>
</div>
</div>
<?php
	if (isset($_POST['submit'])){
			$fname = $_POST['fname'];
			$lname=$_POST['Lname'];
			$dob = $_POST['DateOfBirth'];
			$mobile=$_POST['Mobile'];
			$email = $_POST['Email'];
			//$usertype_id = $_POST['UserTypeID'];
			$username=$_POST['Username'];
			$password = $_POST['password'];

			$user = new User;
			$user->firstname = $fname;
			$user->lastname=$lname;
			$user->DOB = $dob;
			$user->mobile=$mobile;
			$user->email = $email;
			//$user->$usertype_id = $usertype;
			$user->username=$username;
			$user->password = $password;


			$user->insertInDb($fname,$lname,$dob,$mobile,$email,
		/*$usertype,*/$username,$password);

	}
?>
</body>
</html>
