<?php
session_start();
include("connection.php");
//After you have checked that the username is correct.
$username=$_POST['username'];

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
<div id="container">

</div>
</body>

</html>
