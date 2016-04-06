<?

if (!isset($_SESSION)) session_start();

include '../../controllers/db.php';

$assignments_query = "select assignments_id, name from assignments where courses_id = '" . $_SESSION["selectedCourse"] . "' and 
dropbox_flag='1'";

$assignments_results = mysqli_query($conn, $assignments_query);


?>