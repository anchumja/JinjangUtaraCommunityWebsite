<?php
include("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

 $username=$_POST['username'];
 $password=$_POST['password'];

 $usernameError="";
 $passwordError="";


 if($username!=''&&$password!=''){
   $findResident = "SELECT * FROM resident WHERE username='$username' and password='$password'";
   $findResidentUsrnamePass = mysqli_query($con, $findResident);
   $findnonResident = "SELECT * FROM nonresident WHERE username='$username' and password='$password'";
   $findnonResidentUsrnamePass = mysqli_query($con, $findnonResident);

   if (mysqli_num_rows($findResidentUsrnamePass) > 0){
    $resource=mysqli_fetch_array($findResidentUsrnamePass);
    $_SESSION['username']=$username;
    $_SESSION['fullname']=$resource['fullname'];
    $_SESSION['email']=$resource['email'];
    $_SESSION['password']=$resource['password'];
    $_SESSION['role']='resident';
    header('location: index_resident.php');
    }
    else if (mysqli_num_rows($findnonResidentUsrnamePass) > 0){
    $resource=mysqli_fetch_array($findnonResidentUsrnamePass);
    $_SESSION['username']=$username;
    $_SESSION['fullname']=$resource['fullname'];
    $_SESSION['email']=$resource['email'];
    $_SESSION['password']=$resource['password'];
    $_SESSION['role']='nonresident';
    header('location: index_client.php');
    }
    else {
    echo '<script language="javascript">';
    echo 'alert("Wrong Username or Password");';
    echo 'window.location.href="Login.php";';
    echo '</script>';;
    }
 }
 else { echo'Enter both username and password'; }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/login.css" />
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
<li><a href="signup.php">Sign Up</a></li>
<li class="selected"><a href="login.php">Log In</a></li>
<li><a href="donate.php">Donate</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</header>
<br>
<div class="login-page">
  <div class="form">
    <form name="loginform" action="login.php" class="login-form" method="POST">
      <input type="text" name="username" id="username" placeholder="username" required>
      <input type="password" name="password" id="password" placeholder="password" required>
      <input type="submit" name="login-user" value="Login" class="btnRegister">
      <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
    </form>
  </div>
</div>


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
