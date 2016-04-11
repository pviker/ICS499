<?

if (!isset($_SESSION)) session_start();
include ("db.php");

if(isset($_POST["submit"])) {
    
    $file_name = $_FILES["myFile"]["name"];
    $file_size = $_FILES["myFile"]["size"];
    $file_type = $_FILES["myFile"]["type"];
    $file_temp = $_FILES["myFile"]["tmp_name"];
    $date = date("m/d/Y");
    $student_id = $_SESSION["studentid"];
    $assignments_id = $_POST["assignmentsid"];
    $title = $_POST["title"];
    
    if($file_size > 0 && $file_size < 2097152) {
    
	    $open_file = fopen($file_temp, "r");
	    $file_content = fread($open_file, $file_size);
	    $file_content = addslashes($file_content);
	    fclose($open_file);
	    
	    $insert_query = "insert into dropbox (assignments_id, student_id, title, file_name, file_type, file_size, file_content, date) values
	    ('" . $assignments_id . "','" . $student_id . "','" . $title . "','". $file_name . "','" . $file_type . "','" . $file_size . "','" 
	    . $file_content . "','" . $date . "')";
	    
	   if(mysqli_query($conn, $insert_query)){
	            
            $_SESSION['msg'] = "File uploaded successfully.";
         
            header("Location: ../view/content/assignments.php");
	            
	   } else {
	            
	        $_SESSION['errormsg3'] = "Error. File not uploaded.";
	          
	        header("Location: ../view/content/assignments.php");
	   	}
	        
	    } else {
	            
	        $_SESSION['errormsg3'] = "Error. File too large or not selected.";
	          
	        header("Location: ../view/content/assignments.php");
	    }
	        
	}

?>