<?php
 include ("connection.php");
 $usernameError="Enter your username";
 $passwordError="Enter your Password";

 $username=$_SESSION['username'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $confirmPassword = $_POST['confirm_password'];
    $password = $_POST['password'];


    $emailError="";
    $passwordError="";


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

    if($passwordError == "" && $emailError == "" ){
      if
    (mysqli_query($con, "UPDATE `nonresident` SET `password` = '$password', `email` = '$email' WHERE `username` = '".$username."'"));
        {
        echo '<script language="javascript">';
        echo 'alert("Profile has been updated.")';
        echo '</script>';
        }
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

<a class="logo" href="index_client.php">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li><a href="index_client.php">Home</a></li>
<li><a href="newjob.php">Post a Job</a></li>
<li><a href="jobhistory_client.php">Job History</a></li>
<li class="selected"><a href="profile_client.php">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</header>
<br><br>
<br><br>
<br><br>
<br>

<div class="login-page">
<div class="form">
  <h2><center>Update Account</center></h2>

<form name="loginform" method="post" action="profile_client.php">
  <table>

        <caption>Full Name:  <?php echo $_SESSION['fullname'];?></caption>

      <tr>
        <td>New Password</td>
        <td><input type="password" class="demoInputBox" name="password" id="password" minlength="6" placeholder="<?php if(isset($passwordError)){echo $passwordError;} ?>" required></td>
      </tr>
      <tr>
        <td>Confirm Password</td>
        <td><input type="password" class="demoInputBox" name="confirm_password" id="confirm_password" placeholder="" required></td>
      </tr>
      <tr>
        <td>New Email</td>
        <td><input type="text" class="demoInputBox" name="email" id="email" placeholder="" ></td>
      </tr>
      <tr>
        <td colspan=2>

        <input type="submit" name="register-user" value="Update" class="btnRegister"></td>
      </tr>
    </table>
    <?php if(isset($emailError)){echo $emailError;} ?>

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
