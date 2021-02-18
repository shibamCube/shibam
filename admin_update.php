<?php
	session_start();
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
	if($mysqli->connect_error)
	{
		echo("<br/>connection failed<br/>");
	}
	else
	{
		$fName=$lName=$add="";
		$em=$_SESSION['email'];
		if($_POST['submit'])
		{
			$fName=$_POST['firstName'];
			$fName=filter_var($fName, FILTER_SANITIZE_STRING);
			$lName=$_POST['lastName'];
			$lName=filter_var($lName, FILTER_SANITIZE_STRING);
			$add=$_POST['address'];
			$result=$mysqli->query("UPDATE FORM_DETAILS SET firstName='$fName', lastName='$lName', Address='$add' WHERE email ='$em';");
			if($result!=NULL)
				echo("<script>alert('updated');window.location.assign('view_details.php');</script>");
			else
				echo("<script>alert('error occured. data not updated');window.location.assign('view_details.php');</script>");
		}
	}
?>
