
<?php
session_start();

	$file = $_FILES['image']['name']; 
    $tempname = $_FILES['image']['tmp_name'];  
    $type=$_FILES['image']['type'];   
	$error=$_FILES['image']['error'];   
	$ext=explode('.',$file);  
        // Valid file extensions
  	$extension = strtolower(end($ext));
  	$extensions_arr=array('jpg','jpeg','png');

  // Check extension
 	if(!in_array($extension,$extensions_arr) )
	  	{
	  	echo "<script> alert('invalid image');window.location.assign('home.php');</script>";
		}
        
	else
	{
		$destination='image/'.$file;
		move_uploaded_file($tempname,$destination);
		$pass=$_POST["password"];
		$pass_con=$_POST["confirm_password"];
		//check if the password and confirm password match or not
		if (strcmp($pass,$pass_con)!=0)
		{
			echo "<script> alert('password did not match');window.location.assign('home.php');</script>";
		}
		else
		{
			$mail = $_POST["email"];
			$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
			if($mysqli->connect_error)
					{
						echo("<br/>connection failed<br/>");
					}
			else
			{
				$res = $mysqli->query("SELECT * FROM FORM_DETAILS WHERE email='$mail';");
				// move_uploaded_file($tempimage, $folder.$image);
				$row=$res->fetch_assoc();
				if($row>0)
				{
					echo "<script> alert('email already registered'); window.location.assign('home.php');</script>";
				}
				//if user submit the data then data will be stored after all the varification
				if (isset($_POST["submit"])) 
				{
					  $firstName =$_POST["firstName"];
					  $firstName=filter_var($firstName, FILTER_SANITIZE_STRING);
					  $lastName=$_POST["lastName"];
					  $lastName=filter_var($lastName, FILTER_SANITIZE_STRING);
					  $address=$_POST["address"];
					  $email = $_POST["email"];
					  $email=filter_var($email, FILTER_SANITIZE_EMAIL);
					  $password=$_POST["password"];
					  $_SESSION["email"]=$email;
					  $_SESSION["password"]=$password;
					  $result = $mysqli->query("INSERT INTO FORM_DETAILS (firstName, lastName, Address, email, password, image)
					  VALUES ('$firstName','$lastName','$address','$email','$password','$image')");
					  if($result==true)
					  {
					  	echo "<script> alert('data stored sucessfully'); window.location.assign('view_user.php');</script>";
				 	  }
			   	 }
		   	 }
		 }
	}
?>
