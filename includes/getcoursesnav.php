<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/25/16
 * Filename: getstudentassignments.php
 * Description: Retrieves from the database student assignments
 * 				based on logged in user and course selected
 * 				by user.
 *
 *****************************************************************/


//	require '../controllers/db.php';

	if($_SESSION['instructorFlag'] == 1) {
		
		$query = "select courses_id, course_num, course_name from courses where instructor_id=".$_SESSION['instructorID'];
		$result = mysqli_query($conn, $query);
		
		if(!$result) {
			echo "There was an error getting courses";
		} else {
			while($row = mysqli_fetch_assoc($result)) {
				echo "<li><a href='".$rootDir."/view/course.php?courseID=".$row['courses_id']."'>".$row['course_num']."</a></li>";
			}
		}
		
	} else {

		if(isset($_SESSION['studentid'])){
			$studentid = $_SESSION['studentid'];
		} else {
			$_SESSION['errormsg'] = "Can't retrieve courses.";
//			header("Location: ../index.php");
		}
	
		$getStudentCourses = "select courses.courses_id, courses.course_num, courses.course_name
								from student_courses, courses, student
								where student_courses.student_id=student.student_id
								and student_courses.course_id=courses.courses_id
								and student.student_id='".$studentid."' order by course_num";
	
		$studentCoursesResult = mysqli_query($conn, $getStudentCourses);
		
		if(!$studentCoursesResult) {
	    	$_SESSION["errormsg"] = "ERROR: Can't get user info";
//	        header("Location: ../index.php");
	        exit;
		} else {
			while($row = mysqli_fetch_assoc($studentCoursesResult)) {						
				echo "<li><a href='".$rootDir."/view/course.php?courseID=".$row['courses_id']."'>".$row['course_num']."</a></li>";
	 		}
		  }

	}
?>