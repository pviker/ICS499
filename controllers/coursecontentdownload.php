<?

include ("db.php");

if(isset($_GET["course_content_id"])) {
    
    $course_content_id = $_GET['course_content_id'];
    
    $query = "select * from course_content where course_content_id ='" . $course_content_id . "'";
    
    $result = mysqli_query($conn, $query);
    
    $row = mysqli_fetch_assoc($result);
    
    $file_content = $row["file_content"];
    $file_size = $row["file_size"];
    $file_type = $row["file_type"];
    $file_name = $row["file_name"];
    
header("Content-length: $file_size");
header("Content-type: $file_type");
header("Content-Disposition: attachment; filename=$file_name");
echo $file_content;

    
}







?>