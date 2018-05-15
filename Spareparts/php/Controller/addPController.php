<?php
require_once "../ConnectionToDB.php";
  //require("Product.php");
require_once("../Model/SparepartModel.php");
require_once ("../Model/CountryofOriginModel.php");
require_once ("../Model/CorruptedModel.php");
?>
<?php

if (isset($_POST['submit'])){
    $pic = $_POST['pic'];
    $OEM=$_POST['OEM'];
    $InternalCode = $_POST['IC'];
    $PCode=$_POST['Pcode'];
    $corr = $_POST['corrupted'];
    $CountryOfOrigin=$_POST['countryoforigin'];
    $price = $_POST['price'];
    $Name=$_POST['name'];
    $Quantity=$_POST['Quantity'];

    $sp = new SparepartModel();
    $sp->Picture = $pic;
    $sp->OEM=$OEM;
    $sp->InternalCode = $InternalCode;
    $sp->CompanyProviderCode=$PCode;
    $sp->IsCorruptedID = $corr;
    $sp->CountryOfOriginID=$CountryOfOrigin;
    $sp->Price = $price;
    $sp->Name=$Name;
    $sp->Quantity=$Quantity;


    $sp->AddSP();

}
?>