<?php
include ("connection.php");

$aa= "SELECT * FROM joblist WHERE status = 'Available' ";
$bb = mysqli_query($con, $aa);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$username=$_SESSION['username'];
$inIDnotFound="";

$inID = $_POST['inID'];

$cc= "SELECT * FROM TrainingSession WHERE sessionID = '$inID' ";
$dd = mysqli_query($con, $cc);
$row2 = mysqli_fetch_array($dd);
	$sessionID = $row2["sessionID"];
	$trainingType = $row2["trainingType"];
	$date = $row2["date"];
	$time = $row2["time"];
	$title = $row2["title"];
	$participants = $row2["participants"] + 1;
	$status = $row2["status"];
	$maxParticipants = $row2["maxParticipants"];
	$rating = $row2["rating"];

$ee= "SELECT sessionID FROM joinSession WHERE username = '$username' ";
$ff = mysqli_query($con, $ee);

	if ($sessionID == $inID){
		if ($trainingType == 'Personal'){
			$joinSession = "INSERT INTO `JoinSession` (`sessionID`, `title`, `date`, `time`, `trainingType`, `username`, `rating`) VALUES ('$sessionID', '$title', '$date' ,'$time', 'Personal' , '$username' ,'$rating') ";
			if (mysqli_query($con, $joinSession)){
				$setStatus = "UPDATE `TrainingSession` SET `status` = 'Full' WHERE sessionID = '$inID' ";
				if (mysqli_query($con, $setStatus)){
				echo '<script language="javascript">';
				echo 'alert("Successfully register for session.")';
				echo '</script>';
				}
			}
		}

		else { if (mysqli_num_rows($ff) > 0) { echo '<script language="javascript">';
				echo 'alert("Already joined session.")';
				echo '</script>'; }
			else {
			$joinSession = "INSERT INTO `JoinSession` (`sessionID`, `title`, `date`, `time`, `trainingType` , `username`,`rating`) VALUES ('$sessionID', '$title' ,'$date', '$time',  'Group' ,'$username','rating') ";
				if (mysqli_query($con, $joinSession)) {
					if ($participants == $maxParticipants){
						$setStatus = "UPDATE `TrainingSession` SET `status` = 'Full' WHERE sessionID = '$inID' ";
						if (mysqli_query($con, $setStatus)) {
							echo '<script language="javascript">';
							echo 'alert("Successfully register for session.")';
							echo '</script>';
						}
					}

					else {
						$setnewPar = "UPDATE `TrainingSession` SET `participants` = '".$participants."' WHERE sessionID = '$inID' ";
						if(mysqli_query($con, $setnewPar)){
							echo '<script language="javascript">';
							echo 'alert("Successfully register for session.")';
							echo '</script>';
						}
					}
				}
			}
		}
		}
	else
		{$inIDnotFound = "Session ID does not exist.";}
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
      <div class="offset1 span5">
        <a href="index.php"><div class="logo"></div></a>
      </div>
      <div class="span8 navigation">
          <div class="navbar hidden-phone">


						<ul class="nav">
						 <li><a href="index.php">Home</a></li>
             <li><a href="newjob.php">Post Job</a></li>
						 <li class="dropdown active"><a href="viewjob.php">View Jobs</a></li>
						 <li><a href="index.php">Log Out</a></li>
						 <p><strong> &nbsp &nbsp &nbsp &nbsp
						             &nbsp &nbsp &nbsp &nbsp
                         &nbsp &nbsp &nbsp &nbsp
                         &nbsp &nbsp &nbsp &nbsp
                         &nbsp &nbsp &nbsp &nbsp
							 Welcome, <?php echo $_SESSION['fullname'];?>!</strong></p>
						</ul>
          </div>

      </div>
    </div>
  </div>

<div class="container propertiespage">



<div class="page-width">


<div class="properties_search_container">


<form class="searchform" method="POST" action="properties.html">
<?php if(mysqli_num_rows($bb) > 0) {
  echo '<table style="border:1px solid black">';
    echo '<thead>
      <tr>
        <th>JobID</th>
        <th>Job Title</th>
        <th>Job Duration</th>
        <th>Job Description</th>
        <th>Job Start Time</th>
        <th>Job End Time</th>
        <th>Salary</th>
        <th>Contact Info</th>
        <th>Status</th>
        <th>Employer</th>
        <th>Workers<th>
      </tr>
    </thead>';
    while($row = mysqli_fetch_array($bb)){
      echo '<form><tbody><tr>';
      echo '<td>'. $row["jobID"]. '</td>';
      echo '<td>'. $row["jobtitle"] .'</td>';
      echo '<td>'. $row["jobduration"] .'</td>';
      echo '<td>'. $row["jobdescription"] .'</td>';
      echo '<td>'. $row["startime"] .'</td>';
      echo '<td>'. $row["endtime"] .'</td>';
      echo '<td>'. $row["salary"] .'</td>';
      echo '<td>'. $row["contactinfo"] .'</td>';
      echo '<td>'. $row["status"] .'</td>';
      echo '<td>'. $row["employer"] .'</td>';
      echo '<td>'. $row["workers"] .'</td>';
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
