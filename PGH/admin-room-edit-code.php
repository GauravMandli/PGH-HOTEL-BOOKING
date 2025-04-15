<?php
  $roomId=$_POST['roomId'];
  $roomNo =  $_POST['roomNo'];
  $roomType =  $_POST['roomType'];
  $roomImage = "room/".$_FILES['roomImage']['name'];
  move_uploaded_file($_FILES['roomImage']['tmp_name'],$roomImage);
  $roomRent =  $_POST['roomRent'];
  $details	 =  $_POST['details'];
  $con = mysqli_connect("localhost","root","","pghdb");

  $uq = "update rooms set roomNo='$roomNo',roomType='$roomType',roomImage='$roomImage',roomRent='$roomRent',details	='$details' where roomId='$roomId'";
  mysqli_query($con,$uq);
  print $uq;
  header("location:admin-room-view.php");


?>