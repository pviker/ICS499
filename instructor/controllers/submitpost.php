<?php

	if (!isset($_SESSION)) session_start();
	
	require '../../controllers/db.php';
	
	date_default_timezone_set("America/Chicago");
	
	//$id = $_GET['postID'];
	$id = $_POST['courseID'];
	$title = $_POST['title'];
	$body = $_POST['txtarea'];
	$date = date("m/d/Y");
	$time = date("h:i:sa");
	
	$insert = "INSERT INTO discussion_post (courses_id, title, body, date)
				VALUES ('$id', '$title', '$body', '$date')";

	/// insert into plans
	if(mysqli_query($conn, $insert)){
		$_SESSION['msg'] = "Your discussion topic has posted successfully!";
		echo "good";
//		header("Location: ../view/content/adddiscussionpost.php");
	} else {
		$_SESSION['errormsg'] = "There was an error posting discussion topic, please try again";
//		header("Location: ../view/content/adddiscussionpost.php");
	}
	
?>