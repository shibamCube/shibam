<?php
		session_start();
		$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
		if($mysqli->connect_error)
			{
				echo("<br/>conncetion error<br/>");
			}
		else
		{
			 $email=$_SESSION['email'];
			 $firstName=$_POST['firstName'];
			  $firstName=filter_var($firstName, FILTER_SANITIZE_STRING);
			 $lastName=$_POST['lastName'];
			  $lastName=filter_var($lastName, FILTER_SANITIZE_STRING);
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
		}
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1 id="updated">details updated sucessfully</h1><br><br><br>
		<p id="updated1">press here to go to <a href="view_user.php">user</a> page</p>
	</body>
</html>
