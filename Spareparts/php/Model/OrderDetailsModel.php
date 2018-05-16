<?php


  class OrderDetailsModel{

      public $ID;
      public $OrderID;
      public $SparePartID;
      public $DateOfDelivery;
      public $Quantity;
      public $PricePerItem;
      public $OrderStatusID;


      public function invoices($InvoiceID)
      {
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT `orderdetails`.*,
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
public function ViewSpecificOrderDetails($ID){
  $db = ConnectionToDB::getInstance();
  $mysqli = $db->getConnection();

  $sql = "SELECT * FROM `orderdetails`
                  WHERE ID = $ID";

  $result = $mysqli->query($sql);
  if (!$result){
  die($mysqli->error);
  }
$i = -1;
    while($row =mysqli_fetch_array($result)){
        $i++;
        $this->ID[$i]=$row['ID'];
        $this->OrderID[$i]=$row['OrderID'];
        $this->SparePartID[$i]=$row['SparePartID'];
        $this->DateOfDelivery[$i]=$row['DateOfDelivery'];
        $this->Quantity[$i]=$row['Quantity'];
        $this->PricePerItem[$i]=$row['PricePerItem'];
        $this->OrderStatusID[$i]=$row['OrderStatusID'];
    }
    return $i;
}
      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `orderdetails`
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->OrderID[$i]=$row['OrderID'];
              $this->SparePartID[$i]=$row['SparePartID'];
              $this->DateOfDelivery[$i]=$row['DateOfDelivery'];
              $this->Quantity[$i]=$row['Quantity'];
              $this->PricePerItem[$i]=$row['PricePerItem'];
              $this->OrderStatusID[$i]=$row['OrderStatusID'];
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
      /*public function AddSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `sparepart` (`ID`, `Picture`, `OEM`, `InternalCode`, `CompanyProviderCode`, `IsCorrupted`, `CountryOfOrigin`, `Price`)
VALUES (NULL, '$this->Picture', '$this->OEM', '$this->InternalCode', '$this->CompanyProviderCode', '$this->IsCorrupted', '$this->CountryOfOrigin', '$this->Price')";

          $result = $mysqli->query($sql);
      }

      public function Edit(){

      }*/

  }
?>
