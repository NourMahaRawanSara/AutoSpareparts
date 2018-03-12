<!DOCTYPE HTML>
<html>
	<head>
	<?php
		include "ConnectionToDB.php";
		$db = new dbconnect;
		$sql = "SELECT * FROM `pages`
						WHERE `Name` = 'Contact Us'
						 ";
		$result= $db->executesql($sql);

		if($row=mysqli_fetch_array($result)){
			$html = $row["HTML"];
			$id=$row["ID"];
		}
		if($_POST)
		{
				$NewHtml=$_POST["newhtml"];
				$sql = "UPDATE `pages`
								SET `HTML` = '$NewHtml'
								WHERE `ID`='$id'
								";
				$db->executesql($sql);
				header('Location: edithtml.php');
				exit();
		}

	?>

	<script type="text/javascript" src="CDO/plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="CDO/plugin/tinymce/init-tinymce.js"></script>
	<script type="text/javascript" src="CDO/js/getdata.js"></script>
	</head>
	<body>
		<div class="form-title">
			<h4>Edit Contact page</h4>
		</div>
		<div class="form-body">
			<form method="post" >
				<div class="form-group">
          <textarea  name="newhtml" class="tinymce" id="texteditor"> <?php echo $html; ?> </textarea>
						<br>
							<input type="submit" value="Change">
        </div>
			</form>
    </div>
	</body>
</html>
