<?php
require_once "ConnectionToDB.php";


//require_once "UserType.php";
//require_once "Page.php";

  class order{
  public $id;

  public $totalprice;

  public $DateOfOrder;



   function __construct(){

    }

/*function select(){

}*/




   function deleteOrder($order){
     $db = new dbconnect;
     $sql = "DELETE FROM order
             WHERE `order.ID` = $order->id
             ";
     $result = $db->executesql($sql);
if($sql){
  echo 'deleted';
}
   }


 function insertInDb($id, $totalprice,$DateOfOrder ){
   $db = new dbconnect;
   $conn = $db->connect();
   $sql="INSERT INTO order
   (`totalprice`,`DateOfOrder`)
     VALUES ('$totalprice',
       '$DateOfOrder')";
   $res = mysqli_query($conn,$sql);
   header("Location: index.html");
 }

public function updateMyDB($id,$totalprice,$DateOfOrder){
     $db = new dbconnect;
     $db->connect();
     $sql = "UPDATE order SET `totalprice`='$totalprice',
`DateOfOrder`='$DateOfOrder' WHERE `id` = '$id' ";
     $result =$db->executesql($sql);
     return $result;
   }


}
?>
