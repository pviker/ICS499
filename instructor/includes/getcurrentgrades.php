<?php

	$gradeQuery = "select count(points_received), count(assignments_id), points_received
					from grades where student_id=" . $studentRow['student_id'] . "
					and assignments_id=" . $assignments_id;
		
	$gradeResult = mysqli_query($conn, $gradeQuery);
	$gradeRow = mysqli_fetch_assoc($gradeResult);
		
	if($gradeRow['count(points_received)'] == 0){
		$grade = "";
	} else $grade = $gradeRow['points_received'];

?>