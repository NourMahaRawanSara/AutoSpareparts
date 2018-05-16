<?php

$orderstatusID = $_REQUEST['OrderStatus'];

    require_once "../ConnectionToDB.php";
    require_once "../Model/OrderDetailsModel.php";
require_once "../Model/SparepartModel.php";
require_once "../Model/OrderModel.php";

    $orderdetails = new OrderDetailsModel();
    $status = $orderdetails->ViewSpecificOrderDetails($orderstatusID);
$sparepart=new SparepartModel();
$Name=$sparepart->ViewALL();

$order=new OrderModel();
$o=$order->View();

$status=new StatusModel();
$st=$Name->View();

    if ($status < 0){
        echo "</br>";
        echo "<label style='color: darkblue'>Add one first</label>";
    }else {

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo"<th>ID </th>
            
            <th>Order ID</th>
            <th>Order Status</th>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i <= $status; $i++) {

            echo "<tr>";
            echo "<td>" . $orderdetails->ID[$i] . "</td>";
            //echo "<td>" . $sparepart->Name[$i] . "</td>";
            echo "<td>" . $order->ID[$i] . "</td>";
           // echo "<td>".$orderdetails->DateOfDelivery[$i]."</td>";
            //echo "<td>".$orderdetails->Quantity[$i]."</td>";
            echo "<td>".$status->Name[$i]."</td>";
//            echo "<td>".$user->UserTypeID[$i]."</td>";
         //   echo "<td>".$orderdetails->Username[$i]."</td>";


            echo "</tr>";

                }
        echo "</tbody>";
        echo "</table>";

        echo "<br>";
    }
?>
