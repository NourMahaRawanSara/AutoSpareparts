<?php
session_start();
$_SESSION['auth'] = "true";
require("ConnectionToDB.php");
require("Product.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Product</title>
  </head>
  <body>
    <form method="post" action="">

Product ID <input type="text" name="productid" placeholder="Enter Product ID" required>
      <input type="submit" value="Delete Product" name="submit" >

    </form>
  </body>
</html>
<?php
if (isset($_POST['submit'])){
    $spid = $_POST['productid'];
    $sp = new SparePart;
    $sp->id = $spid;
    $sp->deleteProd($sp);
  }
?>
