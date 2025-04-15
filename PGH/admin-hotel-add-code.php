<?php
include ('connection.php');

$hotelName = $_POST['hotelName'];
$address = $_POST['address'];
$city = $_POST['city'];
$contactNo = $_POST['contactNo'];
$map = $_POST['map'];
$logo = "logo/".$_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);

$hotelImage = "hotel/".$_FILES['hotelImage']['name'];
move_uploaded_file($_FILES['hotelImage']['tmp_name'],$hotelImage);
$about = $_POST['about'];
$facility = $_POST['facility'];

$q = "insert into hotels (hotelName,address,city,contactNo,map,logo,hotelImage,about,facility) values ('$hotelName','$address','$city','$contactNo','$map','$logo','$hotelImage','$about','$facility')";
mysqli_query($con,$q);
// print $q;
header("location:admin-hotel-view.php");


?>