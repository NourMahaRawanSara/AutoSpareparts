<!DOCTYPE html>
   <?php
		session_start();
		require("ConnectionToDB.php");

   $db = ConnectionToDB::getInstance();
   $mysqli = $db->getConnection();

   $querySearch = $_GET["q"];

		$queryStatement = "SELECT * FROM user WHERE 'Fname' LIKE '%$querySearch%' OR 'Lname' LIKE '%$querySearch%'";

   $result = $mysqli->query($queryStatement);
		while($row =mysqli_fetch_array($result)){
			echo $row["Fname"] . " " . $row["Lname"] . "<br>";
		}


   ?>
