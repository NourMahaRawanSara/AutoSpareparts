<?php


  class BillModel{

      public $ID;
      public $OrderDetailsID;
      public $SparePartID;
      public $UserID;
      public $TotalAmount;
      public $CommissionID;
      public $Notes;



      public function __construct(){

      }

      public function AddBill(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `bill` (`ID`, `OrderDetailsID`, `SparePartID`, 
                                      `UserID`, `Total Amount`, `CommissionID`, `Notes`) 
                  VALUES 
                  (NULL, '$this->OrderDetailsID', '$this->SparePartID', 
                  '$this->UserID', '$this->TotalAmount', 
                  '$this->CommissionID', '$this->Notes')
                  ";
          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }

      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `bill`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->OrderDetailsID[$i]=$row['OrderDetailsID'];
              $this->SparePartID[$i]=$row['SparePartID'];
              $this->UserID[$i]=$row['UserID'];
              $this->TotalAmount[$i]=$row['Total Amount'];
              $this->CommissionID[$i]=$row['CommissionID'];
              $this->Notes[$i]=$row['Notes'];
          }
          return $i;
      }

     /* public function CounterSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT COUNT(*) FROM sparepart";
          $result = $mysqli->query($sql);
          return $result;
      }*/
      public function Delete(){

      }

  }
?>
