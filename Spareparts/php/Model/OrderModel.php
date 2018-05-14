<?php


  class OrderModel{

      public $ID;
      public $paymentMethodID;
      public $OrderTypeID;
      public $DateOfOrder;
      public $CurrencyID;
      public $TaxesID;
      public $DeliveryFees;
      public $SparepartID;



      public function __construct(){

      }


      public function AddOrder(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `order` (`ID`, `paymentMethodID`, `OrderTypeID`, `DateOfOrder`, `CurrencyID`, `DeliveryFees`, `SparepartID`) VALUES (NULL, '$this->paymentMethodID', '$this->OrderTypeID', '$this->DateOfOrder', '$this->CurrencyID','$this->DeliveryFees', '$this->SparepartID')
";

          $result = $mysqli->query($sql);
          if(!$result){
              die($mysqli->error);
          }
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



          public function viewSpecificOrder($OrderTypeID)
      {
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `order`
                  WHERE OrderTypeID = $OrderTypeID";

          $result = $mysqli->query($sql);
          if (!$result){
              die($mysqli->error);
          }
          $i = -1;

          while ($row = mysqli_fetch_array($result)) {
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->paymentMethodID[$i]=$row['paymentMethodID'];
              $this->OrderTypeID[$i]=$row['OrderTypeID'];
              $this->DateOfOrder[$i]=$row['DateOfOrder'];
              $this->CurrencyID[$i]=$row['CurrencyID'];
              //$this->TaxesID[$i]=$row['TaxesID'];
              $this->DeliveryFees[$i]=$row['DeliveryFees'];
              $this->SparepartID[$i]=$row['SparepartID'];
          }
          return $i;
      }
      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `order`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->paymentMethodID[$i]=$row['paymentMethodID'];
              $this->OrderTypeID[$i]=$row['OrderTypeID'];
              $this->DateOfOrder[$i]=$row['DateOfOrder'];
              $this->CurrencyID[$i]=$row['CurrencyID'];
              //$this->TaxesID[$i]=$row['TaxesID'];
              $this->DeliveryFees[$i]=$row['DeliveryFees'];
              $this->SparepartID[$i]=$row['SparepartID'];
          }
          return $i;
      }

      public function Delete(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
          $sql = "DELETE FROM order
             WHERE `ID` = $this->ID
             ";
          $result = $mysqli->query($sql);
          if($sql){
              echo 'deleted';
          }
      }

  }
?>
