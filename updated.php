<?php
session_start();
$email=$_SESSION['email'];
//echo($email);
$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
 // $result = $mysqli->query("SELECT * FROM FORM_DETAILS WHERE email='$email';");
 //$row=$result->fetch_assoc();
 $password=$_POST['password'];
 //echo($password);
 $result=$mysqli->query("UPDATE FORM_DETAILS SET password ='$password' WHERE email ='$email';");
?>
<html>
<head>
<style>
body
	{
		background-color: yellow;
	}
	p
	{
		font-weight:bold;
		text-align:center;
	}
</style>
</head>
<body>
<p>password updated sucessfully<p><br><br>
press here to go to <a href="view_user.php">user</a> page
</body>
</html>
