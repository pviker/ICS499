<?

	if (!isset($_SESSION)) session_start();
	
	include '../../controllers/db.php';
	
	$content_query = "select course_content_id, file_name, title 
						from course_content 
						where courses_id = '" . $_SESSION["selectedCourse"] . "'";
	
	$content_results = mysqli_query($conn, $content_query);


?>