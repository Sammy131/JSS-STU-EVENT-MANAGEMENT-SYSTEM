<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body background="image\l.png" style="margin-top: 30px;text-align: center;">
<?php
	session_start();
	if (isset($_SESSION['UserFullName'])){
		session_destroy();
		echo "<h1>Logout successfull. Redirect to home page in 5 seconds. <br>Click <a href='index.php'>here</a> if no response.</h1>";
		header('Refresh: 4; index.php');
	}
?>
</body>
</html>
