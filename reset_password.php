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
	$_SESSION['email']=$row['email'];
?>

<html>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form action="updated.php" method="post">
			<div class="sh4">
				<br><br><br>
				<h1>reset your password here</h1>
				<br><br>
				<label>password</label>
				<br><br>
				<input type="password" name="password" value="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, 								and at least 8 or more characters" required>
				<br><br><label>confirm_password</label><br><br>
				<input type="password" name="confirm_password" value="confirm_password" required>
				<br><br><br>
				<input type="submit" value="submit">
				<br><br>
			</div>
		</form>
	</body>
</html>
