<?php

if(isset($_GET["assignments_id"])) {
    
$assignments_id = $_GET["assignments_id"];    
    
$pointsQuery = "select max_points from assignments
          where assignments_id='" . $assignments_id . "'";        
    
$pointsResult = mysqli_query($conn, $pointsQuery);

$pointsRow = mysqli_fetch_assoc($pointsResult);

$maxPoints = $pointsRow["max_points"];

mysqli_free_result($pointsResult);


$studentQuery = "select first_name, last_name, student.student_id from student, student_courses
                 where student_courses.student_id=student.student_id
                 and student_courses.course_id='" . $_SESSION["selectedCourse"] . "'
                 order by last_name asc";
                 
$studentResult = mysqli_query($conn, $studentQuery); 



}  
    
?>