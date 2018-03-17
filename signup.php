<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/signup.css" />
  <title>Jinjang Utara Community Page</title>
  <script src="assets/jquery3.js"></script>
  <script src="assets/scripts.js"></script>
</head>

<header>
<div class="page-width">

<a class="logo" href="index.html">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li><a href="index.php">Home</a></li>
<li class="selected"><a href="login.php">Log In</a></li>
<li><a href="newjob.php">Job</a></li>
<li><a href="news.php">News</a></li>
<li><a href="donate.php">Donate</a></li>
<li><a href="volunteer.php">Volunteer</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</header>

<body>
  <form name="frmRegistration" method="post" action="">
  	<table border="0" width="500" align="center" class="demo-table">
  		<?php if(!empty($success_message)) { ?>
  		<div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>
  		<?php } ?>
  		<?php if(!empty($error_message)) { ?>
  		<div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
  		<?php } ?>
  		<tr>
  			<td>User Name</td>
  			<td><input type="text" class="demoInputBox" name="userName" value="<?php if(isset($_POST['userName'])) echo $_POST['userName']; ?>"></td>
  		</tr>
  		<tr>
  			<td>First Name</td>
  			<td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
  		</tr>
  		<tr>
  			<td>Last Name</td>
  			<td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
  		</tr>
  		<tr>
  			<td>Password</td>
  			<td><input type="password" class="demoInputBox" name="password" value=""></td>
  		</tr>
  		<tr>
  			<td>Confirm Password</td>
  			<td><input type="password" class="demoInputBox" name="confirm_password" value=""></td>
  		</tr>
  		<tr>
  			<td>Email</td>
  			<td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
  		</tr>
  		<tr>
  			<td>Gender</td>
  			<td><input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=="Male") { ?>checked<?php  } ?>> Male
  			<input type="radio" name="gender" value="Female" <?php if(isset($_POST['gender']) && $_POST['gender']=="Female") { ?>checked<?php  } ?>> Female
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
