<?php


  class BillModel{

      public $ID;
      public $OrderDetailsID;
      public $SparePartID;
      public $UserID;
      public $TotalAmount;
      public $CommissionID;
      public $Notes;
      public $Salesman;
      public $subtotal;
      public $Fname;
      public $Lname;
      public $mobile;
      public $SPName;
      public $price;
      public $DateOfDelivery;
      public $importertype;
      public $CompanyName;



      public function __construct(){

      }
      public function invoices($InvoiceID){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT bill.* ,
user.Fname,user.Lname, user.Mobile,
sparepart.Name,sparepart.Price,
orderdetails.DateOfDelivery,
importertype.Type
FROM bill
INNER JOIN user 
ON 
bill.UserID=user.ID 
INNER JOIN sparepart 
ON 
bill.SparePartID=sparepart.ID  
INNER JOIN orderdetails
ON
bill.OrderDetailsID=orderdetails.ID  
INNER JOIN importertype
ON
bill.ImporterTypeID=importertype.ID 
and bill.ID= '$InvoiceID'";
                  
              

          $result = $mysqli->query($sql);
          $i = -1;

          while ($row = mysqli_fetch_array($result)) {
              $i++;
              $this->ID[$i] = $row['ID'];
              $this->OrderDetailsID[$i] = $row['OrderDetailsID'];
              $this->SparePartID[$i] = $row['SparePartID'];
              $this->UserID[$i] = $row['UserID'];
              $this->TotalAmount[$i] = $row['Total Amount'];
              //$this->CommissionID[$i] = $row['CommissionID'];
              $this->Notes[$i] = $row['Notes'];
              //$this->Salesman[$i] = $row['SalesmanID'];
              $this->Fname[$i]=$row['Fname'];
              $this->Lname[$i]=$row['Lname'];
              $this->mobile[$i]=$row['Mobile'];
              $this->subtotal[$i] = $row['Subtotal'];
              $this->SPName[$i] = $row['Name'];
              $this->price[$i]=$row['Price'];
              $this->DateOfDelivery=$row['DateOfDelivery'];
              //$this->importertype=$row['ImporterTypeID'];
              $this->CompanyName=$row['Type'];
          }

          return $i;
      }

      public function viewSpecificBill($ID)
      {
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `bill`
                  WHERE ID = $ID";
          $result = $mysqli->query($sql);
          $i = -1;

          while ($row = mysqli_fetch_array($result)) {
              $i++;
              $this->ID[$i] = $row['ID'];
              $this->OrderDetailsID[$i] = $row['OrderDetailsID'];
              $this->SparePartID[$i] = $row['SparePartID'];
              $this->UserID[$i] = $row['UserID'];
              $this->TotalAmount[$i] = $row['Total Amount'];
              //$this->CommissionID[$i] = $row['CommissionID'];
              $this->Notes[$i] = $row['Notes'];
              $this->Salesman[$i] = $row['SalesmanID'];
              $this->subtotal[$i] = $row['Subtotal'];
              $this->importertype[$i]=$row['ImporterTypeID'];


          }

          return $i;
      }
      public function TotalAmount($subtotal,$id){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
            $sql="SELECT `Subtotal` FROM `bill` WHERE `ID`='$id'";
          $result = $mysqli->query($sql);
          $i=-1;
          $Subtotal=0;
          while($row =mysqli_fetch_array($result)){
              $subtotal=$row['Subtotal'];

          }

          $taxes=0.05;
          $add=$subtotal*$taxes;
          $total=$add+$subtotal;
          echo $total;
          return $total;
      }
     public function SubTotal ($quantity, $id){
         $db = ConnectionToDB::getInstance();
         $mysqli = $db->getConnection();
         $sql="SELECT `Price` FROM sparepart INNER JOIN bill ON sparepart.ID= '$id'  ";


         $result = $mysqli->query($sql);
         $i=-1;
         $price=0;
         while($row =mysqli_fetch_array($result)){
             $price=$row['Price'];

         }
         echo $price;
         //echo $quantity;
         $add=$price*$quantity;
         return $add;



     }
      public function AddBill(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `bill` (`ID`, `OrderDetailsID`, `SparePartID`, `ImporterTypeID`, `UserID`, `SalesmanID`, `Total Amount`, `Subtotal`, `Notes`) VALUES (NULL, '$this->OrderDetailsID', '$this->SparePartID', '$this->importertype', '$this->UserID', '$this->Salesman', '$this->TotalAmount', '$this->subtotal', '$this->Notes')
";
          $result = $mysqli->query($sql);
          if(!$result) {
              die('Invalid:' . $mysqli->error);
          }
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
              $this->Salesman[$i]=$row['SalesmanID'];
              $this->TotalAmount[$i]=$row['Total Amount'];
              $this->subtotal[$i]=$row['Subtotal'];
             // $this->CommissionID[$i]=$row['CommissionID'];
              $this->Notes[$i]=$row['Notes'];
              $this->importertype[$i]=$row['ImporterTypeID'];
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
