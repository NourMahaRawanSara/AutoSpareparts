<?php
	function valid_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$firstName = valid_input($_POST['firstName']);
	$lastName = valid_input($_POST['lastName']);
	$userName = valid_input($_POST['userName']);
	$password = valid_input($_POST['password']);
	$re_password = valid_input($_POST['rePassword']);
	$Email = valid_input($_POST['ema']);
	$Mobile = valid_input($_POST['mob']);
	$birthDate = $_POST['bDate'];
	$interests = valid_input($_POST['userid']);
	$errorFlag = false;
	session_start();
	unset($_SESSION['userError']);
	unset($_SESSION['passError']);
	$conn = mysqli_connect("localhost", "root", "", "delta");
		if($conn == false){
			die(mysqli_connect_error());
		}
		$select_sql = "SELECT * FROM user WHERE username = '{$userName}'";
		$result = mysqli_query($conn, $select_sql);
		if($result->num_rows != 0){
			$errorFlag = true;
			$_SESSION['userError'] = "This Username is already registered";
		}
		if($password != $re_password){
			$errorFlag = true;
			$_SESSION['passError'] = "Re-password isn't match the password";
		}

		if($errorFlag){
			header('Location: http://localhost/delta/addE.php');
			exit();
		}
		else{
			$insert_sql = "INSERT INTO user(Fname,Lname,DateOfBirth,Mobile,Email,,Username,password) VALUES ('{$firstName}','{$lastName}','{$birthDate}','{$Mobile}','{$Email}','{$userName}','{$password}')";
			$insert = mysqli_query($conn, $insert_sql);
			$_SESSION['uName'] = $userName;
			$_SESSION['user'] = 1;
			header('Location: http://localhost/delta/index.php');
		}
?>