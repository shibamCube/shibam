
<?php
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
	if($mysqli->connect_error)
	{
		echo("<br/>connection failed<br/>");
	}
	else
	{
		$email=$_POST['email'];
		$password=$_POST['password'];
		//echo($email);
		$result=$mysqli->query("SELECT email FROM ADMIN WHERE email='$email' AND password='$password';");
		$row=$result->fetch_assoc();
		if($row == 0)
		{
			echo '<script>alert("you are not an admin\nyou will be redirected to registration page")
				  window.location.assign("home.php");
				  </script>'; 
		}
		else
			header('Location:view_details.php');
	}
?>
