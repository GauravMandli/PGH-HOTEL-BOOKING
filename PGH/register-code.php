<?php
include("connection.php");

$name = $_POST['name'];
$gender=$_POST['gender'];
$birthDate=$_POST['birthDate'];
$emailId=$_POST['emailId'];
$password=$_POST['password'];
$mobileNo=$_POST['mobileNo'];

$q = "insert into users (name,gender,birthDate,emailId,password,mobileNo) values ('$name','$gender','$birthDate','$emailId','$password','$mobileNo')";
mysqli_query($con,$q);
header("location:login.php");

?>