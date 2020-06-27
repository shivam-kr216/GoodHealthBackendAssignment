<?php
session_start();
if(isset($_SESSION['mail'])){
	echo "<center><h1>WELCOME</h1></center>";
	echo "<h1>Email: ".$_SESSION['mail']."</h1>";
	echo "<h1>Username: ".$_SESSION['uname']."</h1>";
}	
else{
	echo "<script>
      alert('Unauthorized access');
      window.location.href='index.php';
      </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href='logout.php'><button>Logout</button></a>
</body>
</html>