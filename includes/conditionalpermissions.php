<?php
	
	$location = $_SERVER['DOCUMENT_ROOT'].$rootDir."/index.php";

	if(isset($_SESSION["username"])){
		if($_SESSION['username'] == ""){
			$_SESSION['errormsg'] = "Please login to continue";
			
			header("Location: ".$location);
		}
	} else {
		$_SESSION['errormsg'] = "Please login to continue";
		header("Location: ".$location);
	}
	
	if(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	} else $username = "No Username";
	
	if(isset($_GET['courseID'])){
		$selectedCourse = $_GET['courseID'];
	} else if(isset($_SESSION['selectedCourse'])){
		$selectedCourse = $_SESSION['selectedCourse'];
	} else $selectedCourse = "TLH";
	
?>