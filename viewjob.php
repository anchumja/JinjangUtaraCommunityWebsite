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

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>View Job</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--Bootstrap-->
<link href="css/bootstrap.min.css" rel="stylesheet">
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
<li ><a href="index.php">Home</a></li>
<li class="selected"><a href="newjob.php">List a Job</a></li>
<li><a href="">Jobs Listed</a></li>
<li><a href="donate.php">Donate</a></li>
<li><a href="contact.php">Contact us</a></li>
<li><a href="">Profile</a></li>
<li><a href="index.php">Logout</a></li>
</ul>
</header>

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
<div class="clear"></div>

</form>





<div class="footer-placeholder">&nbsp;</div>
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