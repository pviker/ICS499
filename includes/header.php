<?php

	// header for all pages
	if (!isset($_SESSION)) session_start();
	
	// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	if (strpos($server,'metrostate.edu') == true) {
		$server = "/~ics499sp160202";
	} else $server = "";
	
?>
	
<!DOCTYPE html>	
<html lang="en">
  	<head>
	    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	    
		<!-- BOOTSTRAP -->
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>

<body>