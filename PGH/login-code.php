<?php

session_start();

include("connection.php");

    $emailId = $_POST['emailId'];
    $password = $_POST['password'];
    $fetchsql="select * from users  where emailId = '$emailId' and password='$password'";
    $result=mysqli_query($con,$fetchsql);
    
  if($row=mysqli_fetch_array($result))
  {
        $_SESSION['user'] = $row;
        echo "<script> window.location.href='index.php' </script>";
        // header("location:index.php");
   
  }
  else{
      echo "<script> alert(' Invalid email Id or password') </script>";
      echo "<script> window.location.href='login.php' </script>";
        
    }
  
  
  ?>

