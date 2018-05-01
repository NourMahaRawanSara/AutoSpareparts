<?php
require_once "ConnectionToDB.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST">


        <strong><center>UserType Position:<br></center></strong>
        <center><input type="text" name="position"></center>

        <center><input type="submit" name="submit" value="New User Type" /></center>
    </form>
  </body>
</html>

<?php
require_once("Model/UserTypeModel.php");

  if (isset($_POST['submit'])){
      $position = $_POST['position'];

      $user = new UserTypeModel();
      $user->Position = $position;
      $user->Add();
    }

?>
