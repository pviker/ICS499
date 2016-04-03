<?

include ("../controllers/db.php");

if(isset($_POST["btn-upload"])) {
    
    
    $file_name = $_FILES["myFile"]["name"];
    $file_size = $_FILES["myFile"]["size"];
    $file_type = $_FILES["myFile"]["type"];
    $file_temp = $_FILES["myFile"]["tmp_name"];
    
    $open_file = fopen($file_temp, "r");
    $file_content = fread($open_file, $file_size);
    $file_content = addslashes($file_content);
    fclose($open_file);
    
    
    
    $insert_query = "insert into dropbox (file_name, file_type, file_size, file_content) values
    ('" . $file_name . "','" . $file_type . "','" . $file_size . "','" . $file_content . "')";
    
    mysqli_query($conn, $insert_query);
        
}

?>