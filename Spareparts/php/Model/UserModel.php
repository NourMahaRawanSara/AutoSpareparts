<?php


  class UserModel{

      public $ID;
      public $FName;
      public $LName;
      public $Mobile;
      public $DOB;
      public $Email;
      public $UserTypeID;
      public $Username;
      public $Password;


      public function __construct(){

      }

      function login($username,$password){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
//          $username=$this->Username;
//          $password=$this->Password;
          $sql = "SELECT * FROM user
             WHERE `Username` = '$username'
             AND `password`= '$password'
             ";

          $result = $mysqli->query($sql);
          $num_row = mysqli_num_rows($result);
          $row = mysqli_fetch_array($result);

          echo $num_row;
          echo "<br>";
          if( $row >0 )
          {
              $_SESSION["ID"] = $row['ID'];
              $_SESSION["UserTypeID"] = $row['UserTypeID'];
              echo $row['UserTypeID'];
              return $row['UserTypeID'];
          }
          else
          {
              echo $num_row;
              echo $row;
              echo 'Incorrect Username or Password';
          }


      }

      public function AdminAdd(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `user` (`ID`, `Fname`, `Lname`, `Mobile`, `DateOfBirth`, `Email`, `UserTypeID`, `Username`, `password`) 
                  VALUES (NULL, '$this->FName', 
                  '$this->LName', '$this->Mobile',
                   '$this->DOB', '$this->Email', '$this->UserTypeID'
                  , '$this->Username', '$this->Password')";

          $result = $mysqli->query($sql);
      }

      public function AddClient(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "INSERT INTO `user` (`ID`, `Fname`, `Lname`, `Mobile`, `DateOfBirth`, `Email`, `UserTypeID`, `Username`, `password`) 
                  VALUES (NULL, '$this->FName', 
                  '$this->LName', '$this->Mobile',
                   '$this->DOB', '$this->Email', '7'
                  , '$this->Username', '$this->Password')";

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

      public function ViewAll(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->FName[$i]=$row['Fname'];
              $this->LName[$i]=$row['Lname'];
              $this->Mobile[$i]=$row['Mobile'];
              $this->DOB[$i]=$row['DateOfBirth'];
              $this->Email[$i]=$row['Email'];
              $this->UserTypeID[$i]=$row['UserTypeID'];
              $this->Username[$i]=$row['Username'];
              $this->Password[$i]=$row['password'];

          }
          return $i;
      }
      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  WHERE `UserTypeID` = 3
                ";
          $result = $mysqli->query($sql);
          $i=-1;

          while($row =mysqli_fetch_array($result)){
              $i++;
              $this->ID[$i]=$row['ID'];
              $this->FName[$i]=$row['Fname'];
              $this->LName[$i]=$row['Lname'];
              $this->Mobile[$i]=$row['Mobile'];
              $this->DOB[$i]=$row['DateOfBirth'];
              $this->Email[$i]=$row['Email'];
              $this->UserTypeID[$i]=$row['UserTypeID'];
              $this->Username[$i]=$row['Username'];
              $this->Password[$i]=$row['password'];

          }
          return $i;
      }


      public function Delete(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
          $sql = "DELETE FROM user
             WHERE `ID` = $this->ID
             ";
          $result = $mysqli->query($sql);
          if($sql){
              echo 'deleted';
          }
      }

  }
?>
