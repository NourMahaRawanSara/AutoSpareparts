<?php
  session_start();
  require("ConnectionToDB.php");
?>
<!DOCTYPE html>
    <head>

    </head>
<html>
    <body>
        <form method="post" action="">

          <strong>First Name:<strong><br>
         <input type="text" name="fname"  value="<?php echo $_SESSION['Fname']; ?>" required><br>

        <strong>Last Name:<strong><br>
         <input type="text" name="Lname" placeholder="Lastname"value="<?php echo $_SESSION['Lname']; ?>" required><br>

         <strong>Email:<strong><br>
           <input type="email" name="Email" placeholder="Email" value="<?php echo $_SESSION['Email']; ?>" required><br>

           <strong>Username:<strong><br>
            <input type="text" name="Username" placeholder="Username" value="<?php echo $_SESSION['Username']; ?>"required><br>


           <strong>Password:<strong><br>
             <input type="password" name="password" placeholder="Password" value="<?php echo $_SESSION['password']; ?>"required><br>

             <strong>Mobile Number:<strong><br>
               <input type="tel" name="Mobile" placeholder="Mobile Number" value="<?php echo $_SESSION['Mobile']; ?>"required><br>


          <strong>Birthdate:</strong><br>
                <input type="date" name="DateOfBirth"value="<?php echo $_SESSION['DateOfBirth']; ?>"><br>
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
      $user->updateMyDB();

  }
?>
</body>
</html>
