<?php
  session_start();
require_once "ConnectionToDB.php";
  require("User.php");
  $db = new dbconnect;
  $conn = $db->connect();
  $userid=$_SESSION['userID'];
  $sql="select * from `user` WHERE `ID`='$userid'";
  $result =$db->executesql($sql);

  		if($row=mysqli_fetch_array($result)){
  			$fname = $row["Fname"];
        $lname = $row["Lname"];
        $mobile = $row["Mobile"];
        $DOB = $row["DateOfBirth"];
        $username = $row["Username"];
        $password = $row["password"];
        $email = $row["Email"];




  		}

?>
<!DOCTYPE html>
    <head>

    </head>
<html>
    <body>
        <form method="post" action="">

          <strong>First Name:<strong><br>
         <input type="text" name="fname"  value="<?php echo $fname ?>" required><br>

        <strong>Last Name:<strong><br>
         <input type="text" name="Lname" placeholder="Lastname"value="<?php echo $lname; ?>" required><br>

         <strong>Email:<strong><br>
           <input type="email" name="Email" placeholder="Email" value="<?php echo $email; ?>" required><br>

           <strong>Username:<strong><br>
            <input type="text" name="Username" placeholder="Username" value="<?php echo $username; ?>"required><br>


           <strong>Password:<strong><br>
             <input type="password" name="password" placeholder="Password" value="<?php echo $password; ?>"required><br>

             <strong>Mobile Number:<strong><br>
               <input type="tel" name="Mobile" placeholder="Mobile Number" value="<?php echo $mobile; ?>"required><br>


          <strong>Birthdate:</strong><br>
                <input type="date" name="DateOfBirth"value="<?php echo $DOB; ?>"><br>
          <br>

              <input type="submit" name="submit" value="Submit">
              <input type="reset" value="Cancel">
              </div>
                    </form>

              </div>
        </div>
        </div>
<?php
    if (isset($_POST['submit'])){
      $id=$_SESSION['userID'];
      $fname = $_POST['fname'];
      $lname=$_POST['Lname'];
      $dob = $_POST['DateOfBirth'];
      $mobile=$_POST['Mobile'];
      $email = $_POST['Email'];
      //$usertype_id = $_POST['UserTypeID'];
      $username=$_POST['Username'];
      $password = $_POST['password'];

      $user = new User;
      $user->firstname = $fname;
      $user->lastname=$lname;
      $user->DOB = $dob;
      $user->mobile=$mobile;
      $user->email = $email;
      //$user->$usertype_id = $usertype;
      $user->username=$username;
      $user->password = $password;
    $result= $user->updateMyDB($fname,$lname,
    $dob,$mobile,$email,/*$usertype,*/$username,$password,$id);


  }
?>
</body>
</html>
