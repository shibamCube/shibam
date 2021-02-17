
<?php
$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
if($mysqli->connect_error)
{
echo("<br/>not connected<br/>");
}


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
		 //header('Location:admin_login.php');
	}
	else
	header('Location:view_details.php');
?>
<html>
<head>
<style>
	body{
  background-color: lightblue;
  text-align: left;
	}
	</style>
</head>
<body>
 <a href="admin_login.php"></a>
</body>
</html>
