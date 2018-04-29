<?php

require_once "../ConnectionToDB.php";
  class UserTypeModel{

      public $ID;
      public $Position;


      public function __construct(){

      }

      public function Add(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `usertype` (`ID`, `Position`) VALUES (NULL, '$this->Position')";

          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }

      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `usertype`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->Position[$i]=$row['Position'];

          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
