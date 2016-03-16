<?php

	if (!isset($_SESSION)) session_start();

	require("db.php");
	
	// checks if submit button is clicked
	if(isset($_POST['submit'])) {   
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['username'] = $username;
	}  
	
	// checks if username and password is successfully stored
	if($username == "" || $password == "") {
		$_SESSION['errormsg'] = "Username and/or password cannot be empty";
		header("Location: ../index.php");
	} else {
	    $query = "select count(*) from user where username = '" . $username . "' and 
	    password = sha1('" . $password . "')";
	    
	    $result = mysqli_query($conn, $query);
    
	    if(!$result) {
	        
        	$_SESSION["errormsg"] = "ERROR: Cannot run query.";
            header("Location: ../index.php");
            exit; 
 	    }
	    
 	    $row = mysqli_fetch_row($result);
 	    $count = $row[0];
	    
 	    if($count > 0) {
	  
			header("Location: ../view/landing.php");
	        
 	    } else {
	      	
 			$_SESSION["errormsg"] = "Your username or password are not correct. Please try again.";
 			header("Location: ../index.php");
 	        exit;
	       
 	     }
	}

?>