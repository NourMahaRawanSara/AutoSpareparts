<?php
require_once "Model/NotificationModel.php";
if(isset($_POST["view"]))
{
    include("ConnectionToDB.php");
    if($_POST["view"] != '')
    {
        $notification=new NotificationModel();
        $update=$notification->Update();
         }
   $Order=$notification->order();

    $query_1 = $notification->View();
     $count = mysqli_num_rows($result_1);
    $data = array(
        'notification'   => $output,
        'unseen_notification' => $count
    );
    echo json_encode($data);
}
?>