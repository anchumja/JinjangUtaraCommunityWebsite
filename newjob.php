<?php
include ("connection.php");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$fullname=$_SESSION['fullname'];

    $jobtitle = $_POST['jobtitle'];

    $jobdescription = $_POST['jobdescription'];
    $contactinfo = $_POST['contactinfo'];
	$startime = $_POST['startime'];
	$endtime = $_POST['endtime'];
	$jobID = intval( rand(1,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) );

	$workernumberError="";
	$salaryError="";

	if(!empty($_POST['workernumber'])){
		if($_POST['workernumber'] < 0){
			$workernumberError = "Workers cannot be negative";
		} else {
			if(is_numeric($_POST['workernumber'])){
				$workernumber = $_POST['workernumber'];
			} else {
				$workernumberError = "Worker number must be numeric";
			}
		}
	}

	if(time()>strtotime($_POST['startdate'])){
		$dateError="Cannot be before today !!";
	} else {
		$ddate = strtotime($_POST['startdate']);
		$date = date('Y-m-d',$ddate);}

	if(strtotime($_POST['startdate'])>strtotime($_POST['enddate'])){
		$dateError="Cannot be before start date !!";
	} else {
		$ddate2 = strtotime($_POST['enddate']);
		$date2 = date('Y-m-d',$ddate2);}

	if(!empty($_POST['salary'])){
		if($_POST['salary'] < 0){
			$salaryError = "Salary cannot be negative";
		} else {
			if(is_numeric($_POST['salary'])){
				$salary = $_POST['salary'];
			} else {
				$salaryError = "Salary must be numeric";
			}
		}
	}

	if($workernumberError =="" && $salaryError =="" && $dateError == ""){
		$newJob = "INSERT INTO `joblist` (`jobID`, `jobtitle`, `startdate`, `enddate`, `jobdescription`, `startime`, `endtime`,`salary`, `contactinfo`, `status`,`maxWorker`,`employer`, `workers`) VALUES ('$jobID', '$jobtitle', '$date', '$date2' ,'$jobdescription', '$startime', '$endtime', '$salary', '$contactinfo', 'Available', '$workernumber' ,'$fullname', '0')";
		if (mysqli_query($con, $newJob)){
			echo '<script language="javascript">';
			echo 'alert("Job successfully created")';
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
<link rel="stylesheet" href="assets/style.css" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
<link rel="stylesheet" href="css/prettyPhoto.css" />
<link rel="stylesheet" href="css/flexslider.css" />
<link rel="stylesheet" href="css/custom-styles.css">
<link rel="stylesheet" href="style3.css">
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
<li ><a href="index_client.php">Home</a></li>
<li class="selected"><a href="newjob.php">Post a Job</a></li>
<li><a href="jobhistory_client.php">Job History</a></li>
<li><a href="profile_client.php">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</header>



<div class="container">

<br><br><br><br>

<div class="page-width">

<div class="memberform">

	<form action="newjob.php" method="POST" class="registerform">
		<h2>New Job Form</h2>
		<div class="formelement">
			<label for="jobtitle">Job Title:</label>
			<input type="text" id="jobtitle" name="jobtitle" style="height:30px; "value="" placeholder="" required />
		</div>
		<div class="formelement">
			<label for="jobdate">Job Date:</label>
			<input type="date" id="startdate" name="startdate" style="width:150px; height:30px;" value="" required/>
			to
			<input type="date" id="enddate" name="enddate" style="width:150px; height:30px;" value="" required/><p>
			<?php if(isset($dateError)){echo $dateError;} ?>
		</div>
		<div class="formelement">
			<label for="jobtime">Job Time:</label>
			<input type="time" id="startime" name="startime" style="width:100px; height:30px;" value="" required/>
			to
			<input type="time" id="endtime" name="endtime" style="width:100px; height:30px;" value="" required/>
		</div>
		<div class="formelement">
			<label for="jobdescription">Job Description</label>
			<textarea rows="5" cols="50" id="jobdescription" style="height:30px;" name="jobdescription" value="" placeholder="" required> </textarea>
		</div>
		<div class="formelement">
			<label for="Number of Workers">Number of Workers:</label>
			<input type="number" min="1" id="workernumber" style="height:30px;" name="workernumber" value="" placeholder="" required />
		</div>
		<div class="formelement">
			<label for="Salary">Salary (RM per hour):</label>
			<input type="number" min="1" id="salary" name="salary" style="height:30px;" value="" placeholder="" required />
		</div>
		<div class="formelement">
			<label for="contactinfo">Contact Information:</label>
			<input type="text" id="contactinfo" name="contactinfo" value="" style="height:30px;" placeholder="" required />
		</div>
		<div class="formelement">
		<input type="submit" class="button" value="Create New Job" />
		</div>
		<div class="clear"></div>
	</form>



</div>

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

<<<<<<< HEAD
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

  </div>

</footer>


</body>
</html>
