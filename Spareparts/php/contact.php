<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Auto Spare Parts</title>
	<meta name="description" content="Scarica gratis il nostro Template HTML/CSS GARAGE. Se avete bisogno di un design per il vostro sito web GARAGE può fare per voi. Web Domus Italia">
	<meta name="author" content="Web Domus Italia">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../source/font-awesome-4.5.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../style/slider.css">
	<link rel="stylesheet" type="text/css" href="../style/mystyle.css">
	<link rel="stylesheet" type="text/css" href="../style/contactstyle.css">
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
				<li class="active"><a href="../index.html">HOME</a> </li>




			</ul>
		</div>
	</nav>
</div>
<!--_______________________________________ Carousel__________________________________ -->
<div class="allcontain">
	<div id="carousel-up" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner " role="listbox">
			<div class="item active">
				<img src="../image/spp1.jpg" alt="oldcar" width="1600px">
				<div class="carousel-caption">
					<h2></h2>
					<p><br>
					</p>
				</div>
			</div>
		</div>
		<nav class="navbar navbar-default midle-nav">

		</nav>
	</div>
</div>

<p>
	<?php
    require_once "ConnectionToDB.php";
		require_once "Model/PagesModel.php";
		$pages=new PagesModel();
		$pages->ViewContact();
		//echo $html;
		?>
</p>
<div class="allcontain">
	<div class="contact">
		<div class="newslettercontent">
			<div class="leftside">
				<img id="image_border" src="../image/border.png" alt="border">
					<div class="contact-form">
						<h1>Contact Us </h1>
							<div class="form-group group-coustume">
                                <input type="text" class="form-control name-form" placeholder="Name">
								<input type="text" class="form-control email-form" placeholder="E-mail">
								<input type="text" class="form-control subject-form" placeholder="Subject">
								<textarea rows="4" cols="50" class="message-form"></textarea>
								<button type="submit" class="btn btn-default btn-submit">Submit</button>
							</div>
					</div>
			</div>
			<div class="google-maps">
			 <div id="googleMap"></div>

		 </div>
		</div>

	</div>
</div>




<script>

var myCenter=new google.maps.LatLng(41.567197,14.681526);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:16,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}



</script>

<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.js"></script>
<script type="text/javascript" src="../source/js/myscript.js"></script> <script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/bootstrap.js"></script>

<script>
	$(window).resize(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
	});

	$(window).load(function(){
		var new_height = $("#image_border").height();
		console.log(new_height);
		$("#googleMap").height(new_height);
		google.maps.event.addDomListener(window, 'load', initialize());
	});

</script>
<div class="footer">
    <div class="copyright">
        &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
    </div>
    <div class="atisda">
        Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a>
    </div>
</div>
<script type="text/javascript" src="../source/js/myscript.js"></script>

<script type="text/javascript" src="../source/bootstrap-3.3.6-dist/js/jquery.1.11.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>

</body>
</html>
