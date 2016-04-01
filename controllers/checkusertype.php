<?php

	if (!isset($_SESSION)) session_start();
	require 'db.php';
	
	if(!isset($_SESSION['username'])){
		header("Location: ../index.php");
		exit;
	} else $username = $_SESSION['username'];
	
	$query = "select username, instructor_flag from user where username='" . $username . "'";

	$result = mysqli_query($conn, $query);
	
	if(!$result){
		$_SESSION['errormsg'] = "Username does not exist, please try again.";
		header("Location: ../index.php");
		exit;
	} 
	
	$row = mysqli_fetch_assoc($result);
	
	$instructorFlag = $row['instructor_flag'];
	$_SESSION['instructorFlag'] = $instructorFlag;
	
	if($instructorFlag == 0){
		header("Location: ../view/landing.php");
		exit;
	} else if($instructorFlag == 1) {
		header("Location: ../instructor/view/landing.php");
		exit;
	} else {
		$_SESSION['errormsg'] = "There was an error, please try again.";
		header("Location: ../index.php");
		exit;
	}

	
?>