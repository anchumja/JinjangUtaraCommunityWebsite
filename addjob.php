<?php
include ("connection.php");

$id=$_GET['id'];
$username=$_SESSION['username'];

$cc= "SELECT * FROM joblist WHERE jobID = '$id' ";
$dd = mysqli_query($con, $cc);
$row2 = mysqli_fetch_array($dd);
	$jobid = $row2["jobID"];
	$jobtitle = $row2["jobtitle"];
	$startdate = $row2["startdate"];
	$enddate = $row2["enddate"];
	$jobdescription = $row2["jobdescription"];
	$startime = $row2["startime"];
	$endtime = $row2["endtime"];
	$salary = $row2["salary"];
	$contactinfo = $row2["contactinfo"];
	$status = $row2["status"];
	$employer = $row2["employer"];
	$activeworker = $row2["workers"] + 1;
	$maxworker = $row2["maxWorker"];

$ee= "SELECT jobID FROM joinjob WHERE jobID = '$id' ";
$ff = mysqli_query($con, $ee);

	if (mysqli_num_rows($ff) > 0) { echo '<script language="javascript">';
			echo 'alert("Already joined job.");';
			echo 'window.location.href="viewjob.php";';
			echo '</script>'; 
			 }
			else {
			$joinSession = "INSERT INTO `joinjob` (`jobID`, `jobtitle`, `startdate`, `enddate`, `jobdescription`, `startime`, `endtime`, `salary` , `contactinfo`,`status`,`employer`, `username`) VALUES ('$jobid', '$jobtitle' ,'$startdate', '$enddate',  '$jobdescription' ,'$startime','$endtime','$salary', '$contactinfo', 'Joined', '$employer', '$username') ";
				if (mysqli_query($con, $joinSession)) {
					if ($activeworker == $maxworker){
						$setStatus = "UPDATE `joblist` SET `status` = 'Full' WHERE jobID = '$id' ";
						if (mysqli_query($con, $setStatus)) {
							echo '<script language="javascript">';
							echo 'alert("Successfully applied for job.");';
							echo 'window.location.href="viewjob.php";';
							echo '</script>';
							
						}
					} 

					else {
						$setnewPar = "UPDATE `joblist` SET `workers` = '".$activeworker."' WHERE jobID = '$id' ";
						if(mysqli_query($con, $setnewPar)){
							echo '<script language="javascript">';
							echo 'alert("Successfully applied for job.");';
							echo 'window.location.href="viewjob.php";';
							echo '</script>';
							
						}
					}	
				}
			}
			
?>