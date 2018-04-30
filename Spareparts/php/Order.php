<?php

  require_once("Model/OrderModel.php");
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

        <strong>First Name:<strong><br>
       <input type="text" name="fname" placeholder="First Name" required><br>

      <strong>Last Name:<strong><br>
       <input type="text" name="Lname" placeholder="Last Name" required><br>
<select>
       <strong>payment method:<strong><br>
         <option value="Cash">cash</option>
  <option value="CreditCard">CreditCard</option>
  <option value="Installments">Installments</option>
  <option value="Paypal">Paypal</option>
</select>

         <strong>TotalPrice:<strong><br>
          <input type="text" name="Username" placeholder="TotalPrice" required><br>


         <strong>Password:<strong><br>
           <input type="password" name="password" placeholder="Password" required><br>

           <strong>DateOfOrder:<strong><br>
             <input type="date" name="Mobile" placeholder="DateOfOrder" required><br>


             <select>
                    <strong>Currency Name:<strong><br>
                      <option value="Euro">Euro</option>
               <option value="Turkish Lira">Turkish Lira</option>
               <option value="Renminbi">Renminbi</option>

             </select>

             <strong>Taxes Type:<strong><br>
               <option value="Sales Tax">Sales Tax</option>
        <option value="Income Tax">Income Tax</option>



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
              $fname = $_POST['UserID'];
              $lname=$_POST['paymentMethodID'];
              $dob = $_POST['totalprice'];
              $mobile=$_POST['OrderTypeID'];
              $email = $_POST['DateOfOrder'];
              $username=$_POST['CurrencyID'];
              $password = $_POST['TaxesID'];

              $user = new OrderModel();
              $user->FName = $UserID;
              $user->LName=$paymentMethodID;
              $user->DOB = $totalprice;
              $user->Mobile=$OrderTypeID;
              $user->Email = $DateOfOrder;
              $user->Username=$CurrencyID;
                $user->Username=$TaxesID;



              $user->AddOrder();

//              $user->insertInDb($fname,$lname,$dob,$mobile,$email,
//            /*$usertype,*/$username,$password);

          }
        ?>
      </body>
      </html>
