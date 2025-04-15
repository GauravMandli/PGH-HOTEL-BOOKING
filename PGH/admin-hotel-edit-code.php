<?php
include("connection.php");
$hotelId=$_POST['hotelId'];
$hotelName = $_POST['hotelName'];
$address = $_POST['address'];
$city = $_POST['city'];
$contactNo = $_POST['contactNo'];
$map = $_POST['map'];
$logo = "logo/".$_FILES['logo']['name'];
move_uploaded_file($_FILES['logo']['tmp_name'],$logo);

$logo = "hotel".$_FILES['hotelImage']['name'];
move_uploaded_file($_FILES['hotelImage']['tmp_name'],$logo);
$about = $_POST['about'];
$facility = $_POST['facility'];

$q="update hotels set hotelName='$hotelName',address='$address',city='$city',contactNo='$contactNo',map='$map',logo='$logo',hotelImage='$hotelImage',about='$about',facility='$facility' where hotelId='$hotelId'";
mysqli_query($con,$q);
header("location:admin-hotel-view.php")

?>