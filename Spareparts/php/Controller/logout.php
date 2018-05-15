<?php
session_start();
if (session_destroy()){
    header('Location: Viewer/login.php ');
}
?>