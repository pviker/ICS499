<!DOCTYPE html>
<body>
    
    <?php
    
    if (!isset($_SESSION)) session_start();
    
    include '../controllers/db.php';
    
    // echo $_SESSION["selectedCourse"];
    
    $query1 = "select name, max_points, assignments_id from assignments, courses
              where assignments.courses_id=courses.courses_id
              and dropbox_flag='1'
              and courses.courses_id='1'";
              
              // . $_SESSION["selectedCourse"];
              
    $result1 = mysqli_query($conn, $query1); 
    
    // $query2 = "select first_name, last_name from student, student_courses
               // where student.student_id=student_courses.student_id
               // and student_courses.course_id='". $_SESSION["selectedCourse"];        
//     
    // $result2 = mysqli_query($conn, $query2);
    
    while($row1 = mysqli_fetch_assoc($result1)) {
        
        echo "<a href='showstudentsforgrades.php?assignments_id=" . $row1["assignments_id"] . "'>" . $row1["name"] . "</a><br>";
    }
    
    ?>
    
      <!-- <form action="updategrades.php">
          Assignment:<br>
          <input type="text" name="assignment"><br>
          Max Points:<br>
          <input type="text" name="maxPoints"><br><br>
          <input type="submit" value="Submit">
</form> -->

</body>
</html>