<?php

	if (!isset($_SESSION)) session_start();
	
	require 'db.php';
	
	date_default_timezone_set("America/Chicago");
	
	$id = $_GET['postID'];
	$studentID = $_SESSION['studentid'];
	$title = $_POST['title'];
	$body = $_POST['txtarea'];
	$date = date("m/d/Y");
	$time = date("h:i:sa");
	
	$insert = "INSERT INTO discussion_reply (discussion_post_id, student_id, title, body, date, time)
				VALUES ('$id', '$studentID', '$title', '$body', '$date', '$time')";

	/// insert into plans
	if(mysqli_query($conn, $insert)){
		$_SESSION['message'] = "Admin organization plan templated saved!";
		header("Location: ../view/content/forum/postview.php?postID=".$id);
	} else {
		$_SESSION['message'] = "Admin organization plan templated saved!";
		header("Location: ../view/content/forum/postview.php?postID=".$id);
	}
	
?>