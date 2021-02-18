<html>
<head>
	 <link rel="stylesheet" href="style.css">
	<title>first professional project</title>
	<h1>registration page</h1>
</head>

<body>
	<form action="welcome.php" method="post" enctype="multipart/form-data">
		<div class="sh1">
			<fieldset>
				<label>first_name<label><br> 
					<input type="text" placeholder="shibam" name="firstName" required>
	
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		
				<label>image<label> 
					<input type="file" id="inputImage" placeholder="photo" value="choose image" name="image" required><br><br>

				<label>last_name<label><br> 
					<input type="text" placeholder="chandra" name="lastName" required><br><br>
				<label>address<label><br>
					<input type="text" placeholder="address" name="address" required><br><br>
				 <label>email<label><br>
				 	<input type="email" placeholder="shibam@gmail.com" name="email" required><br><br>
				<label>password<label><br>
					<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 								or more characters" required><br><br>
				<label>confirm password<label><br>
					<input type="password" name="confirm_password" required><br><br><br>
				<label>age</label>
					<br>below 18	<input type="radio" name="shibam"required>
					<br>18-30	<input type="radio" name="shibam">
					<br>30-40	<input type="radio" name="shibam">
					<br>40 above	<input type="radio" name="shibam"><br><br>
				<label>machine</label>
					<br>desktop<input type="checkbox" name=chandra>
					<br>laptop<input type="checkbox" name=chandra>
					<br>mobile<input type="checkbox" name=chandra>
				<br><br><br>
				<input type="submit" name="submit" value="save">
				<input type="reset"value="reset">
				<br><br><br>
				<a href="forget_password.php">forgot password</a>
			</fieldset>
		</div>
	</form>
	<p > <a href="admin_login.php">login</a> as admin
	
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
		
		<a href="user_login.php">login</a> as a user
	</p>
	
</body>
</html>
