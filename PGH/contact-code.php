<?php
include("connection.php");

$name =  $_POST['name'];
$email =  $_POST['email'];
$mobno =  $_POST['mobno'];
$msg =  $_POST['msg'];
$q="insert into contacts(name,email,mobno,msg)values('$name','$email','$mobno','$msg')";
mysqli_query($con,$q);
header("location:contact.php");

?>