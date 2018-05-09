<!DOCTYPE html>
   <?php
		session_start();
		require("ConnectionToDB.php");

   $db = ConnectionToDB::getInstance();
   $mysqli = $db->getConnection();
   //$querySearch = $_GET['$userinput'];

		$queryStatement = "SELECT * FROM user WHERE 'Fname' LIKE '%k%' OR 'Lname' LIKE '%k%'";

   $result = $mysqli->query($queryStatement);

		while($row = mysqli_fetch_array($result)){
			echo $row["Fname"] . " " . $row["Lname"] . "<br>";
		}


   ?>
