<?php
  class OrderTypeModel{

      public $ID;
      public $IsOnline;



      public function __construct(){

      }





      public function AddOrder(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `ordertype` (`ID`, `IsOnline`) VALUES (NULL, '$this->IsOnline')";

          $result = $mysqli->query($sql);
      }





      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `ordertype`";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->IsOnline[$i]=$row['IsOnline'];

          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
