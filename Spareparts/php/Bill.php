<?php
require_once "ConnectionToDB.php";
  //require("Product.php");
require_once("Model/SparepartModel.php");
require_once ("Model/UserModel.php");
require_once ("Model/CommissionModel.php");
require_once ("Model/BillModel.php");
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
        echo "</select>.<br>";

        echo "OEM:.<br>";
        $SparePart = new SparePartModel();
        $SPOEM = $SparePart->View();

        echo "<select name='SparePartID'>";
        for ($i=0; $i<=$SPOEM; $i++){
            echo "<option
                value='".$SparePart->ID[$i]."'>".$SparePart->OEM[$i]."
        </option>";
        }
        echo "</select>.<br>";

        echo "Country of Origin:.<br>";
        $SparePart = new SparePartModel();
        $SPCountryOfOrigin = $SparePart->View();

        echo "<select name='SparePartCountryOfOrigin'>";
        for ($i=0; $i<=$SPCountryOfOrigin; $i++){
            echo "<option
                value='".$SparePart->CountryOfOrigin[$i]."'>".$SparePart->CountryOfOrigin[$i]."
        </option>";
        }
        echo "</select>.<br>";

        echo "Price Per Item:.<br>";
        $orderDetails = new OrderDetailsModel();
        $ODPricePerItem = $orderDetails->View();

        echo "<select name='PricePerItem'>";
        for ($i=0; $i<=$ODPricePerItem; $i++){
            echo "<option
                value='".$orderDetails->PricePerItem[$i]."'>".$orderDetails->PricePerItem[$i]."
        </option>";
        }
        echo "</select>.<br>";

        echo "Quantity:.<br>";
        $orderDetails = new OrderDetailsModel();
        $ODQuantity = $orderDetails->View();

        echo "<select name='Quantity'>";
        for ($i=0; $i<=$ODQuantity; $i++){
            echo "<option
                value='".$orderDetails->Quantity[$i]."'>".$orderDetails->Quantity[$i]."
        </option>";
        }
        echo "</select>.<br>";

        echo "Salesman Name:.<br>";
        $User = new UserModel();
        $salesmanName = $User->ViewSales();

        echo "<select name='Salesman'>";
        for ($i=0; $i<=$salesmanName; $i++){
            echo "<option
                value='".$User->ID[$i]."'>".$User->FName[$i]."
        </option>";
        }
        echo "</select>.<br>";


        echo "Date Of Delivery:.<br>";
        $orderDetails = new OrderDetailsModel();
        $ODDOD = $orderDetails->View();

        echo "<select name='DateOfDelivery'>";
        for ($i=0; $i<=$ODDOD; $i++){
            echo "<option
                value='".$orderDetails->DateOfDelivery[$i]."'>".$orderDetails->DateOfDelivery[$i]."
        </option>";
        }
        echo "</select>.<br>";


        echo "Commission:.<br>";
        $Commission = new CommissionModel();
        $Com = $Commission->View();

        echo "<select name='Commission'>";
        for ($i=0; $i<=$Com; $i++){
            echo "<option
                value='".$Commission->ID[$i]."'>".$Commission->Percentage[$i]."
        </option>";
        }
        echo "</select>.<br>";



    ?>

    <br>

    Total Amount :<br> <!-- CALCULATE-->
    <input class="input-adjust" type="text" name="TotalAmount"></br>

    Notes:<br> <!--input 3ady-->
    <textarea name="notes" rows="4" cols="50"></textarea></br>

		<input type="submit" name="submit" value="Submit">
		<input type="reset" value="Cancel">
		</div>
					</form>

		</div>
</div>
</div>
<?php

	if (isset($_POST['submit'])){

			$orderDetailsID = $_POST['orderDetailsID'];
			$Sparepart=$_POST['SparePartID'];
			$User = $_POST['Salesman'];
			$TAmount=$_POST['TotalAmount'];
			$comm = $_POST['Commission'];
			$Notes=$_POST['notes'];


			$bill = new BillModel();
			$bill->OrderDetailsID = $orderDetailsID;
			$bill->SparePartID=$Sparepart;
			$bill->UserID = $User;
			$bill->TotalAmount=$TAmount;
			$bill->CommissionID = $comm;
			$bill->Notes=$Notes;



			$bill->AddBill();

	}
?>
</body>
</html>
