<?php

    $parentID = $_REQUEST['parentID'];

    require_once "../ConnectionToDB.php";
    require_once "../Model/ControllingResourcesModel.php";



    $resources = new ControllingResourcesModel();
    $numberOfChilds = $resources->viewSpecificResource($parentID);


    if ($numberOfChilds < 0){
        echo "</br>";
        echo "<label style='color: darkblue'>Add one first</label>";
    }else {

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
            echo "<th>ID </th>";
            echo "<th>Resource Name</th>";
            echo "<th>Quantity</th>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i <= $numberOfChilds; $i++) {

            echo "<tr>";
            echo "<td>" . $resources->ID[$i] . "</td>";
            echo "<td>" . $resources->Name[$i] . "</td>";
            echo "<td>" . $resources->Quantity[$i] . "</td>";
            //echo "<td>".$resource->ParentID[$i]."</td>";
            echo "</tr>";

        }
        echo "</tbody>";
        echo "</table>";

        echo "<br>";
    }
?>
