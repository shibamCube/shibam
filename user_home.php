
<?php
	session_start();
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
	if($mysqli->connect_error)
	{
		echo("<br/>conncetion error<br/>");
	}
	else
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		$_SESSION["email"]=$email;
		$_SESSION["password"]=$password;
		$result=$mysqli->query("SELECT email FROM FORM_DETAILS WHERE email='$email' AND password='$password';");
		$row=$result->fetch_assoc();
		if($row == 0)
			{
				echo '<script>alert("you are not an user. first register yourself. you will be redirected to registration page")
					  window.location.assign("home.php");
					  </script>'; 
			}
		else
			header('Location:view_user.php');
	}
?>
