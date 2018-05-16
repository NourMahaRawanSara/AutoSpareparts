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

          //echo $num_row;
          echo "<br>";
          if( $row >0 )
          {
              $_SESSION["userID"] = $row['ID'];
              $_SESSION["UserTypeID"] = $row['UserTypeID'];
              //echo $row['UserTypeID'];
              $userTypeID = $row['UserTypeID'];

              $sql = "SELECT pages.PhysicalID
                      FROM usertypepage
                      INNER JOIN pages ON usertypepage.PageID = pages.ID
                      WHERE usertypepage.UserTypeID = $userTypeID
                      ";

              $result = $mysqli->query($sql);
              $row = mysqli_fetch_array($result);

              if ($row > 0){
                  echo $row['PhysicalID'];
                  header('Location: ' .$row['PhysicalID']);
              }

//              return $row['UserTypeID'];
          }
          else
          {
              return $num_row;
              //echo $row;

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

          $sql = "UPDATE user SET `Fname`='$this->FName',
                    `Lname`='$this->LName',`DateOfBirth`='$this->DOB', `Mobile`='$this->Mobile',
                    `Email` = '$this->Email',`Username`='$this->Username',`password`='$this->Password' 
                    WHERE `id` = '$this->ID' ";
          $result =$mysqli->query($sql);



          }

      public function ViewAll(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = " SELECT user.ID, 
                    user.Fname, 
                    user.Lname, 
                    user.Mobile, 
                    user.DateOfBirth, 
                    user.Email, 
                    user.Username, 
                    usertype.Position
          FROM `user`
          INNER JOIN `usertype` ON `user`.`usertypeID` = `usertype`.`ID`
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
              $this->UserTypeID[$i]=$row['Position'];
              $this->Username[$i]=$row['Username'];
              //$this->Password[$i]=$row['password'];

          }
          return $i;
      }
      public function ViewSales(){
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
      public function ViewInventory(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  WHERE `UserTypeID` = 4
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
      public function ViewDelivery(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  WHERE `UserTypeID` = 6
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
      public function ViewAdmin(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  WHERE `UserTypeID` = 1
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


      public function ViewAccountant()
      {
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  WHERE `UserTypeID` = 5
                ";
          $result = $mysqli->query($sql);
          $i = -1;

          while ($row = mysqli_fetch_array($result)) {
              $i++;
              $this->ID[$i] = $row['ID'];
              $this->FName[$i] = $row['Fname'];
              $this->LName[$i] = $row['Lname'];
              $this->Mobile[$i] = $row['Mobile'];
              $this->DOB[$i] = $row['DateOfBirth'];
              $this->Email[$i] = $row['Email'];
              $this->UserTypeID[$i] = $row['UserTypeID'];
              $this->Username[$i] = $row['Username'];
              $this->Password[$i] = $row['password'];

          }
          return $i;
      }
          public function viewSpecificUser($UsertypeID)
      {
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM `user`
                  WHERE UserTypeID = $UsertypeID";
          $result = $mysqli->query($sql);
          $i = -1;

          while ($row = mysqli_fetch_array($result)) {
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

      public function checkForAvailableUsername($username){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
          $sql = "SELECT * FROM user
                  WHERE Username = '".$username."'
                    ";
          $result = $mysqli->query($sql);
          return mysqli_num_rows($result);
      }

  }
?>
