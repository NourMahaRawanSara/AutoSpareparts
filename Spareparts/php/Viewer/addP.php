<?php
require_once "../ConnectionToDB.php";
  //require("Product.php");
require_once("../Model/SparepartModel.php");
require_once ("../Model/CountryofOriginModel.php")
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Delta Auto Spare Parts </title>
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
				<a class="navbar-brand logo" href="#"><img src="../../image/logo1.png" alt="logo"></a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="../InventoryLogin.php">HOME</a> </li>
				<li class="dropdown">

					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div id="content">
	 <div id="content2">
		 <form method="POST" action="../Controller/addPController.php">
<div id="form1">
	<strong>Picture:<strong><br>
		<center><input type="file" name="pic" accept="image/*"id="img"></center>
<br>
<strong>OEM:<strong><br>
<input type="text" name="OEM" placeholder="OEM" required><br>

<strong>Internal Code:<strong><br>
 <input type="text" name="IC" placeholder="Internal Code" required><br>

 <strong>Company Provider Code:<strong><br>
	<input type="text" name="Pcode" placeholder="Exporter Code" required><br>


 <strong>Is the item corrupted?:<strong><br>Yes
	 <input type="radio" name="corr" ><br>No
	 <input type="radio" name="corr"><br>
<?php
echo "Country of Origin:.<br>";
$Country = new CountryofOriginModel();
$COO = $Country->View();

echo "<select name='countryoforigin'>";
for ($i=0; $i<=$COO; $i++){
    echo "<option
                value='".$Country->ID[$i]."'>".$Country->Name[$i]."
        </option>";
}
echo "</select>.<br>";
?>


<strong>Price:</strong><br>
			<input type="text" name="price" placeholder="Enter Price in EGP"><br>
<br>

		<input type="submit" name="submit" value="Submit">
		<input type="reset" value="Cancel">
		</div>
					</form>

		</div>
</div>
</div>

</body>
</html>
