<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "project");
    if(issset($_POST["regi"])){
	session_start();
	$email = mysql_real_escape_string($_POST["email"]);
	$phone = mysql_real_escape_string($_POST["phone"]);
	$user = mysql_real_escape_string($_POST["user"]);
	$pass = mysql_real_escape_string($_POST["pass"]);
	$sql = "INSERT INTO signup(Email, Phone, Username, Password) VALUES('$email', '$phone', '$user', '$pass')"; 	
	mysqli_query($db, $sql); 
	$_SESSION['message'] = "Registered" ;
	
?>
<!DOCTYPE html>
<html lang="en-us">
<head>
<meta charset="utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up </title>
<link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body>
<div class="login-box">
  <h1>Sign Up</h1>
  <form action="signup.php" method="post" autocomplete="off">
  
  <div class="textbox">
    <i class="fas fa-envelope"></i>
    <input type="email" placeholder="Enter Email" id="email" name="email" required />
  </div>
  
  <div class="textbox">
    <i class="	fa fa-phone-square" ></i>
    <input type="text" placeholder="Enter phone number" id="phone" name="phone" required />
  </div>
  
  <div class="textbox">
    <i class="fas fa-user"></i>
    <input type="text" placeholder="Set Username" id="user" name="user" required />
  </div>
  
  <div class="textbox">
    <i class="fas fa-lock"></i>
    <input type="password" placeholder="Set Password" id="pass" name="pass" required />
  </div>
  
  <div>
   <input type="submit" class="btn" name="regi" value="Register">
  </div>
  </form>
</div>
</body>
</html>