<?php
include ("connection.php");

$aa= "SELECT * FROM joblist WHERE status = 'Available' ";
$bb = mysqli_query($con, $aa);
$rm="RM";

if($_SERVER['REQUEST_METHOD'] == 'POST'){


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

<a class="logo" href="index_resident.php">&nbsp;</a>

<nav>

<div class="menubutton"></div>




<ul class="menubtns">
<li><a href="index_resident.php">Home</a></li>
<li class="selected"><a href="viewjob.php">Apply Job</a></li>
<li><a href="jobhistory_resident.php">Job History</a></li>
<li><a href="profile_resident.php">Profile</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</header>

<br><br>
<br>
<br>
<br>



<div class="page-width">



	<h3>Job List <br /></h3>
	<h4>Click on job ID to apply for job. <br /></h4>


<form class="searchform" method="POST" action="properties.html">

<?php if(mysqli_num_rows($bb) > 0) {
  echo '<table style="border:1px solid black">';
    echo '<thead>
      <tr>
        <th>JobID</th>
        <th>Job Title</th>
        <th>Job Start Date</th>
        <th>Job End Date</th>
        <th>Job Description</th>
        <th>Job Start Time</th>
        <th>Job End Time</th>
        <th>Salary</th>
        <th>Contact Info</th>
        <th>Status</th>
        <th>Employer</th>
      </tr>
    </thead>';
    while($row = mysqli_fetch_array($bb)){
      echo '<form><tbody><tr>';
      echo '<td>'.'<a href="addjob.php?id='.$row["jobID"].'">'. $row["jobID"].'</a>'. '</td>';
      echo '<td align="middle" style="width:150px;">'. $row["jobtitle"] .'</td>';
      echo '<td align="middle" style="width:100px;">'. $row["startdate"] .'</td>';
      echo '<td align="middle" style="width:100px;">'. $row["enddate"] .'</td>';
      echo '<td align="middle" style="width:350px;">'. $row["jobdescription"] .'</td>';
      echo '<td align="middle" >'. $row["startime"] .'</td>';
      echo '<td align="middle" >'. $row["endtime"] .'</td>';
      echo '<td align="middle" >'.'RM '.$row["salary"] .'</td>';
      echo '<td align="middle" style="max-width:150px; height:50px" >'. $row["contactinfo"] .'</td>';
      echo '<td align="middle" >'. $row["status"] .'</td>';
      echo '<td align="middle" >'. $row["employer"] .'</td>';
      echo '</tbody></form>';
    }
  echo '</table>';
  echo '</div>';
  echo '</div>';
  echo '<br>';
  echo '<br>';
} else {
  echo "No records matched";
}
mysqli_close($con);
 ?>

</form>

</div>




<<!-- Footer Area
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
