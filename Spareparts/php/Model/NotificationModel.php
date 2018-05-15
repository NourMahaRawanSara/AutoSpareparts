<?php
  class NotificationModel{

      public $ID;
      public $subject;
      public $Text;
      public $status;



      public function __construct(){

      }

public function Update(){
    $db = ConnectionToDB::getInstance();
    $mysqli = $db->getConnection();


    $sql= "UPDATE notifications SET CommentStatus=1 WHERE CommentStatus=0";
    $result = $mysqli->query($sql);
    if(!$result) {
        die('Invalid:' . $mysqli->error);
    }
    return $result;
}


public function AddComment($subject,$text){
    $db = ConnectionToDB::getInstance();
    $mysqli = $db->getConnection();
    $sql = "INSERT INTO `notifications` (`CommentSubject`, `CommentText`) VALUES ($subject, $text)
";

    $result = $mysqli->query($sql);
    if(!$result) {
        die('Invalid:' . $mysqli->error);
    }
    return $result;
}
      public function Add(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();
//          $subject = mysqli_real_escape_string($connect, $_POST["subject"]);
//          $comment = mysqli_real_escape_string($connect, $_POST["comment"]);
          $sql = "INSERT INTO `notifications` (`ID`, `CommentSubject`, `CommentText`, `CommentStatus`) VALUES (NULL, '$this->subject', '$this->Text', '$this->status')
";

         $result = $mysqli->query($sql);
          if(!$result) {
              die('Invalid:' . $mysqli->error);
          }
          return $result;
      }



public function order(){
    $db = ConnectionToDB::getInstance();
    $mysqli = $db->getConnection();

    $sql="SELECT * FROM notifications ORDER BY comment_id DESC LIMIT 5";
    $result = $mysqli->query($sql);
    $output = '';

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
   <li>
    <a href="#">
     <strong>'.$row["comment_subject"].'</strong><br />
     <small><em>'.$row["comment_text"].'</em></small>
    </a>
   </li>
   <li class="divider"></li>
   ';
        }
    }
    else
    {
        $output .= '<li><a href="#" class="text-bold text-italic">No Notification Found</a></li>';
    }


}

      public function View(){
          $db = ConnectionToDB::getInstance();
          $mysqli = $db->getConnection();

          $sql = "SELECT * FROM notifications WHERE CommentStatus = 0 ORDER BY ID DESC";
          $result = $mysqli->query($sql);
          $i=-1;
          $output = '';
          while($row =mysqli_fetch_array($result)){
              $output .= '
 <div class="alert alert_default">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <p><strong>'.$row["comment_subject"].'</strong>
   <small><em>'.$row["comment_text"].'</em></small>
  </p>
 </div>
 ';
          }
          $update_query = "UPDATE notifications SET CommentStatus = 1 WHERE CommentStatus = 0";
          $result = $mysqli->query($sql);
          echo $output;

          //return $i;
      }

      public function Delete(){

      }

  }
?>
