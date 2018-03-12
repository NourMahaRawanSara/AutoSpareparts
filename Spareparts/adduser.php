<?php
  require("ConnectionToDB.php");
  require("User.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add user</title>
  </head>
  <form>
    <body>
      First Name: <br>
      <input type="text" name="firstname" id="username"> <br><br>
      DOB: <br>
      <input type="text" name="lastname" id="username"> <br><br>
      Email : <br>
      <input type="text" name="email" id="username" > <br><br>
      User Type ID : <br>
      <input type="text" name="mobile" id="username"> <br><br>
      <br>
      Password:  <br>
      <input type="text" name="hobby" id="username"> <br><br>

      <input  type="submit" value="Add User" class="signin" name = "submit"><br>
  </form>

  <?php
      if (isset($_POST['submit'])){
          $fname = $_POST['firstname'];
          $dob = $_POST['lastname'];
          $email = $_POST['email'];
          $usertype = $_POST['mobile'];
  				$password = $_POST['hobby'];

          $user = new User;
          $user->fullname = $fname;
          $user->DOB = $dob;
          $user->email = $email;
          $user->password = $password;
          $user->$usertype_id = $usertype;

          $user->insertInDb($user);
      }
    ?>
  </body>
</html>
