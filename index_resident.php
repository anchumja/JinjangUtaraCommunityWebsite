<?php
session_start();
include("connection.php");
//After you have checked that the username is correct.
$username=$_SESSION['username'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/login.css" />
  <title>Jinjang Utara Community Page</title>

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
  <li><a href="newjob.php">Job</a></li>
  <li><a href="logout.php">Log Out</a></li>
  </ul>
</header>
<body>
  <br><br><br><br>
<div class="wrapper col0">
    <div id="topline">
        <p>Welcome, <?php echo $_SESSION['fullname'];?>!</p>
        <ul>
            <li><a href="#">CHANGE PASSWORD</a></li>
            <li class="last"><a href="index.php">LOGOUT</a></li>
        </ul>
        <br class="clear" />
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
