<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/25/16
 * Filename: getdiscussionreplies.php
 * Description: Retrieves from database discussion_post_reply information
 * 				based on selected post from user.
 *
 **************************************************************************/


	if(isset($_SESSION['selectedCourse'])){
		$selectedCourse = $_SESSION['selectedCourse'];
	} else {
		$_SESSION['errormsg'] = "Can't retrieve courses.";
		header("Location: ../index.php");
	}
	
	$postID = $_GET['postID'];
	
	$query = "SELECT student_id, title, body, date, time FROM discussion_reply where discussion_post_id=".$postID;
	
	$results = mysqli_query($conn, $query);
	
	//echo $query;
	
	if(!$results) {
		$_SESSION["errormsg"] = "ERROR: Can't get course updates info";
		//header("Location: ../index.php");
		exit;
	} else {
		while($row = mysqli_fetch_assoc($results)) {
			
			$student_id = $row['student_id'];
			$title = $row['title'];
			$body = $row['body'];
			$date = $row['date'];
			$time = $row['time'];
			
			$query2 = "SELECT first_name, last_name from student where student_id=".$student_id;
			$results2 = mysqli_query($conn, $query2);
			
			$row = mysqli_fetch_assoc($results2);
				$firstName = $row['first_name'];
				$lastName = $row['last_name'];

			echo "<div class='panel panel-default'>
					  <div class='panel-heading'>
						  <h5 class='panel-title'>" . $title . "</small></h6>
						  <h6 class='panel-title'>
						  		<small>
						  			Posted by <strong>".$firstName." ".$lastName."</strong> on ".$date." at ".$time."
						  		</small>
						  </h6>
				  	  </div>				 
						  <div class='panel-body'>".$body."</div>
				  </div>";
		}
	}

?>