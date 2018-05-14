<?php

    $ordertypeID = $_REQUEST['OrderTypeID'];


    require_once "../ConnectionToDB.php";
    require_once "../Model/OrderModel.php";


    $order = new OrderModel();
    $ordertypes = $order->viewSpecificOrder($ordertypeID);


    if ($ordertypes < 0){
        echo "</br>";
        echo "<label style='color: darkblue'>Add one first</label>";
    }
    else {

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo"<th>ID </th>
            <th>Payment Method</th>
            <th>Date of Order</th>
            <th>Currency</th>
            <th>Taxes</th>
            <th>Delivery Fees</th>
            <th>Spare Part</th>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i <= $ordertypes; $i++) {

            echo "<tr>";
            echo "<td>" . $order->ID[$i] . "</td>";
            echo "<td>" . $order->paymentMethodID[$i] . "</td>";
            echo "<td>" . $order->DateOfOrder[$i] . "</td>";
            echo "<td>".$order->CurrencyID[$i]."</td>";
            echo "<td>".$order->TaxesID[$i]."</td>";
            echo "<td>".$order->DeliveryFees[$i]."</td>";
//            echo "<td>".$user->UserTypeID[$i]."</td>";
            echo "<td>".$order->SparepartID[$i]."</td>";


            echo "</tr>";

                }
        echo "</tbody>";
        echo "</table>";

        echo "<br>";
    }
?>
