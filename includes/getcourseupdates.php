<?php

//	require '../controllers/db.php';

	if(isset($_SESSION['selectedCourse'])){
		$selectedCourse = $_SESSION['selectedCourse'];
	} else {
		$_SESSION['errormsg'] = "Can't retrieve courses.";
		header("Location: ../index.php");
	}

	$getCourseUpdates = "SELECT title, body, date 
							FROM course_updates 
							WHERE courses_id='".$selectedCourse."' order by date";

	$courseUpdatesResults = mysqli_query($conn, $getCourseUpdates);
	
	if(!$courseUpdatesResults) {
    	$_SESSION["errormsg"] = "ERROR: Can't get course updates info";
        header("Location: ../index.php");
        exit;
	} else {
		while($row = mysqli_fetch_assoc($courseUpdatesResults)) {
			//echo "<a href='".$rootDir."/view/course.php?courseID=".$row['courses_id']."' class='list-group-item'>".$row['course_num']."</a>";
			echo "<div class='alert alert-info role='alert'>
						
						<strong>".$row['date']."</strong> | 
						<strong>".$row['title']."</strong><br>
								".$row['body']."
				  </div>";
 		}
	  }


?>