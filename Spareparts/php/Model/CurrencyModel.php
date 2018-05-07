<?php


  class CurrencyModel{

      public $ID;
      public $Name;



      public function __construct(){

      }

      public function AddSP(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `currency` (`ID`, `Name`) VALUES (NULL, '$this->Name')

                  ";


          $result = $mysqli->query($sql);
          if ($result){
                //echo "result";
          }else{
              echo $mysqli->error;
          }
      }

      public function Edit(){

      }

      public function View(){

  $db = ConnectionToDB::getInstance();
  $mysqli = $db->getConnection();

  $sql = "SELECT * FROM `currency`";
  $result = $mysqli->query($sql);
  $i=-1;

  while($row =mysqli_fetch_array($result)){
  $i++;
  $this->ID[$i]=$row['ID'];
  $this->Name[$i]=$row['Name'];

  }
return $i;
}




  }
?>
