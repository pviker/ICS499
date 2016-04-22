<?php

if(!isset($_SESSION)) {
     session_start(); }
     
 require("db.php");
 require("../includes/passwordValidate.php");
  
if(!isset($_SESSION['username'])) {
     header("Location: ../includes/login.php");
 }
 
 if(isset($_POST['Send'])) {
        
    $oldPassword = $_POST['oldPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    
    }
 

 
     passwordValidate($newPassword);
     
     $passQuery = "select password from user where username='" . $_SESSION['username'] . "'";
     
     $passResult = mysqli_query($conn, $passQuery);
     
     $passRow = mysqli_fetch_assoc($passResult);
     
     $dbPassword = $passRow['password'];
     
     if($dbPassword === sha1($oldPassword)) {
 
        if($newPassword === $confirmPassword) {
     
           $passUpdate = "update user set password = sha1('" . $newPassword . "')
           where username = '" . $_SESSION['username'] . "'";
           
           mysqli_query($conn, $passUpdate);
           
           $_SESSION['passConfirmMessage'] = "You have successfully changed your password.";
           
           header("Location: ../view/landing.php");
     
        } else {
     
     $_SESSION['passNotMatch'] = "Passwords do not match. Please try again.<br>";
     header("Location: ../view/changepasswordform.php");
     
        }
        
      }  else {
     
    $_SESSION['passNotMatch'] = "Passwords do not match. Please try again.<br>";
     header("Location: ../view/changepasswordform.php");
     
        }


?>