<?php
require_once "dbconnect.php";
//require_once "UserType.php";
//require_once "Page.php";
  class SparePart{
  public $id;
  public $pic;
  public $OEM;
  public $InternalCode;
  public $PCode;
  public $corr;
  public $CountryOfOrigin;
  public $price;
//  public $usertype_id;

   function __construct(){

    }



   function deleteProd($sp){
     $db = new dbconnect;
     $sql = "DELETE FROM sparepart
             WHERE `ID` = $sp->id
             ";
     $result = $db->executesql($sql);
if($sql){
  echo 'deleted';
}
   }


 function insertInDb($pic,$OEM,$InternalCode,$PCode,$corr,$CountryOfOrigin,$price){
   $db = new dbconnect;
   $conn = $db->connect();
   $sql="INSERT INTO sparepart
   (`Picture`,`OEM`,`InternalCode`,`CompanyProviderCode`,
     `IsCorrupted`,`CountryOfOrigin`,`Price`)
     VALUES ('$pic',
       '$OEM','$InternalCode','$PCode',
       '$corr',
       '$CountryOfOrigin','$price')";
   $res = mysqli_query($conn,$sql);
   header("Location: index.html");
 }


public function updateMyDB($pic,$OEM,$InternalCode,$PCode,$corr,$CountryOfOrigin,$price,$id){
    $db = new dbconnect;
    $db->connect();

    $sql = "UPDATE sparepart SET `Picture`='$pic',
 `OEM`='$OEM',`InternalCode`='$InternalCode',
  `CompanyProviderCode`='$PCode',
  `IsCorrupted` = '$corr',
  `CountryOfOrigin`='$CountryOfOrigin',
  `Price`='$price' WHERE `id` = '$id' ";

    $result =$db->executesql($sql);
    return $result;
   }

  public function selectAllProdInDb(){
     $db = new dbconnect;
     $sql = "SELECT * FROM `sparepart` where 1";
     $result =$db->executesql($sql);
     if ($result->num_rows > 0) {
    echo " <table >
    <tr>
    <th>ID </th>
    <th>Picture</th>
    <th>OEM</th>
    <th>Internal Code</th>
    <th>Company Provider Code</th>
    <th>Corrupted </th>
    <th>Country Of Origin</th>
    <th>Price</th>
    </tr>
    ";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
           <td>" ." " .$row["ID"]." ". "</td>
           <td>" . $row["Picture"]." ". "</td>
           <td>" . $row["OEM"]." ".
        "</td><td>" . $row["InternalCode"]." ".
        "</td><td>" . $row["CompanyProviderCode"].
        "</td><td>" . $row["IsCorrupted"].
        "</td><td>" . $row["CountryOfOrigin"].
          "</td><td>" . $row["Price"].

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
