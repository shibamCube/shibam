<?php


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
}
</style>
</head>
<body>
<form action="updated(2).php" method="post">
	<div class="sh1">
	<fieldset>
	<p>update your details</p>
	<?php
	session_start();
	$email=$_SESSION['email'];
		echo("your email is ".$_SESSION['email']);
		?>
		<br><br><br>
	 <input type="text" placeholder="shibam" name="firstName" >first_name<br><br>
	 <input type="text" placeholder="chandra" name="lastName" >last_name<br><br>
	<input type="text" placeholder="address" name="address" >address<br><br>
	
	
	<br><br><br>
	<input type="submit" name="submit" value="save">
</body>
</html>

