<?php

$billID = $_REQUEST['ID'];


require_once "../ConnectionToDB.php";
require_once "../Model/BillModel.php";


$bill = new BillModel();
$billID = $bill->viewSpecificBill($billID);


//echo $billID;
?>
