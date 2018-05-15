<?php
require_once("../Model/UserModel.php");
require_once("../Model/UserTypeModel.php");
require_once "../ConnectionToDB.php";
?>
<!DOCTYPE html>
<html>
<head>
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
    <li class="active"><a href="../AdminLogin.php">HOME</a> </li>

    </ul>
    </div>
    </nav>
    <div id="content">
        <div id="content2">
            <div id="form1">
                <form method="POST" action="../Controller/AddEmpController.php">

                    <div id="viewAjax">
                        <strong>First Name:<strong><br>
                                <div id="viewAjax">
                                    <input type="text" name="fname" placeholder="Firstname" onblur="CheckUserName(this.value)" required><br>
                                </div>

                    </div>

                        <strong>Last Name:<strong><br>
                        <input type="text" name="Lname" placeholder="Lastname" required><br>

                        <strong>Email:<strong><br>
                        <input type="email" name="Email" placeholder="Email" required><br>

                        <strong>Username:<strong><br>
                        <input type="text" name="Username" placeholder="Username" required><br>


                        <strong>Password:<strong><br>
                        <input type="password" name="password" placeholder="Password" required><br>

                        <strong>Mobile Number:<strong><br>
                        <input type="tel" id="tel"name="Mobile" placeholder="Mobile Number" required><br>


                        <strong>Birthdate:</strong><br>
                        <input type="date" name="DateOfBirth"><br>
                        <br>
                    <?php
                    echo "Usertype" . "<br>";
                    $Usertype = new UserTypeModel();
                    $position = $Usertype->View();

                    echo "<select name='position'>";
                    for ($i=0; $i<=$position; $i++){
                        echo "<option
                                value='".$Usertype->ID[$i]."'>".$Usertype->Position[$i]."
                        </option>";
                    }
                    echo "</select>.<br>";
                    ?>

                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" value="Cancel">
            </form>
            </div>


            </div>
        </div>
    </div>
</body>

<script>
    var inputEl = document.getElementById('tel');
    var goodKey = '0123456789+ ';

    var checkInputTel = function(e) {
        var key = (typeof e.which == "number") ? e.which : e.keyCode;
        var start = this.selectionStart,
            end = this.selectionEnd;

        var filtered = this.value.split('').filter(filterInput);
        this.value = filtered.join("");

        /* Prevents moving the pointer for a bad character */
        var move = (filterInput(String.fromCharCode(key)) || (key == 0 || key == 8)) ? 0 : 1;
        this.setSelectionRange(start - move, end - move);
    }

    var filterInput = function(val) {
        return (goodKey.indexOf(val) > -1);
    }

    inputEl.addEventListener('input', checkInputTel);

    function CheckUserName(x) {
        if(x == ""){

        }
        else{var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("viewAjax").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "ajaxCheckUsername.php?q=" + x , true);
            xmlhttp.send();
        }
    }

</script>
</html>


