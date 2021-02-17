<?php
session_start();
$mysqli = new mysqli("localhost", "root", "12345678", "FORM");
$fName=$lName=$add="";
$em=$_SESSION['spider'];
if($_POST['submit'])
{
$fName=$_POST['firstName'];
$lName=$_POST['lastName'];
$add=$_POST['address'];
echo($em);
$result=$mysqli->query("UPDATE FORM_DETAILS SET firstName='$fName', lastName='$lName', Address='$add' WHERE email ='$em';");
}
echo("<script>alert('updated');window.location.assign('view_details.php');</script>");
?>

