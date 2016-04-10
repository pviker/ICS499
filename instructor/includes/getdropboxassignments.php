<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/21/16
 * Filename: getcourseassignments.php
 * Description: This script retrieves from the database course information
 * 				give the selected course by the user and echos it back
 * 				in a formatted table.
 *
 *************************************************************************/
	
	if (!isset($_SESSION)) session_start();
	require $_SERVER['DOCUMENT_ROOT'].$rootDir.'controllers/db.php';

	if(isset($_SESSION['selectedCourse'])){
		$course = $_SESSION['selectedCourse'];
	} else {
		$_SESSION['errormsg'] = "Can't retrieve courses.";
		//header("Location: ../index.php");
	}

	$getCourseAssignments = "SELECT assignments_id, name, description, due_date, max_points, dropbox_flag 
								FROM assignments
    							WHERE courses_id=".$course;
	
//	echo $getCourseAssignments;

	$assignmentResults = mysqli_query($conn, $getCourseAssignments);
	
	if(!$assignmentResults) {
    	$_SESSION["errormsg"] = "ERROR: Can't get user info";
       // header("Location: ../index.php");
        exit;
	} else {
		
		while($assignments_row = mysqli_fetch_assoc($assignmentResults)) {
			if($assignments_row['dropbox_flag'] == 1){
			
				echo "<a href = 'viewstudentsubmissions.php?assignments_id=" . $assignments_row["assignments_id"] . "'
                            class='list-group-item'>" . $assignments_row["name"] . 
					 "</a>";
			}
		}
	}


?>