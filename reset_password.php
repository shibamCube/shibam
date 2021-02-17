<?php
session_start();
$email=$_POST['email'];
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
  $result = $mysqli->query("SELECT * FROM FORM_DETAILS WHERE email='$email';");
 $row=$result->fetch_assoc();
	if($row==0)
	{
		echo '<script>alert("email is not registered. enter your registered email");
		
			window.location.assign("forget_password.php");
		</script>'; 
		
	}
	//echo($row['email']);
	$_SESSION['email']=$row['email'];
?>

<html>
<head>
<style>
	body
	{
		background-color:lightblue;
	}
</style>
</head>
<body>
<form action="updated.php" method="post">
<br><br><br><h3>reset your password here</h3><br><br><input type="password" name="password" value="reset" required>
<input type="submit">
</form>
</body>
</html>

