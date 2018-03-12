<?php
require_once "ConnectionToDB.php";
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
   }

  /* function updateMyDB(){
     $this->$db->connect();
     $sql = "UPDATE `user`
             SET `Email` = '$email'
             WHERE `id` = '$id'
             ";
     $result = $this->$db->executesql($sql);
     return $result;
   }

   function selectAllUsersInDb(){
     $db = new dbconnect;
     $sql = "SELECT * FROM `user` ";
     $result = $db->executesql($sql);

     if ($row = mysqli_fetch_array($result)){
       $this->firstname = $row['Fname'];
       $this->lastname = $row['Lname'];
       $this->firstname = $row['Fname'];
       $this->DOB = $row['DateOfBirth'];
       $this->mobile = $row['Mobile'];
       $this->email = $row['Email'];
       $this->username = $row['Username'];
       $this->password = $row['Password'];
       $this->usertype_id= $row['UserTypeID'];
     }
   }

 }*/

?>
