<?php

    $ordertypeID = $_POST['OrderType'];


    require_once "../ConnectionToDB.php";
    require_once "../Model/OrderModel.php";
    require_once "../Model/CurrencyModel.php";
    require_once "../Model/PaymentMethodModel.php";
    require_once "../Model/SparepartModel.php";


    $order = new OrderModel();
    $ordertypes = $order->viewSpecificOrder($ordertypeID);

    $Currency=new CurrencyModel();
    $name=$Currency->View();

    $Payment=new PaymentMethodModel();
    $Method=$Payment->View();

    $Sparepart=new SparepartModel();
    $Name=$Sparepart->ViewALL();

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
           <th>Spare Part</th>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i <= $ordertypes; $i++) {

            echo "<tr>";
            echo "<td>" . $order->ID[$i] . "</td>";
            echo "<td>" . $Payment->Name[$i] . "</td>";
            echo "<td>" . $order->DateOfOrder[$i] . "</td>";
            echo "<td>".$Currency->Name[$i]."</td>";

            echo "<td>".$Sparepart->Name[$i]."</td>";


            echo "</tr>";

                }
        echo "</tbody>";
        echo "</table>";

        echo "<br>";
    }
?>
