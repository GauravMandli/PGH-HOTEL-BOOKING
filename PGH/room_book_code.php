<?php
/*
session_start();

$checkout = $_POST['checkout'];
$checkin = $_POST['checkin'];
$hotelId = $_POST['hotelId'];
$roomId = $_POST['roomId'];
$bookDate = date("Y-m-d");
$documentImage ="-";

$userId = $_SESSION['user']['userId'];

$q= "insert into bookings(bookDate,checkinDate,checkOutDate,documentImage,userId,roomId,hotelId) 
     values('$bookDate','$checkin','$checkout','$documentImage','$userId','$roomId','$hotelId')";

print $q;

include("connection.php");
mysqli_query($con,$q);

header("Location:thanks.php");
*/


session_start();

$checkout = $_POST['checkout'];
$checkin = $_POST['checkin'];
$hotelId = $_POST['hotelId'];
$roomId = $_POST['roomId'];
$bookDate = date("Y-m-d");
// $documentImage ="-";

$userId = $_SESSION['user']['userId'];

$q= "insert into bookings(bookDate,checkinDate,checkOutDate,userId,roomId,hotelId) 
     values('$bookDate','$checkin','$checkout','$userId','$roomId','$hotelId')";

print $q;

include("connection.php");
mysqli_query($con,$q);

header("Location:thanks.php?bookId=".mysqli_insert_id($con));



?>

