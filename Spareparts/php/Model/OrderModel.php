<?php


  class OrderModel{

      public $ID;
      public $UserID;
      public $paymentMethodID;
      public $totalprice;
      public $OrderTypeID;
      public $DateOfOrder;
      public $CurrencyID;
      public $TaxesID;
      public $DeliveryFees;
      public $BillID;



      public function __construct(){

      }





      public function AddOrder(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `order` (`ID`, `UserID`, `paymentMethodID`, `totalprice`, `OrderTypeID`, `DateOfOrder`, `CurrencyID`, `TaxesID`)
                  VALUES (NULL, '$this->UserID',
                  '$this->paymentMethodID', '$this->totalprice',
                   '$this->OrderTypeID', '$this->DateOfOrder', '$this->CurrencyID'
                  , '$this->TaxesID')";

          $result = $mysqli->query($sql);
      }




      public function Edit(){

          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "UPDATE user SET `Fname`='$this->Fname',
`Lname`='$this->LName',`DateOfBirth`='$this->DOB', `Mobile`='$this->Mobile',
`Email` = '$this->Email',`Username`='$this->Username',`password`='$this->Password'
WHERE `id` = '$this->ID' ";
          $result =$mysqli->query($sql);



          }


      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `order` ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->paymentMethodID[$i]=$row['paymentMethodID'];
              $this->OrderTypeID[$i]=$row['OrderTypeID'];
              $this->DateOfOrder[$i]=$row['DateOfOrder'];
              $this->CurrencyID[$i]=$row['CurrencyID'];
              $this->TaxesID[$i]=$row['TaxesID'];
              $this->DeliveryFees[$i]=$row['DeliveryFees'];
              $this->BillID[$i]=$row['BillID'];
          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
