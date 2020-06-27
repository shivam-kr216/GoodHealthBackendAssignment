<?php
require 'db.php';
require 'mail_function.php';

	session_start();
	if(isset($_SESSION['mail'])){
		
		$mail=$_SESSION['mail'];
		$uname=$_SESSION['uname'];

		//Important condition so that otp should send only once
		if(!isset($_POST['verify'])){
			$otp = rand(100000,999999);
			//function included above in mail_function.php
			otp_sender();
		}	

		if($result==1){
			
			$query="INSERT INTO store_otp (otp,status) values('$otp',0)";
			$run = mysqli_query($conn,$query);
			$current_id = mysqli_insert_id($conn);
		}
	}
	else{
		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>otp verification</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<h1>Enter OTP</h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="text" value="<?php echo $_SESSION['mail'];?>" disabled style="font-size: 18px;">
<input type="text" name="otp" placeholder="OTP">
<button name='verify'>Verify</button>

</form>
</body>
</html>

<?php
if(isset($_POST['verify'])){
	
		$check_otp=$_POST['otp'];
		$check="select * from store_otp where otp='$check_otp' and status=0";
		$output=mysqli_query($conn,$check);
		
		$count=mysqli_num_rows($output);
		if($count==1){
			$query1="UPDATE store_otp set status=1 where otp='$check_otp'";
			mysqli_query($conn,$query1);
			header("location:display_message.php");
		}
		else{
			echo "<script>alert('Invalid otp');</script>";
		}
	}

?>