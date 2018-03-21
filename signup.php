<?php
 include ("connection.php");
 $usernameError="Enter your username";
 $passwordError="Enter your Password";
 $emailError="Enter your Email";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $confirmPassword = $_POST['confirm_password'];
    $username = $_POST['username'];
    $fullname = $_POST["fullname"];
    $password = $_POST['password'];
    $userEmail = $_POST['userEmail'];
    $gender = $_POST['gender'];
    $role = $_POST['role'];

    $emailError="";
    $passwordError="";
    $roleError = "";
    $genderError="";
    $usernameError="";


    $findResident = "SELECT `username` FROM `resident` WHERE `username` = '".$_POST['username']."'";
    $findResidentUsername = mysqli_query($con, $findResident);
    $findnonresident = "SELECT `username` FROM `nonresident` WHERE `username` = '".$_POST['username']."'";
    $findnonresidentUsername = mysqli_query($con, $findnonresident);
    if(mysqli_num_rows($findResidentUsername) > 0 || mysqli_num_rows($findnonresidentUsername) > 0){
      $usernameError = "Someone have used this username already";
    }
    else {
    $username = $_POST['username'];
    }

    $findResident = "SELECT `email` FROM `resident` WHERE `email` = '".$_POST['email']."'";
    $findResidentEmail = mysqli_query($con, $findResident);
    $findnonresident = "SELECT `email` FROM `nonresident` WHERE `email` = '".$_POST['email']."'";
    $findnonresidentEmail = mysqli_query($con, $findnonresident);
    if(mysqli_num_rows($findResidentEmail) > 0 || mysqli_num_rows($findnonresidentEmail) > 0){
      $emailError = "Someone have used this email already";
    }
    else {
    $email = $_POST['email'];
    }

    if($confirmPassword != $password){
      $passwordError = "Both password must be same";
    }

    if($gender == ""){
      $genderError = "Please select a gender";
    }

    if($role == ""){
      $genderError = "Please select a role";
    }

    if($emailError == "" && $passwordError == "" &&  $roleError == ""  && $genderError == "" && $usernameError == ""){
      if($role == "resident"){
        $signUp = "INSERT INTO resident (`username`, `fullname`, `email`, `password`, `gender`, `role` ) VALUES ('$username', '$fullname', '$email', '$password', '$gender', '$role')";
      } else if ($role == "nonresident"){
        $signUp = "INSERT INTO nonresident (`username`, `fullname`, `email`, `password`, `gender`, `role`) VALUES ('$username', '$fullname', '$email', '$password', '$gender', '$role')";
      }
    mysqli_query($con, $signUp);
    echo '<script language="javascript">';
    echo 'alert("Signed Up Successfully!");';
    echo 'window.location.href="Login.php";';
    echo '</script>';
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/signup.css" />
  <title>Jinjang Utara Community Page</title>
  <link rel="stylesheet" href="assets/style.css" />
  <script src="assets/jquery3.js"></script>
  <script src="assets/scripts.js"></script>
</head>



<body>
<header>
<div class="page-width">

<a class="logo" href="index.php">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li><a href="index.php">Home</a></li>
<li class="selected"><a href="signup.php">Sign Up</a></li>
<li><a href="login.php">Log In</a></li>
<li><a href="newjob.php">Job</a></li>
<li><a href="donate.php">Donate</a></li>
<li><a href="volunteer.php">Volunteer</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</header>
<br>
<br>
<br>
<br>
<br>
<br><br>
  <form name="frmRegistration" method="post" action="signup.php">
    <h2><center>Sign Up</center></h2>
  	<table border="0" width="500" align="center" class="demo-table">
  		<?php if(!empty($success_message)) { ?>
  		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
  		<?php } ?>
  		<?php if(!empty($error_message)) { ?>
  		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
  		<?php } ?>
      <tr>
  			<td>User Name</td>
  			<td><input type="text" class="demoInputBox" name="username" id="username" placeholder="<?php if(isset($usernameError)){echo $usernameError;} ?>" required></td>
  		</tr>
  		<tr>
  			<td>Full Name</td>
  			<td><input type="text" class="demoInputBox" name="fullname" id="fullname" placeholder="Enter your fullname" required></td>
  		</tr>
  		<tr>
  			<td>Password</td>
  			<td><input type="password" class="demoInputBox" name="password" id="password" placeholder="<?php if(isset($passwordError)){echo $passwordError;} ?>" required></td>
  		</tr>
  		<tr>
  			<td>Confirm Password</td>
  			<td><input type="password" class="demoInputBox" name="confirm_password" id="confirm_password" placeholder="Re-enter your password" required></td>
  		</tr>
  		<tr>
  			<td>Email</td>
  			<td><input type="text" class="demoInputBox" name="email" id="email" placeholder="<?php if(isset($emailError)){echo $emailError;} ?>" required></td>
  		</tr>
  		<tr>
  			<td>Gender</td>
  			<td><input type="radio" name="gender" id="gender" value="Male"> Male
  			<input type="radio" name="gender" id="gender" value="Female"> Female
  			</td>
  		</tr>
      <tr>
        <td>Role</td>
        <td><input type="radio" name="role" id="role" value="resident"> Resident
        <input type="radio" name="role" id="role" value="nonresident"> Non Resident
        </td>
      </tr>
  		<tr>
  			<td colspan=2>
  			<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
  		</tr>
  	</table>
  </form>






<footer class="footer-distributed">

  <div class="footer-left">

    <h3>Jinjang Utara Community Website</span></h3>

    <p class="footer-links">
      <a href="#">Blog</a>
      ·
      <a href="#">About</a>
      ·
      <a href="#">FAQ</a>
      ·
      <a href="#">Contact</a>
    </p>

    <p class="footer-company-name">AGN &copy; 2015</p>
  </div>

  <div class="footer-center">

    <div>
      <i class="fa fa-map-marker"></i>
      <p><span>Jinjang Utara</span> 52000, Kuala Lumpur</p>
    </div>

    <div>
      <i class="fa fa-phone"></i>
      <p>03-2716 2000</p>
    </div>

    <div>
      <i class="fa fa-envelope"></i>
      <p><a href="mailto:support@jucw.com">support@jucw.com</a></p>
    </div>

  </div>

  <div class="footer-right">

    <p class="footer-company-about">
      <span>About the company</span>
       AGN strives to better the lives of the people within Jinjang Utara Community
    </p>

    <div class="footer-icons">

      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-linkedin"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>

    </div>

  </div>

</footer>

</body>
</html>
