<!DOCTYPE HTML>
<html>
	<head>
	<?php
		include "ConnectionToDB.php";
   require_once "Model/PagesModel.php";
		$page=new PagesModel();
		$page->EditHTML();

		if($_POST) {
            $NewHtml = $_POST["newhtml"];
            $page->Update();
        }

	?>

	<script type="text/javascript" src="../CDO/plugin/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="../CDO/plugin/tinymce/init-tinymce.js"></script>
	<script type="text/javascript" src="../CDO/js/getdata.js"></script>
	</head>
	<body>
		<div class="form-title">
			<h4>Edit Contact page</h4>
		</div>
		<div class="form-body">
			<form method="post" >
				<div class="form-group">
          <textarea  name="newhtml" class="tinymce" id="texteditor"> <?php echo $page; ?> </textarea>
						<br>
							<input type="submit" value="Change">
        </div>
			</form>
    </div>
	</body>
</html>