<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 2/23/16
 * Filename: header.php
 * Description: This is the main header required on all VIEW pages
 * 				(DOCTYPE, html, head, body, JS, CSS)
 *
 *****************************************************************/

	// header for all pages
	if (!isset($_SESSION)) session_start();
	
	// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	$pos = strpos($server, "localhost");
	
	if ($pos !== false) {
		$rootDir = "/thelearninghub";
	} else {
		$rootDir = "";
	}
	
?>
	
<!DOCTYPE html>	
<html lang="en">
  	<head>
	    
	    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
	    
		<!------------------------------ BOOTSTRAP -------------------------------------------------------------->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<!------------------------------ /BOOTSTRAP ------------------------------------------------------------->
		
		<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
		
		<link href='<?php echo $rootDir ?>/styles/main.css' rel='stylesheet' type='text/css'>
		<link href='<?php echo $rootDir ?>/styles/colorscheme.css' rel='stylesheet' type='text/css'>
		
		<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  		<script>tinymce.init({ selector:'textarea' });</script>
		
	</head>

<body>