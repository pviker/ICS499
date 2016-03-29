<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/21/16
 * Filename: getcoursenum.php
 * Description: This script gets a course_num from the 
 * 				courses_id selected by a user then echos it back
 * 
 *************************************************************************/

	if(isset($_SESSION['studentid'])){
		$studentid = $_SESSION['studentid'];
	} else {
		$_SESSION['errormsg'] = "Can't retrieve courses.";
		header("Location: ../index.php");
	}
	
	if(isset($_GET['courseID'])){
		$courseID = $_GET['courseID'];
	} else if(isset($_SESSION['selectedCourse'])){
		$courseID = $_SESSION['selectedCourse'];
	} 

	$query = "select instructor_id from courses where courses_id=".$courseID;
	$results = mysqli_query($conn, $query);
	
	if(!$results) {
    	$_SESSION["errormsg"] = "ERROR: Can't get course_num";
       header("Location: ../index.php");
        exit;
	} else {
		$row = mysqli_fetch_assoc($results);
		$instructorID = $row['instructor_id'];
	}
	  
	$query = "select first_name, last_name, email from instructor where instructor_id=".$instructorID;
	$results = mysqli_query($conn, $query);
	
	if(!$results) {
		$_SESSION["errormsg"] = "ERROR: Can't get course_num";
		header("Location: ../index.php");
		exit;
	} else {
		$row = mysqli_fetch_assoc($results);
		$firstName = $row['first_name'];
		$lastName = $row['last_name'];
		$email = $row['email'];
	}
	
	echo "<p class='lead'>Instructor: <strong>" . $firstName . " " . $lastName ." </strong></p>
			<p class='lead'>Email: <a href='mailto:" . $email . "' target='_top' style='color:black'><strong>" . $email . "</strong></a></p>";


?>