<?php
	require 'db.php';
	session_start();
	
	if(isset($_POST['submit'])){
		$mail=$_POST['mail'];
		$password=$_POST['password'];
		$password=md5($password);
		$query="select * from store_data where email='$mail' and password='$password' LIMIT 1";
		$fetch = mysqli_query($conn, $query);
		$row = mysqli_num_rows($fetch);

		if($row>0){
			
			$data=mysqli_fetch_assoc($fetch); 
			$_SESSION['mail']=$mail;
			$_SESSION['uname']=$data['username'];
			header("location:verify_otp.php");
		}
		else{
			echo "<script>
			alert('Check your email/password...');
			</script>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<h2>Login</h2>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <div class="container">
    <label for="mail"><b>Email</b></label>
    <input type="email" placeholder="Enter email" name="mail" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter password" name="password" minlength=6 required>
        
    <button type="submit" name="submit">Login</button>
    <button type="submit" onclick="location.href = 'sign_up.php';" name="create" 
    style="background-color: #FF5733;">Create Account</button>
  </div>

</form>


</body>
</html>

