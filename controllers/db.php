<?php

$dbUser = "ics499sp160202";
$dbPass = "nvcyvxak";
$db = "ics499sp160202";

//Database connection
@ $dbc = mysqli_connect('localhost', $dbUser, $dbPass, $db);

if(mysqli_connect_errno() ) {
	echo "Error: could not connect to database. Please try again later.";
	exit;
}

?>