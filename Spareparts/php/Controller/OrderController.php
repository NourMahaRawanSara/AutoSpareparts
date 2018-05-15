<?php
require("../ConnectionToDB.php");
require_once("../Model/OrderModel.php");

?>
<?php
if (isset($_POST['submit'])){
    //$totalprice = $_POST['price'];
    $DateOfOrder=$_POST['dateoforder'];
    $paymentMethod=$_POST['method'];
    $ordertype=$_POST['type'];
    $Currency=$_POST['curr'];
   // $taxes=$_POST['taxes'];
    $sparepart=$_POST['spare'];
    //$DeliveryFees=$_POST['fees'];


    $order = new OrderModel();
    $order->DateOfOrder=$DateOfOrder;
    $order->paymentMethodID=$paymentMethod;
    $order->OrderTypeID=$ordertype;
    $order->CurrencyID=$Currency;
    //$order->TaxesID=$taxes;
    $order->SparepartID=$sparepart;
    $order->AddOrder();
//header('Location:../invoice.php');
}
?>