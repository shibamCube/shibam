<?php
session_start();
$email=$_GET['em'];
$_SESSION['spider']=$_GET['em'];
$firstName=$_GET['fm'];
$lastName=$_GET['lm'];
$address=$_GET['ad'];
?>
<html>
	<head>
		<style>
			<style>

	.sh1{
	 border: 5px outset red;
  background-color: lightblue;
  text-align: left;
	}
	h1
	{
	color:blue;
	}
	p
	{
		font-weight: bold;
	}
	body
	{
		background-color: lightblue;
	}
	label
	{
		font-weight: bold;
	}
</style>
		</style>
	</head>
	<body>
	<form  action="admin_update.php" method="POST" >
	<div class="sh1">
	<fieldset>
	<label>first_name<label><br> <input type="text" value="<?php echo($firstName)?>" placeholder="shibam" name="firstName" required><br><br>
	
		
	
	<label>last_name<label><br> <input type="text" value="<?php echo($lastName)?>" placeholder="chandra" name="lastName" required><br><br>
	<label>address<label><br><input type="text"value="<?php echo($address)?>" placeholder="address" name="address" required><br><br>
	
	<input type="submit" name="submit" value="update">
<input type="reset"value="reset">
<br><br><br>
	</fieldset>
	</div>
	</form>
	</body>
</html>





















