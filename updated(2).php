<?php
session_start();
//echo($email);
$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
 // $result = $mysqli->query("SELECT * FROM FORM_DETAILS WHERE email='$email';");
 //$row=$result->fetch_assoc();
 $email=$_SESSION['email'];
 $firstName=$_POST['firstName'];
 $lastName=$_POST['lastName'];
 $address=$_POST['address'];
 $password=$_SESSION['password'];
 if(strcmp($firstName,"")==0)
 {
 	$firstName=$_SESSION['firstName'];
 }
 if(strcmp($lastName,"")==0)
 {
 	$lastName=$_SESSION['lastName'];
 }
 if(strcmp($address,"")==0)
 {
 	$address=$_SESSION['address'];
 }
 $result=$mysqli->query("UPDATE FORM_DETAILS SET firstName='$firstName', lastName='$lastName',Address='$address', email='$email' WHERE email ='$email';");
 
?>
<html>
<head>
<style>
body
	{
		background-color: lightblue;
	}
	p
	{
		font-weight:bold;
		text-align:center;
	}
</style>
</head>
<body>
<p>details updated sucessfully<p><br><br>
press here to go to <a href="view_user.php">user</a> page
</body>
</html>
