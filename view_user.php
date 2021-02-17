
<html>
<head>
<style>
	body{
  background-color: lightblue;
  text-align: left;
	}
	h1
	{
		text-align: center;
	}
</style>
<h1>welcome to user details page</h1>
</head>
<body>
</body>
</html>
<?php
session_start();
	$email=$_SESSION['email'];
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
  $result = $mysqli->query("SELECT * FROM FORM_DETAILS WHERE email='$email';");
 $row=$result->fetch_assoc();
 $_SESSION['email']=$row['email'];
 $_SESSION['firstName']=$row['firstName'];
 $_SESSION['lastName']=$row['lastName'];
 $_SESSION['address']=$row['Address'];
 $_SESSION['password']=$row['password'];
 ?>
 <html>
<head>
<style>
table
{
	align:center;
}
table, th, td {
  border: 1px solid black;
  width:50%;
  hover {background-color: #f5f5f5;}
}
td,th
{
height:50 px;
text-align: left;
background-color: yellow;
  color: blue;
}
a
{
	position: fixed;
  bottom: 700px;
  right: 470px;
   font-weight:bold;
}
</style>
</head>
<body>
<table align="center">
	<tr><th>name</th><th>address</th><th>email</th></tr>
	<tr><td><?php echo($row["firstName"]." ".$row["lastName"])?></td><td><?php echo($row["Address"])?></td><td><?php echo($row["email"])?></td><td><form action='edit_self.php' method='post'><input type='submit' value='edit'></td></tr>
</table>
<a href="home.php">logout</a>
</body>
</html>
