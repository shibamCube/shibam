<?php
$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
$em=$_GET['em'];

$result=$mysqli->query("DELETE FROM FORM_DETAILS WHERE email = '$em';");
echo("<script>alert('data deleted');window.location.assign('view_details.php');</script>");
?>
