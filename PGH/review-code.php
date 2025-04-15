<?php
include("connection.php");

$hotelId =$_POST['hotelId'];
$rate =  $_POST['rate'];
$revDate =  $_POST['revDate'];
$message =  $_POST['message'];
$q="insert into reviews(hotelId,rate,revDate,message)values('$hotelId','$rate','$revDate','$message')";
mysqli_query($con,$q);
header("location:review.php");

?>