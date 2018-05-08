<?php
  class ControllingResourcesModel{

      public $ID;
      public $Name;
      public $Quantity;
      public $ParentID;



      public function __construct(){

      }





      public function AddResource(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `controllingresources` (`ID`, `Name`, `Quantity`, `ParentID`) VALUES (NULL, '$this->Name', '$this->Quantity', '$this->ParentID')";

          $result = $mysqli->query($sql);
      }





      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `controllingresources`
                  WHERE ParentID = 1";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->Name[$i]=$row['Name'];
              $this->Quantity[$i]=$row['Quantity'];
              $this->ParentID[$i]=$row['ParentID'];

          }
          return $i;
      }

      public function viewSpecificResource($parentID)
      {
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `controllingresources`
                  WHERE ParentID = $parentID";
          $result = $mysqli->query($sql);
          $i = -1;

          while ($row = mysqli_fetch_array($result)) {
              $i++;
              $this->ID[$i] = $row['ID'];
              $this->Name[$i] = $row['Name'];
              $this->Quantity[$i] = $row['Quantity'];
              $this->ParentID[$i] = $row['ParentID'];
          }
      }

      public function Delete($ID){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql ="
          DELETE FROM `controllingresources` WHERE ID=$ID";
          $result = $mysqli->query($sql);


      }

  }
?>
