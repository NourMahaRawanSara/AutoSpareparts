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
          $db = dbconnect::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT eventdetails.ID, eventdetails.EventName, eventdetails.Price, eventtype.Name
                  FROM `eventdetails`,`eventtype`
                  WHERE eventdetails.EventTypeID = eventtype.ID
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->Name[$i]=$row['EventName'];
              $this->Price[$i]=$row['Price'];
              $this->EventTypeID[$i]=$row['Name'];
          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
