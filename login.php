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
    echo 'alert("Wrong Username or Password!");';
    echo 'window.location.href="Login.php";';
    echo '</script>';;
    }
 }
 else { echo'Enter both username and password'; }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Jinjang Utara Community Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/login.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/style-ie.css"/>
<![endif]-->

<!-- Favicons
================================================== -->
<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- JS
================================================== -->
<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/jquery.custom.js"></script>
<script type="text/javascript">
$(document).ready(function () {

    $("#btn-blog-next").click(function () {
      $('#blogCarousel').carousel('next')
    });
     $("#btn-blog-prev").click(function () {
      $('#blogCarousel').carousel('prev')
    });

     $("#btn-client-next").click(function () {
      $('#clientCarousel').carousel('next')
    });
     $("#btn-client-prev").click(function () {
      $('#clientCarousel').carousel('prev')
    });

});

 $(window).load(function(){

    $('.flexslider').flexslider({
        animation: "slide",
        slideshow: true,
        start: function(slider){
          $('body').removeClass('loading');
        }
    });
});

</script>

</head>

<body class="home">
<header>
<div class="page-width">

<a class="logo" href="index.php">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li ><a href="index.php">Home</a></li>
<li><a href="signup.php">Sign Up</a></li>
<li><a href="login.php">Log In</a></li>
<li class="selected"><a href="contact.php">Contact us</a></li>
</ul>
</header>
<br><br>

      <div class="login-page">
        <div class="form">
          <h2><center>Login</center></h2>
          <form name="loginform" action="login.php" class="login-form" method="POST">
            <center><input type="text" name="username" id="username" placeholder="username" required><center><br>
            <center><input type="password" name="password" id="password" placeholder="password" required><center>
            <input type="submit" name="login-user" value="Login" class="btnRegister">
            <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
          </form>
        </div>
      </div>





    <!-- Footer Area
        ================================================== -->
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


    <!-- Scroll to Top -->
    <div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>

</body>
</html>
