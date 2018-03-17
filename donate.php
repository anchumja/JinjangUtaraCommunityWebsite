<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/donate.css" />
  <title>Jinjang Utara Community Page</title>
  <script src="assets/jquery3.js"></script>
  <script src="assets/scripts.js"></script>
</head>
<header>
<div class="page-width">

<a class="logo" href="index.php">&nbsp;</a>

<nav>

<div class="menubutton"></div>

<br>
<br>


<ul class="menubtns">
<li><a href="index.php">Home</a></li>
<li><a href="newjob.php">Job</a></li>
<li><a href="news.php">News</a></li>
<li class="selected"><a href="donate.php">Donate</a></li>
<li><a href="volunteer.php">Volunteer</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</header>


<body>
<div class="donation-container">

            <div class="donation-box">
	            <div class="title">Donation Information</div>

	            <div class="fields">
		            <input type="text" id="firstName" placeholder="First Name"> </input>
		            <input type="text" id="lastName" placeholder="Last Name"> </input>
		            <input type="text" id="email" placeholder="Email"> </input>
	            </div>

	            <div class="amount">
		            <div class="button">$30</div>
		            <div class="button">$50</div>
		            <div class="button">$100</div>
		            <div class="button">$<input type="text" class="set-amount" placeholder=""> </input></div>
	            </div>

	            <div class="switch">
					<input type="radio" class="switch-input" name="view" value="One-Time" id="one-time" checked="">
					<label for="one-time" class="switch-label switch-label-off">One-Time</label>
					<input type="radio" class="switch-input" name="view" value="Monthly" id="monthly">
					<label for="monthly" class="switch-label switch-label-on">Monthly</label>
					<span class="switch-selection"></span>
			    </div>

			    <div class="checkboxes">
					<input type="checkbox" id="receipt" class="checkbox" />
					<label for="receipt">Email Me A Receipt</label>
					<br />
					<input type="checkbox" id="anon" class="checkbox" />
					<label for="anon">Give Anonymously</label>
					<br />
					<input type="checkbox" id="list" class="checkbox" />
					<label for="list">Add Me To Email List</label>
			    </div>

			    <div class="confirm">

			    </div>

	            <div class="donate-button"><i class="fa fa-credit-card"></i> Donate Now</div>
            </div>

        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://raw.githubusercontent.com/jerryluk/jquery.autogrow/master/jquery.autogrow-min.js"></script>
</body>

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
