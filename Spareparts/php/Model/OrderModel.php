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
        public $MethodName;


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


public function viewSpecificInvoice($OrderID){
    $db = ConnectionToDB::getInstance();
    $mysqli = $db->getConnection();

    $sql = "SELECT * FROM `order`
                  WHERE ID = $OrderID";

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
public function invoices($InvoiceID)
{
    $db = ConnectionToDB::getInstance();
    $mysqli = $db->getConnection();

   $sql = "SELECT `order`.*,
paymentmethod.Name,
ordertype.IsOnline,
currency.Name,
sparepart.Name
FROM `order`
INNER JOIN paymentmethod
ON `order`.`paymentMethodID`=paymentmethod.ID
INNER JOIN ordertype
ON `order`.`OrderTypeID`=ordertype.ID
INNER JOIN currency
ON `order`.`CurrencyID`=currency.ID
INNER JOIN sparepart
ON `order`.`SparepartID`=sparepart.ID
and `order`.`ID`=$InvoiceID";

    $result = $mysqli->query($sql);
    $i = -1;

    while ($row = mysqli_fetch_array($result)) {
        $i++;
        $this->ID[$i]=$row['ID'];
        $this->MethodName[$i]=$row['Name'];
        $this->OrderTypeID[$i]=$row['IsOnline'];
        $this->CurrencyID[$i]=$row['Name'];
        $this->SparepartID[$i]=$row['Name'];
        $this->DateOfOrder[$i]=$row['DateOfOrder'];
        //$this->CurrencyID[$i]=$row['CurrencyID'];
        //$this->TaxesID[$i]=$row['TaxesID'];
        $this->DeliveryFees[$i]=$row['DeliveryFees'];
         }

    return $i;
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
