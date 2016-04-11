<?php

	include ("../controllers/db.php");
	
	$date = date("m/d/Y");
	$date_object=date_create($date);
	date_add($date_object,date_interval_create_from_date_string("14 days"));
	$futureDate = date_format($date_object,"m/d/Y");
	
	$query = "select name, due_date, course_num from assignments, courses 
	          where assignments.courses_id=courses.courses_id
	          and due_date between'" . $date . "' and '" . $futureDate . "'
	          order by assignments.due_date asc";
	          
	$result = mysqli_query($conn, $query);

?>