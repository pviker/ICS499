<?php

	if (!isset($_SESSION)) session_start();
	
// 	if(isset($_POST['username'])){
// 		$_SESSION['username'] = $_POST['username'];
// 	}

	require("db.php");
	
	if(isset($_POST['submit'])) {   
		$username = $_POST['username'];
		$password = $_POST['password'];
		$_SESSION['username'] = $username;
	}  
	
	if((!isset($username)) || (!isset($password))) {
		header("Location: ../index.php");
	} 

    else {	
    
	    $query = "select count(*) from user where username = '" . $username . "' and 
	    password = sha1('" . $password . "')";
	    
	    $result = mysqli_query($conn, $query);
	    
	    header("Location: ../view/landing.php");
        
	    
	    // need to query to session variables for
	    // user.user_id, user.username, student.first_name, student.last_name, student_courses.course_id, courses.course_num, courses.courses_name

//         $userInfoQuery = "select user.user_id, user.username, student.first_name, student.last_name, student_courses.course_id, 
//         		courses.course_num, courses.courses_name from user, student, student_courses, courses where user.user_id=student.user_id 
//        			and user.username='" . $username . "'";
        
//        $userInfoResult = mysqli_query($conn, $userInfoQuery);
    
// 	    if(!$result || !$userInfoResult) {
	        
//             $_SESSION["errormsg"] = "ERROR: Cannot run query.";
//             header("Location: ../index.php");
//             exit; 
// 	    }
    
//	    $userRow = mysqli_fetch_assoc($userInfoResult);
	    
// 	    $row = mysqli_fetch_row($result);
// 	    $count = $row[0];
	    
// 	    if($count > 0) {
	  
// 		    $idQuery = "select id from credentials2 where username = '".$username."'" ; 
// 		    $result = mysqli_query($conn, $idQuery);
// 		    $row = mysqli_fetch_assoc($result);
			
// 		    $_SESSION['userID'] = $row['id']; 
// 	        $_SESSION['uname'] = $username;        
// 	        $_SESSION['confirmMessage'] = "Welcome " . $_SESSION['uname'];
// 	        $_SESSION['adminFlag'] = 0;
// 	        $_SESSION['currentYear'] = 2015;
	        
	       
// 			header("Location: ../view/landing.php");
	        
// 	    }else {
	      	
// 			$_SESSION["message"] = "Your username or password are not correct. Please try again.";
// 			header("Location: ../index.php");
// 	        exit;
	       
// 	     }
	}

?>