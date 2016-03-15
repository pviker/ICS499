<?php

	if (!isset($_SESSION)) session_start();
	require("../controllers/db.php");
	
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
	}
	
	if((!isset($username)) || (!isset($password))) {
		header("Location: newuserview.php");
		$_SESSION['errormsg'] = "Username and/or password not set";
	} else {
		
		$sql = "insert into user (username, password)
	                            values('" .$username. "', '" . sha1($password) . "')";
		
		//echo $sql;
		
		if(mysqli_query($conn, $sql)) {
			$_SESSION['errormsg'] = "Username and password persisted, add another user";
			header("Location: newuserview.php");
		}

	}
	
	
	
?>