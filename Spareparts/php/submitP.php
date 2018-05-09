<?php
	function valid_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$productName = valid_input($_POST['productname']);
	$productCode = valid_input($_POST['productcode']);
	$Price = valid_input($_POST['price']);
	$InCode = valid_input($_POST['incode']);
	$totalpieces = valid_input($_POST['TP']);
	
	$errorFlag = false;
	session_start();
	unset($_SESSION['userError']);
	unset($_SESSION['passError']);
	$conn = mysqli_connect("localhost", "root", "", "delta");
		if($conn == false){
			die(mysqli_connect_error());
		}
		$select_sql = "SELECT * FROM 'sparepart' WHERE OEM = '{$ProductName}'";
		$result = mysqli_query($conn, $select_sql);
		

		if($errorFlag){
			header('Location: http://localhost/delta/addEmp.php');
			exit();
		}
		else{
			$insert_sql = "INSERT INTO user(productname,productcode,price,incode,TP) VALUES ('{$productName}','{$productCode}','{$Price}','{$totalpieces}')";
			$insert = mysqli_query($conn, $insert_sql);
			$_SESSION['uName'] = $userName;
			$_SESSION['user'] = 1;
			header('Location: http://localhost/delta/index.php');
		}
?>