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
    $email = $_POST['email'];
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
    echo 'alert("Thank for signing up");';
    echo 'window.location.href="Login.php";';
    echo '</script>';
    }

}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Jinjang Utara Community Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/signup.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">
<link rel="stylesheet" href="button.css">

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
<li><a href="index.php">Home</a></li>
<li><a href="login.php">Log In</a></li>
<li class="selected"><a href="signup.php">Sign Up</a></li>

</ul>
</header>
<br><br>
<br><br>
<br>
<br><br>

<div class="login-page">
<div class="form">
  <h2><center>Sign Up</center></h2>
<form name="loginform" method="post" action="signup.php">
  <table>
      <tr>
        <td>User Name</td>
        <td><input type="text" class="demoInputBox" name="username" id="username" placeholder="<?php if(isset($usernameError)){echo $usernameError;} ?>" required></td>
      </tr>
      <tr>
        <td>Full Name</td>
        <td><input type="text" class="demoInputBox" name="fullname" id="fullname" placeholder="" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input type="password" class="demoInputBox" name="password" id="password" minlength="6" placeholder="<?php if(isset($passwordError)){echo $passwordError;} ?>" required></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td><input type="password" class="demoInputBox" name="confirm_password" id="confirm_password" placeholder="" required></td>
      </tr>
      <tr>
        <td>Email</td>
        <td><input type="text" class="demoInputBox" name="email" id="email" placeholder="<?php if(isset($emailError)){echo $emailError;} ?>" required></td>
      </tr>
      <tr>
        <td>Gender: </td>
        <td><input type="radio" name="gender" id="gender" value="Male"> Male
        <input type="radio" name="gender" id="gender" value="Female"> Female
        </td>
      </tr>
      <tr>
        <td>Are you a resident of Jinjang Utara?</td>
        <td><input type="radio" name="role" id="role" value="resident"> Yes
        <input type="radio" name="role" id="role" value="nonresident"> No
        </td>
      </tr>
      <tr>
        <td colspan=2>
        <input type="checkbox" name="terms"> I accept Terms and Conditions
        <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
      </tr>
    </table>

  </form>
  </div>
  </div> <!-- End Container -->

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
