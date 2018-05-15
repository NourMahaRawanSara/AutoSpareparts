<?php
//insert.php
require_once "ConnectionToDB.php";
if(isset($_POST["subject"]))
{


 $notification= new NotificationModel();
$subject=$notification->Add();
   }
//if(isset($_POST["subject"]))
//{

//
//
//
//}
?>