<?php
require_once "ConnectionToDB.php";


//require_once "UserType.php";
//require_once "Page.php";

  class orderdetails{
  public $id;
  public $DateOfDelivery;

  public $Quantity;

  public $PricePerItem;



   function __construct(){

    }



  public function selectAllOrderInDb(){
     $db = new dbconnect;
     $sql = "SELECT * FROM `orderdetails` where 1";
     $result =$db->executesql($sql);
     if ($result->num_rows > 0) {
    echo " <table >
    <tr>
    <th>ID </th>
    <th>Date Of Delivery</th>
    <th>Quantity</th>
    <th>Price Per Item</th>


    </tr>
    ";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]." ".
        "</td><td>" . $row["DateOfDelivery"]." ".
         "</td><td>" . $row["Quantity"]." ".
        "</td><td>" . $row["PricePerItem"].


        "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

}
}
?>
