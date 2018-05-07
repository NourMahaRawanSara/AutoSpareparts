<?php

//require_once "../ConnectionToDB.php";
  class UserTypePagesModel{

      public $ID;
      public $UserTypeID;
      public $PageID;


      public function __construct(){

      }

      public function Add(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `usertypepage` (`ID`, `UserTypeID`, `PageID`) VALUES (NULL, '$this->UserTypeID', '$this->PageID')";
          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }

      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `usertypepage`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->UserTypeID[$i]=$row['UserTypeID'];
              $this->PageID[$i]=$row['PageID'];

          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
