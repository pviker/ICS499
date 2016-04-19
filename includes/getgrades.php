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
    
    $query1 = "select student_id from student, user
                       where student.user_id=user.user_id
                       and user.username='" . $_SESSION["username"] . "'";
                       
    $result1 = mysqli_query($conn, $query1);
    
    $studentIDRow = mysqli_fetch_assoc($result1);
    $student_id = $studentIDRow["student_id"];         

	$getCourseAssignments = "SELECT name, max_points, assignments_id 
								FROM assignments
    							WHERE courses_id=".$course;
	
//	echo $getCourseAssignments;

	$assignmentResults = mysqli_query($conn, $getCourseAssignments);
	
	if(!$assignmentResults) {
    	$_SESSION["errormsg"] = "ERROR: Can't get user info";
       // header("Location: ../index.php");
        exit;
	} else {
		$maxPointsTotal = 0;
		$totalPoints = 0;
		while($row = mysqli_fetch_assoc($assignmentResults)) {
			
			$maxPointsTotal += $row['max_points'];
		    
            echo "<tr>".
                 "<td>".$row['name']."</td>";
                 
                 $query3 = "select count(*) from grades
                       where student_id =" . $student_id . 
                       " and assignments_id =" . $row["assignments_id"];
                       
                 $result3 = mysqli_query($conn, $query3);
                 
                 $row3 = mysqli_fetch_assoc($result3);
                 
             if($row3['count(*)'] == 1) {
                     
                 $query2 = "select points_received from grades
                       where student_id =" . $student_id . 
                       " and assignments_id =" . $row["assignments_id"];
                       
                       // echo $query2;
                 // $max_points = $row['max_points'];
                       
                 $result2 = mysqli_query($conn, $query2);
            
                 
                 while($row2 = mysqli_fetch_assoc($result2)) {
                 	$totalPoints += $row2['points_received'];
                 	
                    echo "<td>".$row2['points_received']."</td>";
                  
                 } 
            
            } else {
                    
                echo "<td>No grade posted</td>";
            }

           echo "<td>". $row["max_points"] ."</td></tr>";    
 		
	  }

}
?>