<?php
    
if (!isset($_SESSION)) session_start();
    
    $query = "select name, assignments_id from assignments, courses
              where assignments.courses_id=courses.courses_id
              and courses.courses_id='" . $_SESSION["selectedCourse"] . "'";
              
    $result = mysqli_query($conn, $query); 
    
?>
    
