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
//		header("Location: ../index.php");
	}
	
	if(isset($_GET['courseID'])){
		$courseID = $_GET['courseID'];
	} else if(isset($_SESSION['selectedCourse'])){
		$courseID = $_SESSION['selectedCourse'];
	} 

	$getCourseNum = "select courses.course_num from courses where courses.courses_id=".$courseID;

	$courseNumResult = mysqli_query($conn, $getCourseNum);
	
	if(!$courseNumResult) {
    	$_SESSION["errormsg"] = "ERROR: Can't get course_num";
       header("Location: ../index.php");
        exit;
	} else {
		while($row = mysqli_fetch_assoc($courseNumResult)) {
			echo $row['course_num'];
 		}
	  }


?>