<?php
  class StatusModel{

      public $ID;
      public $Name;



      public function __construct(){

      }





      public function AddStatus(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `status` (`ID`, `Name`) VALUES (NULL, '$this->Name')";

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
        $this->Name[$i]=$row['Name'];

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
              $this->Name[$i]=$row['Name'];

          }
          return $i;
      }

      public function Delete(){

      }

  }
?>
