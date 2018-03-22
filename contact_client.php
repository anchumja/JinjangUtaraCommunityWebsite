<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/contact.css" />
  <title>Jinjang Utara Community Page</title>
  <script src="assets/jquery3.js"></script>
  <script src="assets/scripts.js"></script>
</head>

<header>
<div class="page-width">

<a class="logo" href="index_client.php">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li ><a href="index_client.php">Home</a></li>
<li><a href="newjob.php">Post a Job</a></li>
<li><a href="">Jobs Post History</a></li>
<li><a href="donate_client.php">Donate</a></li>
<li class="selected"><a href="contact_client.php">Contact us</a></li>
<li><a href="">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</header>

<section id="contact">

<div class="container">

<form name="htmlform" method="post" action="toyousender.php">

<input type="text" name="first_name" placeholder="NAME" required>

<input  type="email" name="email" placeholder="MAIL" required>

<textarea name="comments" placeholder="MESSAGE" required ></textarea>

<button name="send" type="submit" class="submit">SEND</button>

</form>

  </div>
  </section>



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
