<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
 
 <?php
 $usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h3 align="center">Log In</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
 
  Username: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  <button type="submit" name="login_user"> Log In </button>
  <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>

  <p>Forgot the password?<a href="ForgotPassword.php"><b>Forgot Password</b></a></p>
</form>

<?php
if(isset($_POST['login_user']))
{
  $uname = $_POST['username'];
  $psw = $_POST['password'];

  if(!preg_match ("/^[a-zA-Z0-9_]+([a-zA-Z0-9_]*[.-]?[a-zA-Z0-9_]*)*[a-zA-Z0-9_]+$/", $uname))
  {
    echo "User Name must contain alpha numeric characters, period, dash or
underscore only";
  }

if(strlen($psw)<8)
  {
    echo". Password must not be less than eight (8) characters";
  }
  if(!preg_match("/\W/", $psw)){
   echo"Password must contain at least one of the special characters (@, #, $, %)";
}
 
 }




