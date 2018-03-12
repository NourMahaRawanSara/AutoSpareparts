<?php
  session_start();
require_once "ConnectionToDB.php";
  require("Product.php");
  $db = new dbconnect;
  $conn = $db->connect();


  		/*if($row=mysqli_fetch_array($result)){

  			$pic = $row["Picture"];
        $OEM = $row["OEM"];
        $InternalCode = $row["InternalCode"];
        $PCode = $row["CompanyProviderCode"];
        $corr = $row["IsCorrupted"];
        $CountryOfOrigin = $row["CountryOfOrigin"];
        $price = $row["Price"];




  		}
*/
$sql="select * from `sparepart` WHERE 1";
$result =$db->executesql($sql);


?>
<!DOCTYPE html>
    <head>

    </head>
<html>
    <body>
        <form method="post" action="">
          <div id="form1">
          	<strong>Picture:<strong><br>
          		<input type="file" name="pic" accept="image/*"id="img">
          <br>
          <strong>OEM:<strong><br>
        <select name='prouctIDList'>
          <?php
          foreach ($result as  $value) {
            $id=$value['ID'];
            $OEM=$value['OEM'];
            echo "<option value='$id'>$OEM</option>";

          }
          ?>
        </select>
        <br>

        <strong>New OEM:<strong><br>
         <input type="text" name="OEMn" required><br>
          <strong>Internal Code:<strong><br>
           <input type="text" name="IC"  required><br>

           <strong>Company Provider Code:<strong><br>
          	<input type="text" name="Pcode"   required><br>


           <strong>Is the item corrupted?:<strong><br>Yes
          	 <input type="radio" name="corr" ><br>No
          	 <input type="radio" name="corr"><br>

          	 <strong>Country Of Origin:<strong><br>
          		 <input type="text" name="countroforigin" required><br>


          <strong>Price:</strong><br>
          			<input type="text" name="price" ><br>
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
      $id=$_POST['prouctIDList'];
      $pic = $_POST['pic'];
      $OEM=$_POST['OEMn'];
      $InternalCode = $_POST['IC'];
      $PCode=$_POST['Pcode'];
      $corr = $_POST['corr'];
      $CountryOfOrigin=$_POST['countroforigin'];
      $price = $_POST['price'];

      $sp = new SparePart;
      $sp->pic = $pic;
      $sp->OEM=$OEM;
      $sp->InternalCode = $InternalCode;
      $sp->PCode=$PCode;
      $sp->corr = $corr;

      $sp->CountryOfOrigin=$CountryOfOrigin;
      $sp->price = $price;


      $result= $sp->updateMyDB($pic,$OEM,
      $InternalCode,$PCode,$corr,$CountryOfOrigin,$price,$id);


    }
    ?>
</body>
</html>
