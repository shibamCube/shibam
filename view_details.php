
<html>
<head>
<style>
p
{
text-align: center;
font-weight:bold;
}
	body{
  background-color: lightblue;
  text-align: left;
	}
	h1
	{
		text-align: center;
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
div.fixed {
  position: fixed;
  bottom: 450px;
  right: 470px;
   font-weight:bold;
}
div.fix
{
position: fixed;
  bottom: 450px;
  left: 470px;
  font-weight:bold;
}


</style>
<h1>welcome to user details page</h1>
</head>
<body>
<?php
session_start();
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
  $result = $mysqli->query("SELECT * FROM FORM_DETAILS;");
  echo "<table align='center'>";
  echo "<tr><th>name</th><th>address</th><th>email</th><th>image</th><th colspan='2' align='center'>operations</th></tr>";
  $var=1;
  while($row=$result->fetch_assoc())
  {
  	$_SESSION[$var]=$row['email'];
  	//echo($_SESSION[$var]);

  	echo "<tr><td>".$row['firstName']." ".$row['lastName']." </td><td>".$row['Address']."</td><td> ".$row['email']."</td><td>".$row  			['image']."</td><td>".
  	"<a href='edit_user.php?em=$row[email]& fm=$row[firstName]& lm=$row[lastName]& ad=$row[Address]'>update</td><td> 
  	<a href='remove_user.php?em=$row[email]'onclick='return checkdelete()'>delete</td></tr>";
  }
  echo "</table>";
  
  
  
  
?>

<br><br><br>
<p><div class ="fix">press <a href="home.php">here</a> to add new user </div><div class="fixed"><a href="home.php">logout</div></a></p>
</body>
</html>
