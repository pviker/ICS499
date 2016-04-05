<?

if (!isset($_SESSION)) session_start();

include ("db.php");

$content_query = "select course_content_id, title from course_content where courses_id = '" . $_SESSION["selectedCourse"] . "'";

$content_results = mysqli_query($conn, $content_query);

while($content_row = mysqli_fetch_assoc($content_results)) {
    
    echo "<a href = 'coursecontentdownload.php?course_content_id=" . $content_row["course_content_id"] . "'>" . 
    $content_row["title"] . "</a><br>"; 
    
    
}



?>