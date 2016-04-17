<!DOCTYPE html>
<body>
    
    <?php
    
    if (!isset($_SESSION)) session_start();
    
    include '../controllers/db.php';
    
    // echo $_SESSION["selectedCourse"];
    
    $query = "select name, assignments_id from assignments, courses
              where assignments.courses_id=courses.courses_id
              
              and courses.courses_id='1'";
              
              // . $_SESSION["selectedCourse"];
              
    $result = mysqli_query($conn, $query); 
    
    while($row = mysqli_fetch_assoc($result)) {
        
        echo "<a href='showstudentsforgrades.php?assignments_id=" . $row["assignments_id"] . "'>" . $row["name"] . "</a><br>";
    }
    
    ?>
    
</body>
</html>