<?php 

	
	if(isset($_SESSION['instructorFlag'])){
		if($_SESSION['instructorFlag'] == 1) {
			
			$query = "select courses_id, course_num, course_name from courses where instructor_id=".$_SESSION['instructorID'];
			$result = mysqli_query($conn, $query);
			
			if(!$result) {
				echo "There was an error getting courses";
			} else {
				while($row = mysqli_fetch_assoc($result)) {
					echo "<a href='".$rootDir."/view/course.php?courseID=".$row['courses_id']."'>".$row['course_num']."</a>";
				
// 					echo "<a href='".$rootDir."/view/course.php?courseID=".$row['courses_id']."' class='list-group-item'>".$row['course_num']." -
// 					".$row['course_name']."</a>";
				}
			}
		}
	}
		
		
?>