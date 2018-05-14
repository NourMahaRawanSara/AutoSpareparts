<?php
require_once "../ConnectionToDB.php";
  require_once("../Model/ControllingResourcesModel.php");
?>
<?php

	if (isset($_POST['submit'])){
        $name = $_POST['Name'];
        $quantity=$_POST['quantity'];
        $PID = $_POST['resource'];


        $resource = new ControllingResourcesModel();
        $resource->Name=$name;
        $resource->Quantity=$quantity;
        $resource->ParentID=$PID;
        $resource->AddResource();
        header('Location:../Viewer/ControllingResources.php');
	}

?>
