<?php
  class PagesModel{

      public $ID;
      public $Name;
      public $PhysicalID;
      public $HTML;

      public function __construct(){

      }





      public function Add(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `pages`(`ID`, `Name`, `PhysicalID`, `HTML`) VALUES ($this->ID,$this->Name,$this->PhysicalID,$this->HTML)";

          $result = $mysqli->query($sql);
      }





      public function ViewContact(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `pages`WHERE ID=1";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->Name[$i]=$row['Name'];
              $this->PhysicalID[$i]=$row['PhysicalID'];
              $this->HTML[$i]=$row['HTML'];
          }
          return $i;
      }
      public function EditHTML(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `pages`
						WHERE `Name` = 'Contact Us'
						 ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
               $this->HTML[$i]=$row['HTML'];
          }
          return $i;
      }

      public function Delete(){

      }
      public function Update(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "UPDATE `pages`
				SET `HTML` = $this->HTML
								WHERE `ID`=$this->ID
								";
          $result = $mysqli->query($sql);
          header('Location: edithtml.php');
          exit();
      }


  }
?>
