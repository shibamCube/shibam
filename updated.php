<?php
	session_start();
	$email=$_SESSION['email'];
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
	 if($mysqli->connect_error)
	{
		echo("<br/>conncetion error<br/>");
	}
	else
	{
		 $pass=$_POST['password'];
		 $pass_con=$_POST['confirm_password'];
		 if (strcmp($pass,$pass_con)!=0)
		 {
			echo "<script> alert('password did not match');window.location.assign('home.php');</script>";
		 }
		else
		 	$result=$mysqli->query("UPDATE FORM_DETAILS SET password ='$pass' WHERE email ='$email';");
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1 id="up">password updated sucessfully</h1>
		<br><br>
		<p id="up">press here to go to <a href="view_user.php">user</a> page</p>
	</body>
</html>
