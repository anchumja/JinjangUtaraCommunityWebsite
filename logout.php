<?php
  //start PHP session
  session_start();
  //empty PHP session
  $_SESSION = array();
  //show message to user about logout
  $_SESSION['passThruMessage']="You have logged out.";
  header("Location: index.php");
?>