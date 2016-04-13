<!DOCTYPE html>
<body>
    
<?php

include '../controllers/db.php';

if(isset($_GET["assignments_id"])) {
    
$assignments_id = $_GET["assignments_id"];    
    
$pointsQuery = "select max_points from assignments
          where assignments_id='" . $assignments_id . "'";        
    
$pointsResult = mysqli_query($conn, $pointsQuery);

$pointsRow = mysqli_fetch_assoc($pointsResult);

$maxPoints = $pointsRow["max_points"];

mysqli_free_result($pointsResult);

// echo $maxPoints;

$studentQuery = "select first_name, last_name, file_size from dropbox, student
                 where dropbox.assignments_id='" . $assignments_id . "'
                 and dropbox.student_id=student.student_id
                 order by last_name asc";
                 
$studentResult = mysqli_query($conn, $studentQuery); 
    
while($studentRow = mysqli_fetch_assoc($studentResult)) {
    
    echo $maxPoints . " " . $studentRow["first_name"] . " " . $studentRow["last_name"] . " " . $studentRow["file_size"] . "<br>";
    
    
}
    
    
}  
    
    
?>    
 
</body>
</html>