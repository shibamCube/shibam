
<html>
	<head>
	<link rel="stylesheet" href="style.css">
		<h1 id="view_user">welcome to user details page</h1>
	</head>
	<body>
	</body>
</html>
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
		 $result = $mysqli->query("SELECT * FROM FORM_DETAILS WHERE email='$email';");
		 $row=$result->fetch_assoc();
		 if($row>0)
		 {
			 $_SESSION['email']=$row['email'];
			 $_SESSION['firstName']=$row['firstName'];
			 $_SESSION['lastName']=$row['lastName'];
			 $_SESSION['address']=$row['Address'];
			 $_SESSION['password']=$row['password'];
		 }
	}
?>
<html>
	<head>
	</head>
	<body>
		<table class="view_user2">
			<tr id="tr1"><th>name</th><th>address</th><th>email</th><th>edit</th></tr>
			<tr id="tr2"><td><?php echo($row["firstName"]." ".$row["lastName"])?></td><td><?php echo($row["Address"])?></td><td><?php echo($row["email"])?></td><td><form action='edit_self.php' 				   method='post'><input type='submit' value='edit'></td></tr>
		</table>
	<a id="view_user1" href="home.php">logout</a>
	</body>
</html>
