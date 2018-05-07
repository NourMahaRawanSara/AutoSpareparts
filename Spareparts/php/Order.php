<?php
session_start();
  require_once("Model/OrderModel.php");
require_once("Model/CurrencyModel.php");
require_once("Model/TaxesModel.php");
require_once("Model/PaymentMethodModel.php");
require_once("Model/OrderTypeModel.php");
require_once("Model/OrderDetailsModel.php");
  require_once "ConnectionToDB.php";
?>
<!DOCTYPE html>
<html>
<head>
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
				<!--<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>-->
			</div>
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="index.html">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LISTS <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="Vw and Skoda List.html">VOLkSWAGEN</a></li>
						<li><a href="BMW.html">BMW</a></li>
						<li><a href="Vw and Skoda List.html">SKODA</a></li>
						<li><a href="Opel List.html">OPEL</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div id="content">
	 <div id="content2">
     <div id="form1">
             <form method="POST">


                 <?php
              echo "Payment Method:.<br>";
              $PM = new PaymentMethodModel();
              $Name = $PM->View();

              echo "<select name='paymentmethod'>";
              for ($i=0; $i<=$Name; $i++){
                  echo "<option
                               value='".$PM->ID[$i]."'>".$PM->Name[$i]."
                       </option>";
              }
              echo "</select>.<br>";
              ?>

              <br>

                 <?php
                 echo "OEM:.<br>";
                 $TP = new SparepartModel();
                 $part = $TP->View();

                 echo "<select name='part'>";
                 for ($i=0; $i<=$part; $i++){
                     echo "<option
                               value='".$TP->ID[$i]."'>".$TP->OEM[$i]."
                       </option>";
                 }
                 echo "</select>.<br>";
                 ?>
                 <?php
                 echo "Order Type:.<br>";
                 $OT = new OrderTypeModel();
                 $Online = $OT->View();

                 echo "<select name='OrderType'>";
                 for ($i=0; $i<=$Online; $i++){
                     echo "<option
                               value='".$OT->ID[$i]."'>".$OT->IsOnline[$i]."
                       </option>";
                 }
                 echo "</select>.<br>";
                 ?>


                   <?php
                   echo "Currency Name:.<br>";
                   $CN = new CurrencyModel();
                   $Name = $CN->View();

                   echo "<select name='CurrencyName'>";
                       for ($i=0; $i<=$Name; $i++){
                       echo "<option
                               value='".$CN->ID[$i]."'>".$CN->Name[$i]."
                       </option>";
                       }
                       echo "</select>.<br>";
                       ?>
<br>
                   <?php
                   echo "Taxes Name:.<br>";
                   $TN = new TaxesModel();
                   $Type = $TN->View();

                   echo "<select name='TaxesType'>";
                   for ($i=0; $i<=$Type; $i++){
                       echo "<option
                               value='".$TN->ID[$i]."'>".$TN->Type[$i]."
                       </option>";
                   }
                   echo "</select>.<br>";
                   ?>




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

              date_default_timezone_set('Africa/Cairo');
              $date = date('m/d/Y H:i:s', time());

              $order = new OrderModel();
              $order->UserID = $_SESSION['userID'];
              $order->paymentMethodID=$_POST['paymentmethod'];
              $order->totalprice=$_POST['Price'];
              $order->OrderTypeID=$_POST['OrderType'];
              $order->DateOfOrder=$date;
              $order->CurrencyID = $_POST['CurrencyName'];
              $order->TaxesID = $_POST['TaxesType'];

              $order->AddOrder();


          }
        ?>
      </body>
      </html>
