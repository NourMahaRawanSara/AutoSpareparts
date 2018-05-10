<?php

    $usertype = $_REQUEST['UserTypeID'];


    require_once "../ConnectionToDB.php";
    require_once "../Model/UserModel.php";


    $user = new UserModel();
    $usertypes = $user->viewSpecificUser($usertype);


    if ($usertypes < 0){
        echo "</br>";
        echo "<label style='color: darkblue'>Add one first</label>";
    }else {

        echo "<table>";
        echo "<thead>";
        echo "<tr>";
        echo"<th>ID </th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Date Of Birth</th>
            <th>Email</th>
            <th>Username</th>";
        echo "</tr>";

        echo "</thead>";
        echo "<tbody>";
        for ($i = 0; $i <= $usertypes; $i++) {

            echo "<tr>";
            echo "<td>" . $user->ID[$i] . "</td>";
            echo "<td>" . $user->FName[$i] . "</td>";
            echo "<td>" . $user->LName[$i] . "</td>";
            echo "<td>".$user->Mobile[$i]."</td>";
            echo "<td>".$user->DOB[$i]."</td>";
            echo "<td>".$user->Email[$i]."</td>";
//            echo "<td>".$user->UserTypeID[$i]."</td>";
            echo "<td>".$user->Username[$i]."</td>";


            echo "</tr>";

                }
        echo "</tbody>";
        echo "</table>";

        echo "<br>";
    }
?>
