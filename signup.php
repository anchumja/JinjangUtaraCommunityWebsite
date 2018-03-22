<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Jinjang Utara Community Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/index.css" />
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
  <div class="container-fluid">
    <div class="row w">
      <div class="offset1 span5" >
        <a href="index.php"><div class="logo"></div></a>
      </div>
      <div class="span8 navigation">
          <div class="navbar hidden-phone">


          <ul class="nav">
           <li><a href="index.php">Home</a></li>
           <li class="dropdown active"><a href="signup.php">Sign Up</a></li>
           <li><a href="login.php">Log In</a></li>
           <li><a href="newjob.php">Jobs</a></li>
          </ul>
          </div>

      </div>
    </div>
  </div>
    <div class="container">



    <div class="row headline"><!-- Begin Headline -->


        </div>

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
  			<td><input type="text" class="demoInputBox" name="username" id="username" placeholder="Enter your username"<?php if(isset($usernameError)){echo $usernameError;} ?>" required></td>
  		</tr>
  		<tr>
  			<td>Full Name</td>
  			<td><input type="text" class="demoInputBox" name="fullname" id="fullname" placeholder="Enter your fullname" required></td>
  		</tr>
  		<tr>
  			<td>Password</td>
  			<td><input type="password" minlength="6" class="demoInputBox" name="password" id="password" placeholder="<?php if(isset($passwordError)){echo $passwordError;} ?>" required></td>
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
