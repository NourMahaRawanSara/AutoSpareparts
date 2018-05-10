<?php
require_once "../ConnectionToDB.php";
  //require("Product.php");
require_once("../Model/SparepartModel.php");
require_once ("../Model/CountryofOriginModel.php")
?>
<?php

if (isset($_POST['submit'])){
    $pic = $_POST['pic'];
    $OEM=$_POST['OEM'];
    $InternalCode = $_POST['IC'];
    $PCode=$_POST['Pcode'];
    $corr = $_POST['corr'];
    //$CountryOfOrigin=$_POST['countroforigin'];
    $price = $_POST['price'];

    $sp = new SparepartModel();
    $sp->Picture = $pic;
    $sp->OEM=$OEM;
    $sp->InternalCode = $InternalCode;
    $sp->CompanyProviderCode=$PCode;
    $sp->IsCorrupted = $corr;
    $sp->CountryOfOriginID=$_POST['countryoforigin'];
    $sp->Price = $price;


    $sp->AddSP();

}
?>