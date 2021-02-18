
 <html>
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form action="updated(2).php" method="post">
				<div class="sh3">
					<fieldset>
						<h1 id="edit_self">update your details</h1>
						<?php
								session_start();
								$email=$_SESSION['email'];
								echo("your email id is ".$_SESSION['email']);
						?>
						<br><br><br>
						<label>first_name</label><br>
						<input type="text" placeholder="shibam" name="firstName" ><br><br>
						<label>last_name</label><br>
						<input type="text" placeholder="chandra" name="lastName" ><br><br>
							<label>address</label><br>
						<input type="text" placeholder="address" name="address" ><br><br>
						<br><br><br>
						<input type="submit" name="submit" value="save">
					</fieldset>
				</div>
			</form>
	</body>
</html>
