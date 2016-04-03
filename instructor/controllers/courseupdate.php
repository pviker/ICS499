<?php

	if (!isset($_SESSION)) session_start();
	
	require '../../controllers/db.php';
	
	date_default_timezone_set("America/Chicago");
	
	$id = $_POST['courseID'];
	$title = $_POST['title'];
	$body = $_POST['txtarea'];
	$date = date("m/d/Y");
	
	$insert = "INSERT INTO course_updates (courses_id, title, body, date)
				VALUES ('$id', '$title', '$body', '$date')";

	/// insert into plans
 	if(mysqli_query($conn, $insert)){
 		$_SESSION['msg'] = "Your reply has posted successfully!";
 		header("Location: ../view/content/addcourseupdate.php");
 	} else {
 		$_SESSION['errormsg2'] = "There was an error posting your reply, please try again";
 		header("Location: ../view/content/addcourseupdate.php");
 	}
	
?>