<?php

    if(!isset($_SESSION)) { session_start(); }
    
	include ("../controllers/db.php");
	
	$date = date("m/d/Y");
	$date_object=date_create($date);
	date_add($date_object,date_interval_create_from_date_string("14 days"));
	$futureDate = date_format($date_object,"m/d/Y");
    
    $query1 = "select user_id from user
               where username ='" . $_SESSION['username'] . "'";
               
    $result1 = mysqli_query($conn, $query1);
    
    $row1 = mysqli_fetch_assoc($result1);
    
    $user_id = $row1['user_id'];
    
    mysqli_free_result($result1);
    
    $query2 = "select student_id from student
               where user_id=" . $user_id;
               
    $result2 = mysqli_query($conn, $query2);
    
    $row2 = mysqli_fetch_assoc($result2);
    
    $student_id = $row2['student_id'];
    
    mysqli_free_result($result2);
    
    $query3 = "select course_id from student_courses
               where student_id=" . $student_id . 
               " order by course_id asc";
               
    $result3 = mysqli_query($conn, $query3);
    
    

?>