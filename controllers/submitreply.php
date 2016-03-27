<?php

	if (!isset($_SESSION)) session_start();
	require 'db.php';
	
	$id = $_GET['postID'];
	$studentID = $_SESSION['studentid'];
	$title = $_POST['title'];
	$body = $_POST['txtarea'];
	$date = date("m/d/Y");
	
	$insert = "INSERT INTO discussion_reply (discussion_post_id, student_id, title, body, date)
				VALUES ('$id', '$studentID', '$title', '$body', '$date')";

	/// insert into plans
	if(mysqli_query($conn, $insert)){
		//$_SESSION['message'] = "Admin organization plan templated saved!";
		header("Location: ../view/content/forum/postview.php?postID=".$id);
		echo "happened";
	} else {
		echo "didn't happen";
		//$_SESSION['message'] = "Error";
		//header("Location: ../accounts/admin.php");
	}
	
?>