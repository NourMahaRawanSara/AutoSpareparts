<?php
  session_start();
require_once "ConnectionToDB.php";
  require("Product.php");
  $db = new dbconnect;
  $conn = $db->connect();


  		/*if($row=mysqli_fetch_array($result)){

  			$pic = $row["Picture"];
        $OEM = $row["OEM"];
        $InternalCode = $row["InternalCode"];
        $PCode = $row["CompanyProviderCode"];
        $corr = $row["IsCorrupted"];
        $CountryOfOrigin = $row["CountryOfOrigin"];
        $price = $row["Price"];




  		}
*/
$sql="select * from `sparepart` WHERE 1";
$result =$db->executesql($sql);


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
			<!--	<a class="navbar-brand logo" href="#"><img src="image/logo1.png" alt="logo"></a> -->
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
             <form method="POST" action="">
			<div id="form1">

          	<strong>Picture:<strong><br>
          		<input type="file" name="pic" accept="image/*"id="img">
          <br>
          <strong>OEM:<strong><br>
        <select name='prouctIDList'>
          <?php
          foreach ($result as  $value) {
            $id=$value['ID'];
            $OEM=$value['OEM'];
            echo "<option value='$id'>$OEM</option>";

          }
          ?>
        </select>
        <br>

        <strong>New OEM:<strong><br>
         <input type="text" name="OEMn" required><br>
          <strong>Internal Code:<strong><br>
           <input type="text" name="IC"  required><br>

           <strong>Company Provider Code:<strong><br>
          	<input type="text" name="Pcode"   required><br>


           <strong>Is the item corrupted?:<strong><br>Yes
          	 <input type="radio" name="corr" ><br>No
          	 <input type="radio" name="corr"><br>

          	 <strong>Country Of Origin:<strong><br>
          		 <input type="text" name="countroforigin" required><br>


          <strong>Price:</strong><br>
          			<input type="text" name="price" ><br>
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
      $id=$_POST['prouctIDList'];
      $pic = $_POST['pic'];
      $OEM=$_POST['OEMn'];
      $InternalCode = $_POST['IC'];
      $PCode=$_POST['Pcode'];
      $corr = $_POST['corr'];
      $CountryOfOrigin=$_POST['countroforigin'];
      $price = $_POST['price'];

      $sp = new SparePart;
      $sp->pic = $pic;
      $sp->OEM=$OEM;
      $sp->InternalCode = $InternalCode;
      $sp->PCode=$PCode;
      $sp->corr = $corr;

      $sp->CountryOfOrigin=$CountryOfOrigin;
      $sp->price = $price;


      $result= $sp->updateMyDB($pic,$OEM,
      $InternalCode,$PCode,$corr,$CountryOfOrigin,$price,$id);


    }
    ?>
</body>
</html>
