<?php
	session_start();
	$_SESSION['email']=$_GET['em'];
	$firstName=$_GET['fm'];
	$lastName=$_GET['lm'];
	$address=$_GET['ad'];
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<h1 id="edit_user">update here</h1><br><br><br>
	</head>
	<body>
		<form  action="admin_update.php" method="POST" >
			<div class="sh2">
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




















