<?php

$OrderID = $_REQUEST['ID'];


require_once "../ConnectionToDB.php";
require_once "../Model/OrderModel.php";


$order = new OrderModel();
$OrderID = $order->viewSpecificInvoice($OrderID);



?>
