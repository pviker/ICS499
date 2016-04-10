<?

include ("../../controllers/db.php");

if(isset($_GET["assignments_id"])) {
    
    $assignments_id = $_GET['assignments_id'];
    
    $query = "select * from dropbox where assignments_id ='" . $assignments_id . "'";
    
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