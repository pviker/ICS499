<?php

/**
 * Filename: session.php
 * Description: Starts session if not already created. 
 * 				Also checks SERVER_NAME to designate file system control w/r/t local vs. server environment
 * 
 * **/

	// header for all pages
	if (!isset($_SESSION)) session_start();
	
	// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	if (strpos($server,'metrostate.edu') == true) {
		$server = "/~ics499sp160202";
	} else $server = "";
	
?>