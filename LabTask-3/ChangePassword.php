<!DOCTYPE html>
<html>
<head>
<title>Password Change</title>

</head>
<body>
<h3 align="center">CHANGE PASSWORD</h3>
<div><?php if(isset($message)) { echo $message; } ?></div>
<form method="post" action="" align="center">
Current Password:<br>
<input type="password" name="currentPassword"><span id="currentPassword" class="required"></span>
<br>
New Password:<br>
<input type="password" name="newPassword"><span id="newPassword" class="required"></span>
<br>
Confirm Password:<br>
<input type="password" name="confirmPassword"><span id="confirmPassword" class="required"></span>
<br><br>
<input type="submit">
</form>

<?php
if(isset($_POST['login_user'])){
	
	$currentpsw = $_POST ['currentPassword'];
	$newpsw = $_POST ['newPassword'];
	$confirmpsw = $_POST ['confirmPassword'];

  if($newpsw = $confirmpsw){

  	echo "New Password should not be same as the Current Password";
  }
  if($newpsw != $confirmpsw){

  	echo "New Password must match with the Confirmed Password";
}
}