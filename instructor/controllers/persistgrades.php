<?php

if (!isset($_SESSION)) session_start();

include '../../controllers/db.php';

if(isset($_POST['submit'])) {
	
	$_SESSION['selectedCourse'];
    
	
	$query = "select student.student_id from student, student_courses
                 where student_courses.student_id=student.student_id
                 and student_courses.course_id='" . $_SESSION["selectedCourse"] . "'
                 order by last_name asc";
	 
	$results = mysqli_query($conn, $query);

	echo "<br>Assignments ID: " . $_POST['assignments_id'];
	
	while($row = mysqli_fetch_assoc($results)){
		$student_id = $row['student_id'];
		$points = $_POST[$student_id];
		
// 		echo "<br>Student_id: " . $student_id;
// 		echo "<br>Points: " . $points;
		
		
		if($points !== ""){
			$query2 = "select count(points_received) from grades where student_id=" . $student_id;
			$results2 = mysqli_query($conn, $query2);
			
			$row2 = mysqli_fetch_assoc($results2);
			if($row2['count(points_received)'] != 0){
				// UPDATE DB
				$query3 = "update grades set points_received=" . $points . " where student_id=" . $student_id;

			} else {
				// INSERT DB
				$query3 = "insert into grades (assignments_id, student_id, points_received)
							values (" . $_POST['assignments_id'] . ", " . $student_id . ", " . $points . ")";

			}
			
			if(mysqli_query($conn, $query3)){
				$_SESSION['msg'] = "Grades have been updated successfully";
			}
			
			
		} 
		
	header("Location: ../view/updategradesview.php?assignments_id=" . $_POST['assignments_id']);
	
	}
    
    
    
}


?>