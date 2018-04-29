<?php


  class SparepartModel{

      public $ID;
      public $Picture;
      public $OEM;
      public $InternalCode;
      public $CompanyProviderCode;
      public $IsCorrupted;
      public $CountryOfOrigin;
      public $Price;


      public function __construct(){

      }

      public function AddSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `sparepart` (`ID`, `Picture`, `OEM`, `InternalCode`, `CompanyProviderCode`, `IsCorrupted`, `CountryOfOrigin`, `Price`) 
VALUES (NULL, '$this->Picture', '$this->OEM', '$this->InternalCode', '$this->CompanyProviderCode', '$this->IsCorrupted', '$this->CountryOfOrigin', '$this->Price')";

          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }

      public function View(){
          $db = dbconnect::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `sparepart`
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

      public function CounterSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT COUNT(*) FROM sparepart";
          $result = $mysqli->query($sql);
          return $result;
      }
      public function Delete(){

      }

  }
?>
