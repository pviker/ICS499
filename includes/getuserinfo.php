<?php

	require '../controllers/db.php';
	
	$query = 'select student_courses.student_id, courses.course_num, student.first_name, student.last_name
				from student_courses, courses, student 
    			where student_courses.student_id=student.student_id
    			and student_courses.course_id=courses.courses_id
    			and student.student_id=1'';