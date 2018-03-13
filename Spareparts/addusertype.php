<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form>
      User Type Name<input type="text" name="userid" />
      <br /><br /><br /><br />
      <input type="submit" name="submit" value="New User Type" />
    </form>
  </body>
</html>

<?php
  include("UserType.php");
  if (isset($_POST['submit'])){
      $userid = $_POST['userid'];

      $user = new UserType;
      $user->Position = $userid;

      $user->addNewUserType($user);
    }

?>
