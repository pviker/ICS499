<?php

	if (!isset($_SESSION)) session_start();
	
	require '../../controllers/db.php';
	
	date_default_timezone_set("America/Chicago");
	
	$id = $_POST['courseID'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$date = $_POST['datepicker'];
	$points = $_POST['points'];
	$dropboxFlag = $_POST['dropbox'];
	
 	if($dropboxFlag == '1'){
 		$dropboxFlag = 1;
 	} else $dropboxFlag = 0;
	
	$insert = "INSERT INTO assignments (courses_id, name, description, due_date, max_points, dropbox_flag)
				VALUES ('$id', '$title', '$description', '$date', '$points', '$dropboxFlag')";
	
//	echo $insert;

	/// insert into plans
 	if(mysqli_query($conn, $insert)){
 		$_SESSION['msg'] = "Assignment added successfully!";
 		header("Location: ../view/content/addassignment.php");
 	} else {
 		$_SESSION['errormsg4'] = "There was an error, please try again";
 		header("Location: ../view/content/addassignment.php");
 	}
	
?>