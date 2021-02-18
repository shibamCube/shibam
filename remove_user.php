<?php
	$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
	if($mysqli->connect_error)
	{
		echo("<br/>connection failed<br/>");
	}
	else
	{
		$em=$_GET['em'];
		$result=$mysqli->query("DELETE FROM FORM_DETAILS WHERE email = '$em';");
		if($result!=NULL)
			echo("<script>alert('data deleted');window.location.assign('view_details.php');</script>");
		else
			echo("<script>alert('error occured. data not deleted');window.location.assign('view_details.php');</script>");

	}
?>
