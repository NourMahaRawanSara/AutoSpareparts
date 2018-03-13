<?php
require_once "ConnectionToDB.php";
  class UserType{
  public $id;
  public $Position;
  public $arrayOfPages;

   function __construct($id){
     if ($id != ""){

       $db = new dbconnect;
       $sql = "SELECT * FROM `usertype`
                WHERE `ID` = $id
                ";
       $result = $db->executesql($sql);

       if ($row = mysqli_fetch_array($result)){
         $this->Position = $row["Position"];
         $this->ID = $row["ID"];

         $sql = "SELECT `PageID`
                 FROM `usertypepage`
                 WHERE `UserTypeID` = $this->id
                 ";
         $result = $db->executesql($sql);
         $i = 0;
         while ($row1 = mysqli_fetch_array($result)) {
            $this->arrayOfPages[$i] = new Page($row1[0]);
            $i++;
         }
       }
     }
   }

   function selectAllUserTypesInDb(){
     $db = new dbconnect;
     $sql = "SELECT * FROM `usertype` ";
     $result = $db->executesql($sql);
   }

   function updateUserType($user){
     $this->$db->connect();
     $sql = "UPDATE `usertype`
             SET `usertype.id` = '$usertype_id'
             WHERE `id` = '$id'
             ";
     $result = $this->$db->executesql($sql);
     return $result;
   }

   function addNewUserType($UserType){
     $db = new dbconnect;
     $conn = $this->$db->connect();
     $sql="INSERT INTO `usertype` (`Position`)
         VALUES ('$Position')";
         
     $res = mysqli_query($conn,$sql);
   }

   function deleteUserType($user){
     $db = new dbconnect;
     $sql = "DELETE FROM `usertype`
             WHERE `usertype.id` = $user->id
             ";
     $result = $db->executesql($sql);

   }
  }
?>
