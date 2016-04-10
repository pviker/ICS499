<?

if (!isset($_SESSION)) session_start();

include '../../controllers/db.php';

$assignments_query = "select assignments.assignments_id, name, file_content, first_name, last_name, dropbox.title, dropbox.date, dropbox.student_id,
                      dropbox.dropbox_id
							from assignments, dropbox, student 
							where assignments.assignments_id=dropbox.assignments_id 
							and dropbox.student_id=student.student_id 
							and assignments.assignments_id='" . $assignments_id . "' 
							and assignments.courses_id = '" . $_SESSION["selectedCourse"] . "' 
							and assignments.dropbox_flag='1' and dropbox.file_content!='null'";

$assignments_results = mysqli_query($conn, $assignments_query);

$row_count = mysqli_num_rows($assignments_results);





?>