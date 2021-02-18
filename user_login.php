<?php
?>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<h1 id="user_login">welcome to user login page</h1>
	</head>

	<body>
		<form action="user_home.php" method="post">
				<div class="form">
						<br>
						<label>email</label><br>
						<input type="email" name="email" required><br><br>
						<label>password</label><br>
						<input type="password" name="password" required><br><br>
						<input type="submit" value="save">
				</div>
		</form>
	</body>
</html>
