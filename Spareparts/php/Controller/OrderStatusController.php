<?php
require("../ConnectionToDB.php");
require_once("../Model/OrderStatusModel.php");
require_once "../Model/OrderDetailsModel.php";
$orderstatusID = $_REQUEST['OrderStatus'];
?>
<?php
if (isset($_POST['submit'])){



    $order = new OrderStatusModel();
   $status=$order->ViewSpecificStatus($orderstatusID);

    //header('Location:../ClientLogin.php');
}
?>