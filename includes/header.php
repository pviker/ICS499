<?php
	// header for all pages
	if (!isset($_SESSION)) session_start();
	
	// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	if (strpos($server,'metrostate.edu') == true) {
		$server = "/~ics325fa1528";
	} else $server = "";
	
	?>
	
	<!DOCTYPE html>
	
	<html>
	    
<head>