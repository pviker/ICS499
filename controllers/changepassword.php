<?php


 require("db.php");
 require("../includes/passwordValidate.php");
  
 if(!isset($_SESSION)) {
     session_start();
 }
   
if(!isset($_SESSION['username'])) {
     header("Location: ../includes/login.php");
 }
 
 if(isset($_POST['Send'])) {
        
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    
    }
 

 
     passwordValidate($newPassword);
     
     $passQuery = "select password from credentials2 where username='" . $_SESSION['uname'] . "'";
     
     $passResult = mysqli_query($connection, $passQuery);
     
     $passRow = mysqli_fetch_assoc($passResult);
     
     $dbPassword = $passRow['password'];
     
     if($dbPassword === sha1($oldPassword)) {
 
        if($newPassword === $confirmPassword) {
     
           $passUpdate = "update credentials2 set password = sha1('" . $newPassword . "')
           where username = '" . $_SESSION['uname'] . "'";
           
           mysqli_query($connection, $passUpdate);
           
           $_SESSION['passConfirmMessage'] = "You have successfully changed your password.";
           
           header("Location: ../index.php");
     
        } else {
     
     $_SESSION['passNotMatch'] = "Passwords do not match. Please try again.<br>";
     header("Location: changePasswordForm.php");
     
        }
        
      }  else {
     
    $_SESSION['passNotMatch'] = "Passwords do not match. Please try again.<br>";
     header("Location: changePasswordForm.php");
     
        }


?>