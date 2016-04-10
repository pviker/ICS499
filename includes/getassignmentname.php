<?php
	if(isset($_GET['assignmentID'])){
		$id = $_GET['assignmentID'];
	} else {
		//$_SESSION['errormsg'] = "Can't retrieve courses.";
		//		header("Location: ../index.php");
	}
	
	$query = "select assignments.name from assignments where assignments.assignments_id=". $id;
	
	$result = mysqli_query($conn, $query);
	
	if(!$result) {
		$_SESSION["errormsg"] = "ERROR: Can't get course_num";
		header("Location: ../index.php");
		exit;
	} else {
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['name'];
		}
	}


?>