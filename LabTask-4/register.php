<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>
  <div class="header">
<?php include 'header.php';?>
</div>
 
 <?php
$nameErr = $emailErr = $usernameErr = $passwordErr = $confirmpasswordErr = $genderErr = $dateofbirthErr =
$bloodgroup = "";
$name = $email =  $username= $password= $confirmpassword = $gender = $dateofbirth = $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
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
  if (empty($_POST["confirmpassword"])) {
    $confirmpasswordErr = "Confirm password is required";
  } else {
    $confirmpassword = test_input($_POST["confirmpassword"]);
  }
    
  if (empty($_POST["dateofbirth"])) {
    $dateofbirth = "";
  } else {
    $dateofbirth = test_input($_POST["dateofbirth"]);
  }

  if (empty($_POST["bloodgroup"])) {
    $bloodgroup = "";
  } else {
    $bloodgroup = test_input($_POST["bloodgroup"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2>Registration</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="error">* <?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">* <?php echo $passwordErr;?></span>
  <br><br>
  Confirm Password: <input type="password" name="confirmpassword">
  <span class="error">* <?php echo $confirmpasswordErr;?></span>
  <br><br>
  Date of Birth: <input type="date" name="dateofbirth">
  <span class="error"><?php echo $dateofbirthErr;?></span>
  <br><br>
  Blood Group: 
  <label for="bloodgroup">Choose a blood group:</label>
  <select name="bloodgroup" id="bloodgroup">
    <option value="A+">A+</option>
    <option value="A-">A-</option> 
    <option value="B+">B+</option> 
    <option value="B-">B-</option> 
    <option value="O+">O+</option> 
    <option value="O-">O-</option>
    </select>  
  <br><br>
  Gender: <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <button type="submit" name="reg_user"> Submit </button>

  <p>Already a user?<a href="login.php"><b>Log In</b></a></p>

</form>
<?php include 'footer.php';?>
</body>
</html>