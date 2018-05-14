<?php
require_once "../ConnectionToDB.php";
//require("Product.php");
require_once("../Model/SparepartModel.php");
require_once ("../Model/UserModel.php");
require_once ("../Model/CommissionModel.php");
require_once ("../Model/BillModel.php");
require_once ("../Model/OrderModel.php");
?>
<?php

if (isset($_POST['submit'])){

    $orderDetailsID = $_POST['ppi'];
    $Sparepart=$_POST['SparePartID'];
    $User = $_POST['client'];
    $salesman=$_POST['Salesman'];
    $quantity=$_POST['quantity'];
    //$TAmount=$_POST['TotalAmount'];
    //$comm = $_POST['Commission'];
    $Notes=$_POST['notes'];


    $bill = new BillModel();
    $bill->OrderDetailsID = $orderDetailsID;
    $bill->SparePartID=$Sparepart;
    $bill->UserID = $User;
    $bill->Salesman=$salesman;

    //$bill->CommissionID = $comm;
    $bill->Notes=$Notes;
    $sub=$bill->SubTotal($quantity,$Sparepart);
    $bill->subtotal=$sub;
    $total=$bill->TotalAmount($sub,$Sparepart);
    //$bill->TotalAmount=$TAmount;
    $bill->TotalAmount=$total;
     $bill->AddBill();
    header('location:../invoice.php');
    //$_SESSION['SPName'] = $Sparepart;
   // $_SESSION['TotalAmount'] = $total;
    //$_SESSION['subtotal'] = $sub;


}
?>