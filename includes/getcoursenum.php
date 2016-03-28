<?php

//	require '../controllers/db.php';

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