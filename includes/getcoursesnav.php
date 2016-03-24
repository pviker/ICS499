<?php

//	require '../controllers/db.php';

	if(isset($_SESSION['studentid'])){
		$studentid = $_SESSION['studentid'];
	} else {
		$_SESSION['errormsg'] = "Can't retrieve courses.";
		header("Location: ../index.php");
	}

	$getStudentCourses = "select courses.courses_id, courses.course_num, courses.course_name
							from student_courses, courses, student
							where student_courses.student_id=student.student_id
							and student_courses.course_id=courses.courses_id
							and student.student_id='".$studentid."' order by course_num";

	$studentCoursesResult = mysqli_query($conn, $getStudentCourses);
	
	if(!$studentCoursesResult) {
    	$_SESSION["errormsg"] = "ERROR: Can't get user info";
        header("Location: ../index.php");
        exit;
	} else {
		while($row = mysqli_fetch_assoc($studentCoursesResult)) {						
			echo "<li><a href='".$rootDir."/view/course.php?courseID=".$row['courses_id']."'>".$row['course_num']."</a></li>";
 		}
	  }


?>