<?php
require_once "../ConnectionToDB.php";
  //require("Product.php");
require_once("../Model/SparepartModel.php");
require_once ("../Model/UserModel.php");
require_once ("../Model/CommissionModel.php");
require_once ("../Model/BillModel.php");
require_once ("../Model/CountryofOriginModel.php");
require_once ("../Model/OrderModel.php");
require_once ("../Model/OrderDetailsModel.php");
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
				<li class="active"><a href="../AccountantLogin.php">HOME</a> </li>

			</ul>
		</div>
	</nav>
	<div id="content">
	 <div id="content2">
		 <form method="POST" action="../Controller/BillController.php">
<div id="form1">

    <?php
           /*echo "Order Details ID.<br>";
            $order = new OrderDetailsModel();
            $numOfOrders = $order->View();

            echo "<select name='orderDetailsID'>";
            for ($i=0; $i<=$numOfOrders; $i++){
                echo "<option 
                value='".$order->ID[$i]."'>".$order->ID[$i]."
                </option>";
            }
            echo "</select>.<br>";*/


        echo "Spare Part Name.<br>";
    $SparePart = new SparePartModel();
    $numOfSP = $SparePart->ViewALL();

    echo "<select name='SparePartID'>";
        for ($i=0; $i<=$numOfSP; $i++){
        echo "<option
                value='".$SparePart->ID[$i]."'>".$SparePart->Name[$i]."
        </option>";
        }
        echo "</select>.<br>";



        echo "Salesman Name:.<br>";
        $User = new UserModel();
        $phone = $User->ViewSales();

        echo "<select name='Salesman'>";
        for ($i=0; $i<=$phone; $i++){
            echo "<option
                value='".$User->ID[$i]."'>".$User->FName[$i]."
        </option>";
        }
        echo "</select>.<br>";


    echo "Client's Name:.<br>";
    $User = new UserModel();
    $phone = $User->viewSpecificUser("7");

    echo "<select name='client'>";
    for ($i=0; $i<=$phone; $i++){
        echo "<option
                value='".$User->ID[$i]."'>".$User->FName[$i]."
        </option>";
    }
    echo "</select>.<br>";



        echo "Phone:.<br>";
        $User = new UserModel();
        $phone = $User->viewSpecificUser("7");

        echo "<select name='client'>";
        for ($i=0; $i<=$phone; $i++){
            echo "<option
                value='".$User->ID[$i]."'>".$User->Mobile[$i]."
        </option>";
        }
        echo "</select>.<br>";

        echo "Price/Item:.<br>";
        $ppi = new OrderDetailsModel();
        $phone = $ppi->View();

        echo "<select name='ppi'>";
        for ($i=0; $i<=$phone; $i++){
            echo "<option
                value='".$ppi->ID[$i]."'>".$ppi->PricePerItem[$i]."
        </option>";
        }
        echo "</select>.<br>";

    ?>
    <strong>Date Of Order:.</strong> <br>
    <input class="input-adjust" type="date" name="dateoforder" placeholder="Date Of Order" required><br>
    <strong>Quantity:.</strong><br>
    <input class="input-adjust" type="text" name="quantity" placeholder="Quantity" required><br>

    <strong>Date Of Delivery:.</strong> <br>
    <input class="input-adjust" type="date" name="dateofDelivery" placeholder="Date Of Delivery" required><br>

    <br>
    <!--Taxes :<br> <!-- CALCULATE-->
   <!-- <input class="input-adjust" type="text" name="taxes"></br>-->

   <!-- Subtotal :<br> <!-- CALCULATE-->
   <!-- <input class="input-adjust" type="text" name="subtotal"></br>-->

   <!-- Total Amount :<br> <!-- CALCULATE-->
   <!-- <input class="input-adjust" type="text" name="TotalAmount"></br>-->




    Notes:<br> <!--input 3ady-->
    <textarea name="notes" rows="4" cols="50"></textarea></br>

		<input type="submit" name="submit" value="Submit">
		<input type="reset" value="Cancel">
		</div>
					</form>

		</div>
</div>
</div>

</body>
</html>
