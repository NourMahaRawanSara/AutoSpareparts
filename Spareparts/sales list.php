<?php
	session_start();
?>
<!doctype html>

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
</head>
<body>

<!-- Header -->
<div class="allcontain">
	<div class="header">
			<ul class="givusacall">
				<li>Give us a call : +66666666 </li>
			</ul>
			<ul class="logreg">
				<li><a href="login.html">Login </a> </li>
				<li><a href="Sign up.html"><span class="register">Register</span></a></li>
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
				<li class="active"><a href="#">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="#">Sales list</a></li>
						<li><a href="#">inventory list</a></li>
						<li><a href="#">accountant list</a></li>
						<li><a href="#">managers list</a></li>
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
<?php
				   		$conn = mysqli_connect("localhost", "root", "", "delta");
						if($conn == false){
							die(mysqli_connect_error());
						}
						
						$select_sql = "SELECT ID,Fname,Lname FROM user";
						$result = mysqli_query($conn, $select_sql);
						for ($i=0; $i < $result->num_rows; $i++) { 
							$row = $result->fetch_assoc();
							echo "Id: " . $row["ID"]. " - Name: " . $row["Fname"]. " Lastname:" . $row["Lname"]. "<br>";
						}
						
				   	?>
		
				   
</div>				   
<div style=" text-align: center; padding-top:50px;">
<a href="addE.php"> <button type="button" value="add">Add</button> </a>
<a href="updateE.php"><button type="button" value="edit">update</button> </a>
<a href="deletE.php"><button type="button" value="delete ">delete!</button> </a>
</div>
  

<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="source/js/isotope.js"></script>
<script type="text/javascript" src="source/js/myscript.js"></script> 
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script type="text/javascript" src="source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>
</body>
</html>