<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/17/16
 * Filename: getuserinfo.php
 * Description: Retrieves from the database user login information
 * 				sets session variables: first, last name, student_id
 *
 *****************************************************************/

	if (!isset($_SESSION)) session_start();
		// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	$pos = strpos($server, "localhost");
	if ($pos !== false) {
		$rootDir = "/thelearninghub/";
	} else {
		$rootDir = "";
	}
	
	//echo $_SERVER['DOCUMENT_ROOT'].$rootDir."view/content/forum/postreply.php";

	require $_SERVER['DOCUMENT_ROOT'].$rootDir.'controllers/db.php';
	
	
	// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	$pos = strpos($server, "localhost");
	if ($pos !== false) {
		$rootDir = "/thelearninghub/";
	} else {
		$rootDir = "";
	}
	
	//echo $_SERVER['DOCUMENT_ROOT'].$rootDir."view/content/forum/postreply.php";
	
	
	if(!isset($_SESSION['username'])){
		header("Location: ../index.php");
	} else{
		$getUserIdQuery = "select user.user_id from user where user.username='".$_SESSION['username']."'";
		$userIdResult = mysqli_query($conn, $getUserIdQuery);
	}
//	echo $getUserIdQuery;
	
	if(!$userIdResult) { 
		$_SESSION["errormsg"] = "ERROR: Can't get userid";
		header("Location: ../index.php");
		exit;
	} else {
		$row = mysqli_fetch_row($userIdResult);
		$userid = $row[0];
		$_SESSION['userid'] = $userid;
	}
	
//	echo $userid;
	
	$studentIdQuery = "select student.student_id from student where student.user_id=".$userid;	
	$studentIdResult = mysqli_query($conn, $studentIdQuery);
	
	if(!$studentIdResult) {
		$_SESSION["errormsg"] = "ERROR: Can't get student_id";
		header("Location: ../index.php");
		exit;
	} else {
		$row = mysqli_fetch_row($studentIdResult);
		$studentid = $row[0];
		$_SESSION['studentid'] = $studentid;
	}
	
//	echo $studentid;
	
 	$getUserInfoQuery = "select student_courses.student_id, courses.course_num, student.first_name, student.last_name
 							from student_courses, courses, student 
     						where student_courses.student_id=student.student_id
	   						and student_courses.course_id=courses.courses_id
     						and student.student_id='".$studentid."'";
 	
 	$userInfoResult = mysqli_query($conn, $getUserInfoQuery);
 	
 	if(!$userInfoResult) {
 		$_SESSION["errormsg"] = "ERROR: Can't get user info";
 		header("Location: ../index.php");
 		exit;
 	} else {
//   		$row = mysqli_fetch_assoc($userInfoResult);
//   		echo "<br>";
//   		print_r($row);
//   		echo "<br>";
 	}
 	
  	while($row = mysqli_fetch_assoc($userInfoResult)) {
 		
   		$_SESSION['firstName'] = $row['first_name'];
   		$_SESSION['lastName'] = $row['last_name'];
 	
// //   			echo $row['student_id']."<br>".
// //   				 $row['course_num']."<br>".
// //   				 $row['first_name']."<br>".
// //   				 $row['last_name']."<br>";
		
  	}
 	
 	if(isset($_SESSION['studentid'])){
 		$studentid = $_SESSION['studentid'];
 	} else {
 		$_SESSION['errormsg'] = "Can't retrieve courses.";
 		header("Location: ../index.php");
 	}
 	
//  	$getStudentCourses = "select courses.courses_id, courses.course_num, courses.course_name
// 							from student_courses, courses, student
// 							where student_courses.student_id=student.student_id
// 							and student_courses.course_id=courses.courses_id
// 							and student.student_id='".$studentid."'";
 	
//  	$studentCoursesResult = mysqli_query($conn, $getStudentCourses);
 	
// 	echo $getStudentCourses."<br>";
 	
//  	if(!$studentCoursesResult) {
//  		$_SESSION["errormsg"] = "ERROR: Can't get user info";
//  		header("Location: ../index.php");
//  		exit;
//  	} else {
//  		while($row = mysqli_fetch_assoc($studentCoursesResult)) {
// 	 		echo $row['courses_id']."<br>".
// 	 			 $row['course_num']."<br>".
// 	 			 $row['course_name']."<br>";
//  		}
//  	}


?>