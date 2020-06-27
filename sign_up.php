<?php
  require 'db.php';
  if(isset($_POST['submit'])){

    $username=$_POST['uname'];
    $mail=$_POST['email'];

    $password=$_POST['password'];
    $password=md5($password);

    $mobile=$_POST['mobile'];
    
    $query="select * from store_data where username='$username' or email='$mail'";
    $fetch = mysqli_query($conn, $query);
    $row = mysqli_num_rows($fetch);

    if($row>0){
      echo "<script>
      alert('User is already present. Either create a new account or login with password');
      </script>";
    }
    else{
      $query1 = "INSERT into store_data(username,email,password,mobile_number) 
      values ('$username','$mail','$password','$mobile')";
      $sql = mysqli_query($conn, $query1);
      echo "<script>
      alert('Successfully registered');
      window.location.href='index.php';
      </script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box
}

input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}



.signupbtn {
  float: left;
  width: 100%;
}

.container {
  padding: 16px;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="container">
    <h1>Registration</h1>
    <hr>
        <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname">

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" minlength=6 required>

    <label for="mobile"><b>Mobile Number</b></label>
    <input type="text" placeholder="Mobile Number" name="mobile" minlength=10 maxlength=10 required>
    

    <div class="clearfix">
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>

