<?php
	session_start();
	if(!isset($_SESSION['uname'])){
		header("location: Change.php");
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<center><h1>Welcome Bob!</h1></center>
	
<CENTER>
	<a href="Welcome.php">Profile</a><br>
	<a href="Changepassword.php">Change Password</a><br>
	<a href="ViewUsers.php">View Users</a><br>
	<a href="Logout.php">Logout</a>
</CENTER>
</body>
</html>