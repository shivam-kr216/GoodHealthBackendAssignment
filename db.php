<?php
	$conn=mysqli_connect("localhost", "root", "", "otp_verification");
  if($conn === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>