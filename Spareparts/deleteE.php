<?php
session_start();
$_SESSION['auth'] = "true";
require("ConnectionToDB.php");
require("User.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Account</title>
  </head>
  <body>
    <form method="post" action="">

User ID <input type="text" name="userid" placeholder="Enter User ID" required>
      <input type="submit" value="Delete User" name="submit" >

    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])){
    $userid = $_POST['userid'];
    $user = new User;
    $user->id = $userid;
    $user->deleteUser($user);
  }
?>
