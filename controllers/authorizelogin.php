<?php

if (!isset($_SESSION)) session_start();

if(isset($_POST['username'])){
	$_SESSION['username'] = $_POST['username'];
}

//echo $_SESSION['username'];

header("Location: ../view/landing.php");


?>