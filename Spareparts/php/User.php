<?php
require_once "ConnectionToDB.php";


//require_once "UserType.php";
//require_once "Page.php";

  class User{
  public $id;
  public $firstname;
  public $lastname;
  public $DOB;
  public $mobile;
  public $email;
  public $username;
  public $password;
//  public $usertype_id;

   function __construct(){

    }

   function login($username, $password){
     $db = new dbconnect;
     $sql = "SELECT * FROM user
             WHERE `Username` = '$username'
             AND `password`= '$password'
             ";
     $result = $db->executesql($sql);
     $num_row = mysqli_num_rows($result);
     $row = mysqli_fetch_array($result);
     if( $num_row ==1 )
          {
            $_SESSION['userID']=$row[0];
      header("Location: IndexLogin.php");

       }
       else
          {
      echo 'Incorrect Username or Password';
       }
      }



     /*//$_SESSION["ID"] = $row['ID'];
     $_SESSION["ID"] = $row[0];
     $_SESSION["FName"] = $row['Fname'];
     $_SESSION["LName"] = $row['Lname'];
     $_SESSION["DOB"] = $row['DateOfBirth'];
     $_SESSION["Mobile"]=$row['Mobile'];

     $_SESSION["Email"] = $row['Email'];
     $_SESSION["Username"]=$row['Username'];
     $_SESSION["Password"] = $row['password'];
     $_SESSION["UserType"] = $row['UserTypeID'];

     $this->id = $row['ID'];

     echo "Your ID :" . $this->id;
     header("Location: index.html");

    */




   function deleteUser($user){
     $db = new dbconnect;
     $sql = "DELETE FROM user
             WHERE `user.ID` = $user->id
             ";
     $result = $db->executesql($sql);
if($sql){
  echo 'deleted';
}
   }


 function insertInDb($firstname,$lastname,$DOB,$mobile,$email,$username,$password){
   $db = new dbconnect;
   $conn = $db->connect();
   $sql="INSERT INTO user
   (`Fname`,`Lname`,`DateOfBirth`,`Mobile`,
     `Email`/*,`UserTypeID`*/,`Username`,`password`)
     VALUES ('$firstname',
       '$lastname','$DOB','$mobile',
       '$email',/*'$usertype_id',*/
       '$username','$password')";
   $res = mysqli_query($conn,$sql);
   header("Location: index.html");
 }

   public function updateMyDB($firstname,$lastname,$DOB,$mobile,$email,$username,$password,$id){
     $db = new dbconnect;
     $db->connect();
     $sql = "UPDATE user SET `Fname`='$firstname',
`Lname`='$lastname',`DateOfBirth`='$DOB', `Mobile`='$mobile',`Email` = '$email',`Username`='$username',`password`='$password' WHERE `id` = '$id' ";
     $result =$db->executesql($sql);
     return $result;
   }

  public function selectAllUsersInDb(){
     $db = new dbconnect;
     $sql = "SELECT * FROM `user` where 1";
     $result =$db->executesql($sql);
     if ($result->num_rows > 0) {
    echo " <table >
    <tr>
    <th>ID </th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Date Of Birth</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>Username</th>
    </tr>
    ";

    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]." ".
        "</td><td>" . $row["Fname"]." ".
         "</td><td>" . $row["Lname"]." ".
        "</td><td>" . $row["DateOfBirth"]." ".
        "</td><td>" . $row["Mobile"].
        "</td><td>" . $row["Email"].
        "</td><td>" . $row["Username"].

        "</td></tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

}
}
?>
