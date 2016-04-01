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

	$query = "select student_id from student_courses where course_id=".$courseID;
	$results = mysqli_query($conn, $query);
	
	if(!$results) {
		$_SESSION["errormsg"] = "ERROR: Can't get user info";
		// header("Location: ../index.php");
		exit;
	} else {
		while($row = mysqli_fetch_assoc($results)) {
			$query2 = "select first_name, last_name, email from student where student_id=".$row['student_id']." order by last_name";
			$results2 = mysqli_query($conn, $query2);
			
			if(!$results2){
				$_SESSION["errormsg"] = "ERROR: Can't get course_num";
				header("Location: ../index.php");
				exit;
			} else {
				$row = mysqli_fetch_assoc($results2);
				$firstName = $row['first_name'];
				$lastName = $row['last_name'];
				$email = $row['email'];
				
				echo "<tr>".
						"<td>".$firstName." ".$lastName."</td>".
						"<td><a href='mailto:" . $email . "' target='_top' style='color:black'>" . $email . "</a></td>".
					 "</tr>";
			}
		}
	 }



?>