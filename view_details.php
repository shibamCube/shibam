
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<h1>welcome to user details page</h1>
	</head>
	<body>
		<div class="view_details">
			<?php
					session_start();
					$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
					if($mysqli->connect_error)
					{
						echo("<br/>connection failed<br/>");
					}
					else
					{
						$result = $mysqli->query("SELECT * FROM FORM_DETAILS;");
						echo "<table align='center' id='view_table'>";
						echo "<tr id='view_header'><th>name</th><th>address</th><th>email</th><th>image</th><th colspan='2' align='center'>operations</th></tr>";
						$var=1;
						while($row=$result->fetch_assoc())
						{
								$_SESSION[$var]=$row['email'];

								echo "<tr id='view_row'><td>".$row['firstName']." ".$row['lastName']." </td><td>".$row['Address']."</td><td> ".$row['email']."</td><td>".$row['image']."</td><td>".
								"<a href='edit_user.php?em=$row[email]& fm=$row[firstName]& lm=$row[lastName]& ad=$row[Address]'>update</td><td> 
								<a href='remove_user.php?em=$row[email]'>delete</td></tr>";
						}
						echo "</table>";
					}
			?>
		</div>
		<br><br><br>
		<p><div class ="fix">press <a href="home.php">here</a> to add new user </div><div class="fixed"><a href="home.php">logout</div></a></p>
	</body>
</html>
