<?php
  require("../ConnectionToDB.php");
  require_once("../Model/OrderModel.php");
require_once("../Model/PaymentMethodModel.php");
require_once("../Model/OrderTypeModel.php");
require_once("../Model/CurrencyModel.php");
require_once("../Model/TaxesModel.php");
require_once("../Model/SparepartModel.php");

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
				<!--<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a>-->
			</div>
		</div>
		<div class="collapse navbar-collapse" id="upmenu">
			<ul class="nav navbar-nav" id="navbarontop">
				<li class="active"><a href="../../index.html">HOME</a> </li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">LISTS <span class="caret"></span></a>
					<ul class="dropdown-menu dropdowncostume">
						<li><a href="../../Vw and Skoda List.html">VOLkSWAGEN</a></li>
						<li><a href="../../BMW.html">BMW</a></li>
						<li><a href="../../Vw and Skoda List.html">SKODA</a></li>
						<li><a href="../../Opel List.html">OPEL</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div id="content">
	 <div id="content2">
             <form method="POST" action="../Controller/OrderController.php">
			<div id="form1">
                <?php
                echo "payment Method:.<br>";
                $tax = new PaymentMethodModel();
                $method = $tax->view();

                echo "<select name='method'>";
                    for ($i=0; $i<=$method; $i++){
                    echo "<option
                            value='".$tax->ID[$i]."'>".$tax->Name[$i]."
                    </option>";
                    }
                    echo "</select>.<br>";
?>

                <?php
                echo "Order Type:.<br>";
                $tax = new OrderTypeModel();
                $method = $tax->view();

                echo "<select name='type'>";
                for ($i=0; $i<=$method; $i++){
                    echo "<option
                            value='".$tax->ID[$i]."'>".$tax->IsOnline[$i]."
                    </option>";
                }
                echo "</select>.<br>";
                ?>

                <?php
                echo "Currency:.<br>";
                $tax = new CurrencyModel();
                $method = $tax->view();

                echo "<select name='curr'>";
                for ($i=0; $i<=$method; $i++){
                    echo "<option
                            value='".$tax->ID[$i]."'>".$tax->Name[$i]."
                    </option>";
                }
                echo "</select>.<br>";
                ?>


<!--                --><?php
//                echo "Taxes:<br>";
//                $tax = new TaxesModel();
//                $method = $tax->view();
//
//                echo "<select name='taxes'>";
//                for ($i=0; $i<=$method; $i++){
//                    echo "<option
//                            value='".$tax->ID[$i]."'>".$tax->Type[$i]."
//                    </option>";
//                }
//                echo "</select>.<br>";
//                ?>



                <?php
                echo "Spare Part :<br>";
                $sp = new SparepartModel();
                $method = $sp->view();

                echo "<select name='spare'>";
                for ($i=0; $i<=$method; $i++){
                    echo "<option
                            value='".$sp->ID[$i]."'>".$sp->OEM[$i]."
                    </option>";
                }
                echo "</select>.<br>";
                ?>

<strong>Date Of Order<strong><br>
<input type="date" name="dateoforder" placeholder="date" required><br>


<!--<strong>Delivery Fees<strong><br>-->
<!--<input type="text" name="fees" placeholder="Enter Delivery Fees" required><br>-->
<!---->


<input type="submit" name="submit" value="Submit">
<input type="reset" value="Cancel">
</div>
                  </form>

            </div>
      </div>
      </div>

      </body>
      </html>
