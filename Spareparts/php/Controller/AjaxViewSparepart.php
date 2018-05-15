<?php

        $Corrupted = $_POST['Name'];


    require_once "../ConnectionToDB.php";
    require_once "../Model/CountryofOriginModel.php";
    require_once "../Model/SparepartModel.php";
    require_once "../Model/CorruptedModel.php";


    $sparepart = new SparepartModel();
    $Name = $sparepart->viewSpecificSP($Corrupted);

    $Country=new CountryofOriginModel();
    $name=$Country->View();

    $Corr=new CorruptedModel();
    $Type=$Corr->View();

    if ($Name < 0){
        echo "</br>";
        echo "<label style='color: darkblue'>Add one first</label>";
    }
    else {

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo"<th>ID </th>
            <th>Name</th>
            <th>Picture</th>
            <th>OEM</th>
            <th>Internal Code</th>
            <th>Company Provider Code</th>
            
            <th>Country Of Origin</th>
            <th>Price</th>
            <th>Quantity</th>";

        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i <= $Name; $i++) {

            echo "<tr>";
            echo "<td>" . $sparepart->ID[$i] . "</td>";
            echo "<td>" . $sparepart->Name[$i] . "</td>";
            echo "<td><img src=" .'../../image/'.$sparepart->Picture[$i]." alt='not found' width='100px' height='100px'></td>";
            echo "<td>" . $sparepart->OEM[$i] . "</td>";


            echo "<td>" . $sparepart->InternalCode[$i] . "</td>";
            echo "<td>" . $sparepart->CompanyProviderCode[$i] . "</td>";
//            echo "<td>"." ".$Corr->Type[$i]." "."</td>";

            echo "<td>".$Country->Name[$i]."</td>";
            echo "<td>" . $sparepart->Price[$i] . "</td>";
            echo "<td>".$sparepart->Quantity[$i]."</td>";


            echo "</tr>";

                }
        echo "</tbody>";
        echo "</table>";

        echo "<br>";
    }
?>
