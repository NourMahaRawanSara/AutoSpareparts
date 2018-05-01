<?php


  class SparepartModel{

      public $ID;
      public $Picture;
      public $OEM;
      public $InternalCode;
      public $CompanyProviderCode;
      public $IsCorrupted;
      public $CountryOfOriginID;
      public $Price;


      public function __construct(){

      }

      public function AddSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `sparepart` (`ID`, `Picture`, `OEM`, `InternalCode`, 
                  `CompanyProviderCode`, `IsCorrupted`, `CountryOfOriginID`, `Price`) 
                  VALUES (NULL, '$this->Picture', '$this->OEM', '$this->InternalCode', 
                  '$this->CompanyProviderCode', '$this->IsCorrupted', '$this->CountryOfOriginID', 
                  '$this->Price')
                  ";


          $result = $mysqli->query($sql);
          if ($result){
                //echo "result";
          }else{
              echo $mysqli->error;
          }
      }

      public function Edit(){

      }

      public function View(){

  $db = ConnectionToDB::getInstance();
  $mysqli = $db->getConnection();

  $sql = "SELECT sparepart.ID, sparepart.Picture, sparepart.OEM, sparepart.InternalCode, sparepart.CompanyProviderCode, sparepart.IsCorrupted, sparepart.Price, countryoforigin.Name
          FROM `sparepart`
          INNER JOIN `countryoforigin` ON `sparepart`.`CountryOfOriginID` = `countryoforigin`.`ID`
";
  $result = $mysqli->query($sql);
  $i=-1;

  while($row =mysqli_fetch_array($result)){
  $i++;
  $this->ID[$i]=$row['ID'];
  $this->Picture[$i]=$row['Picture'];
  $this->OEM[$i]=$row['OEM'];
  $this->InternalCode[$i]=$row['InternalCode'];
  $this->CompanyProviderCode[$i]=$row['CompanyProviderCode'];
  $this->IsCorrupted[$i]=$row['IsCorrupted'];
  $this->CountryOfOriginID[$i]=$row['Name'];
  $this->Price[$i]=$row['Price'];
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
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
          $sql = "DELETE FROM sparepart
             WHERE `ID` = $this->ID
             ";
          $result = $mysqli->query($sql);
          if($sql){
              echo 'deleted';
          }
      }


  }
?>
