
<?php
session_start();
require_once ("Model/UserModel.php");
$user = new UserModel();
?>
<html>
<body>
<h1>Welcome <?php echo $_SESSION['userID']; ?> </h1>
<br>

<a href="editprofile.php">Edit Profile</a>
<a href="delete.php">Delete Profile</a>
<a href="search.php">Search</a>
<a href="Transcript.php">Transcript</a>
<a href="signout.php">Sign out</a>

</body>
</html>
