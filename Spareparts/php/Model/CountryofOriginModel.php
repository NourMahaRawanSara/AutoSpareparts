<?php


  class CountryofOriginModel{

      public $ID;
      public $Name;


      public function __construct(){

      }

      public function Add(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `countryoforigin` (`ID`, `Name`) VALUES (NULL, '$this->Name')";

          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }

      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `countryoforigin`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->Name[$i]=$row['Name'];

          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
