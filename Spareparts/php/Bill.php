<?php
require_once "ConnectionToDB.php";
  //require("Product.php");
require_once("Model/SparepartModel.php");
require_once ("Model/UserModel.php")
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
	<link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../style/slider.css">
	<link rel="stylesheet" type="text/css" href="../style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../style/login.css">
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
				<a class="navbar-brand logo" href="#"><img src="../image/logo1.png" alt="logo"></a>
			</div>
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="../index.html">HOME</a> </li>
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

        <?php
            require_once "ConnectionToDB.php";
            require_once "Model/OrderDetailsModel.php";
        require_once "Model/SparepartModel.php";
        echo "Order Details ID.<br>";
            $orderDetails = new OrderDetailsModel();
            $numOfOrders = $orderDetails->View();

            echo "<select name='orderDetailsID'>";
            for ($i=0; $i<=$numOfOrders; $i++){
                echo "<option 
                value='".$orderDetails->ID[$i]."'>".$orderDetails->ID[$i]."
                </option>";
            }
            echo "</select>.<br>";


        echo "Spare Part ID.<br>";
    $SparePart = new SparePartModel();
    $numOfSP = $SparePart->View();

    echo "<select name='SparePartID'>";
        for ($i=0; $i<=$numOfSP; $i++){
        echo "<option
                value='".$SparePart->ID[$i]."'>".$SparePart->ID[$i]."
        </option>";
        }
        echo "</select>";
    ?>

    <br>
   Spare Part Name:<br> <!--hanakhodha men el sparepart ID RETREIEVE-->
    <input class="input-adjust" type="text" id="firstname1"> </br>
    Code:<br> <!--hanakhodha men el sparepart ID RETREIEVE-->
    <input class="input-adjust" type="text" id="lastname1"></br></br>
    Country Of Origin:<br> <!--hanakhodha men el sparepart ID COMBOBOX-->
    <input class="input-adjust" type="text" id="address1"></br></br>
    Price/Item:<br> <!--hanakhodha men el order details RETREIEVE-->
    <input class="input-adjust" type="text" id="city1"></br>
    Quantity:<br> <!--hanakhodha men el order details-->
    <input class="input-adjust" type="text" id="country1"></br>


    Salesman Name:<br> <!--hanakhodha men el User ID-->
    <input class="input-adjust" type="text" id="country1"></br>

    Selling Date:<br> <!--hanakhodha men el order details id RETRIEVE-->
    <input class="input-adjust" type="text" id="country1"></br>

    Commission:<br> <!--hanakhodha men el commission CALCULATE-->
    <input class="input-adjust" type="text" id="country1"></br>

    Total Amount :<br> <!-- CALCULATE-->
    <input class="input-adjust" type="text" id="country1"></br>
    Notes:<br> <!--input 3ady-->
    <input class="input-adjust" type="text" id="country1"></br>

		<input type="submit" name="submit" value="Submit">
		<input type="reset" value="Cancel">
		</div>
					</form>

		</div>
</div>
</div>
<?php

	if (isset($_POST['submit'])){
			$pic = $_POST['orderDetailsID'];
			$OEM=$_POST['OEM'];
			$InternalCode = $_POST['IC'];
			$PCode=$_POST['Pcode'];
			$corr = $_POST['corr'];
			$CountryOfOrigin=$_POST['countroforigin'];
			$price = $_POST['price'];

			$sp = new SparepartModel();
			$sp->Picture = $pic;
			$sp->OEM=$OEM;
			$sp->InternalCode = $InternalCode;
			$sp->CompanyProviderCode=$PCode;
			$sp->IsCorrupted = $corr;
			$sp->CountryOfOrigin=$CountryOfOrigin;
			$sp->Price = $price;


			$sp->AddSP();

	}
?>
</body>
</html>
