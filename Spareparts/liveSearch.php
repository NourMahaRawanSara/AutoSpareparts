<!DOCTYPE html>
   <?php 
		session_start();
		require("ConnectionToDB.php");
		
		$db = new dbconnect;
		
		$querySearch = $_GET["q"];
		
		$queryStatement = "SELECT * FROM user WHERE 'FirstName' LIKE '%$querySearch%' OR 'LastName' LIKE '%$querySearch%'";
		
		$result = $db->executesql($queryStatement);
		
		while($row = mysqli_fetch_assoc($result)){
			echo $row["FirstName"] . " " . $row["LastName"] . "<br>";
		}
		
		
   ?>