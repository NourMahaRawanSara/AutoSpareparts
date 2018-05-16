<?php
  class OrderStatusModel{

      public $ID;
      public $StatusID;



      public function __construct(){

      }





      public function AddStatus(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `orderstatus` (`ID`, `StatusID`) VALUES (NULL, '$this->StatusID')";

          $result = $mysqli->query($sql);
      }

public function ViewSpecificStatus($OrderStatusID){
    $db = ConnectionToDB::getInstance();
    $mysqli = $db->getConnection();
$sql="SELECT orderstatus.*,
status.Name
FROM orderstatus
INNER JOIN status ON orderstatus.StatusID=status.ID
AND orderstatus.ID=$OrderStatusID";
    $result = $mysqli->query($sql);
    $i=-1;

    while($row =mysqli_fetch_array($result)){
        $i++;
        $this->ID[$i]=$row['ID'];
        $this->StatusID[$i]=$row['StatusID'];

    }
    return $i;

}



      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `orderstatus`";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->StatusID[$i]=$row['StatusID'];

          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
