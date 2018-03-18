<?php 
include ("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$fullname=$_SESSION['fullname'];

    $jobtitle = $_POST['jobtitle'];
    $jobduration = $_POST['jobduration']; 
    $jobdescription = $_POST['jobdescription'];
    $contactinfo = $_POST['contactinfo'];    
	$starttime = $_POST['startime'];
	$endtime = $_POST['endtime'];
	$jobID = intval( rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );

	$workernumberError=""; 
	$salaryError=""; 

	if(!empty($_POST['workernumber'])){
		if($_POST['workernumber'] < 1){
			$workernumberError = "Fee cannot be negative";
		} else {
			if(is_numeric($_POST['workernumber'])){
				$workernumber = $_POST['workernumber'];
			} else {
				$workernumberError = "Worker number must be numeric";
			}
		}
	}

	if(!empty($_POST['salary'])){
		if($_POST['salary'] < 0){
			$salaryError = "Fee cannot be negative";
		} else {
			if(is_numeric($_POST['salary'])){
				$salary = $_POST['salary'];
			} else {
				$salaryError = "Salary must be numeric";
			}
		}
	}

	if($workernumberError =="" && $salaryError ==""){
		$newJob = "INSERT INTO `joblist` (`jobID`, `jobtitle`, `jobduration`, `jobdescription`, `startime`, `endtime`,`salary`, `contactinfo`, `status`,`maxWorker`, `employer`, `workers`) VALUES ('$jobID', '$jobtitle', '$jobduration' ,'$jobdescription', '$startime', '$endtime', '$salary', '$contactinfo', 'Available', '$workernumber', $fullname' , '0')";
		if (mysqli_query($con, $newJob)){	
			echo '<script language="javascript">';
			echo 'alert("Session successfully created")';
			echo '</script>';
			}
		}
    }
  
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>New Job</title>
<link rel="stylesheet" href="assets/style.css" />
<script src="assets/jquery3.js"></script>
<script src="assets/scripts.js"></script>
</head>
<body>



<header>
<div class="page-width">

<a class="logo" href="index.html">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li><a href="index.php">Home</a></li>
<li class="selected"><a href="login.php">Log In</a></li>
<li><a href="joblist.php">Job</a></li>
<li><a href="news.php">News</a></li>
<li><a href="donate.php">Donate</a></li>
<li><a href="volunteer.php">Volunteer</a></li>
<li><a href="contact.php">Contact us</a></li>
</ul>
</header>

<div class="container loginpage">
	


<div class="page-width">

<div class="memberform">
	
	<form action="newjob.php" method="POST" class="registerform">
		<h2>New Job Form</h2>
		<div class="formelement">
			<label for="jobtitle">Job Title:</label>
			<input type="text" id="jobtitle" name="jobtitle" value="" placeholder="" required />
		</div>
		<div class="formelement">
			<label for="jobduration">Job Duration:</label>
			<input type="text" id="jobduration" name="jobduration" value="" placeholder="" required />
		</div>
		<div class="formelement1">
			<label for="jobtime">Job Time:</label>
			<input type="time" id="startime" name="startime" value="" required/>
			to
			<input type="time" id="endtime" name="endtime" value="" required/>
		</div>
		<div class="formelement">
			<label for="jobdescription">Job Description</label>
			<textarea rows="5" cols="50" id="jobdescription" name="jobdescription" value="" placeholder="" required> </textarea>
		</div>
		<div class="formelement">
			<label for="Number of Workers">Number of Workers:</label>
			<input type="number" min="1" id="workernumber" name="workernumber" value="" placeholder="" required />
		</div>
		<div class="formelement">
			<label for="Salary">Salary (RM):</label>
			<input type="number" min="1" id="salary" name="salary" value="" placeholder="<?php if(isset($salaryError)){echo $salaryError;} ?>" required />
		</div>
		<div class="formelement">
			<label for="contactinfo">Contact Information:</label>
			<input type="text" id="contactinfo" name="contactinfo" value="" placeholder="<?php if(isset($workernumberError)){echo $workernumberError;} ?>" required />
		</div>
		<div class="formelement">
		<input type="submit" class="button" value="Create New Job" />
		</div>
		<div class="clear"></div>
	</form>
	


</div>

</div>



</div>


<<<<<<< HEAD
<div class="footer-placeholder">&nbsp;</div>
=======
>>>>>>> origin/master
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
<<<<<<< HEAD

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
=======

    <div>
      <i class="fa fa-phone"></i>
      <p>03-2716 2000</p>
    </div>
>>>>>>> origin/master

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