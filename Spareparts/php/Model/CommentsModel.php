<?php
    require_once "../ConnectionToDB.php";
    class CommentsModel{

        public $comment;
        public $status;


        public function GetlatestNotifications(){
            $db = ConnectionToDB::getInstance();
            $mysqli = $db->getConnection();
            $query = "SELECT * FROM comments ORDER BY comment_id DESC LIMIT 3";
            $result = $mysqli->query($query);
            $counter=-1;
            while($rows=mysqli_fetch_array($result)){
                $counter++;

                $this->comment[$counter]=$rows['comment_text'];
            }
               return $counter;
            }
        public function GetUnseenNotifications(){
            $db = ConnectionToDB::getInstance();
            $mysqli = $db->getConnection();
            $status_query = "SELECT * FROM comments WHERE comment_status=0";
            $result_query = $mysqli->query($status_query);
            $count = mysqli_num_rows($result_query);
            return $count;
        }
        public function Seen(){
            $db = ConnectionToDB::getInstance();
            $mysqli = $db->getConnection();
            $update_query = "UPDATE comments SET comment_status = 1 WHERE comment_status=0";
            $mysqli->query($update_query);
        }

        public function InsertComment($comment){
            $db = ConnectionToDB::getInstance();
            $mysqli = $db->getConnection();
            $sql_query = "INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES (NULL, 'New Order', '$comment', '0')";
            $result = $mysqli->query($sql_query);
        }
    }
    ?>