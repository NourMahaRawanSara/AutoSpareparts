<?php


  class CommissionModel{

      public $ID;
      public $Percentage;
      public $TotalCommission;
      public $UserID;
      public $OrderID;



      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `commission`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->OrderID[$i]=$row['OrderID'];
              $this->Percentage[$i]=$row['Percentage'];
              $this->TotalCommission[$i]=$row['TotalCommission'];
              $this->UserID[$i]=$row['UserID'];
             }
          return $i;
      }

      public function CounterSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT COUNT(*) FROM commission";
          $result = $mysqli->query($sql);
          return $result;
      }
      public function Delete(){

      }
      public function AddComm(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `commission` (`ID`, `Percentage`, `TotalCommission`, `UserID`, `OrderID`) 
VALUES (NULL, '$this->Percetange', '$this->TotalCommission', '$this->UserID', '$this->OrderID')";
          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }

  }
?>
