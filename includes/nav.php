<?php 

	require 'conditionalpermissions.php';
	
	/** NOW INCLUDED IN REQUIRED SCRIPT ABOVE (/includes/conditionalpermissions.php) **/

// 	if(isset($_SESSION["username"])){
// 	 	if($_SESSION['username'] == ""){
// 		 	$_SESSION['errormsg'] = "Please login to continue";
// 		 	header("Location: " . $rootDir . "/index.php");
// 		}
// 	} else {
// 		$_SESSION['errormsg'] = "Please login to continue";
// 		header("Location: " . $rootDir . "/index.php");
// 	}

//  	if(isset($_SESSION['username'])){
//  		$username = $_SESSION['username'];
//  	} else $username = "No Username";
 	
//  	if(isset($_GET['courseID'])){
//  		$selectedCourse = $_GET['courseID'];
//  	} else if(isset($_SESSION['selectedCourse'])){
//  		$selectedCourse = $_SESSION['selectedCourse'];
//  	} else $selectedCourse = "TLH";

?>

<div class="container-fluid">

	<div class="jumbotron mainheader text-center">	
		<h1 class="head-logo">The Learning Hub</h1>
	</div>
	
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        	<span class="icon-bar"> </span>
	        	<span class="icon-bar"> </span>
	        	<span class="icon-bar"> </span>                        
	      	</button>
	    	<a class="navbar-brand" href="<?php echo $rootDir ?>/view/course.php?courseID=<?php echo $selectedCourse; ?>">Course: <?php echo $selectedCourse; ?></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	    	<ul class="nav navbar-nav">
	    	
	        	<?php
	        		$server = $_SERVER['PHP_SELF'];
	        		$pos = strpos($server, "landing");
	        		
	        		if ($pos !== false) {
	        			$active = "active";
	        		} else {
	        			$active = "";
	        		}
		        ?>
		        
	        	<li class="<?php echo $active; ?>"><a href="<?php echo $rootDir ?>/view/landing.php">Home</a></li>
	        		        	<?php
	        		$server = $_SERVER['PHP_SELF'];
	        		$pos = strpos($server, "course");
	        		
	        		if ($pos !== false) {
	        			$active = "active";
	        		} else {
	        			$active = "";
	        		}
		        ?>
		        
	        	<li class="dropdown <?php echo $active; ?>">
	          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Courses<span class="caret"> </span></a>
	        		<ul class="dropdown-menu">
	            		<li><a href="<?php echo $rootDir ?>/view/course.php?courseID=1">Course 1</a></li>
	            		<li><a href="<?php echo $rootDir ?>/view/course.php?courseID=2">Course 2</a></li>
	            		<li><a href="<?php echo $rootDir ?>/view/course.php?courseID=3">Course 3</a></li>
	        		</ul>
	        	</li>
	        	
	        	<?php
	        		$server = $_SERVER['PHP_SELF'];
	        		$pos = strpos($server, "content");
	        		
	        		if ($pos !== false) {
	        			$active = "active";
	        		} else {
	        			$active = "";
	        		}
		        ?>
		        
		        <?php if(isset($_SESSION['selectedCourse']) || isset($_GET['courseID'])){ ?>
		        	<li class="dropdown <?php echo $active; ?>">
		          		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Class Info<span class="caret"> </span></a>
		          		<ul class="dropdown-menu">
				            <li><a href="<?php echo $rootDir ?>/view/content/materials.php">Class Materials</a></li>
				            <li><a href="<?php echo $rootDir ?>/view/content/forum.php">Discussion Forum</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="<?php echo $rootDir ?>/view/content/assignments.php">Assignments</a></li>
				            <li><a href="<?php echo $rootDir ?>/view/content/dropbox.php">Dropbox</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="<?php echo $rootDir ?>/view/content/grades.php">Grades</a></li>
		          		</ul>
		        	</li>
	        	<?php } ?>
	        	
	        	<?php
	        		$server = $_SERVER['PHP_SELF'];
	        		$pos = strpos($server, "contact");
	        		
	        		if ($pos !== false) {
	        			$active = "active";
	        		} else {
	        			$active = "";
	        		}
		        ?>
		        
	     		<li class="dropdown <?php echo $active; ?>">
	         		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact<span class="caret"> </span></a>
	          		<ul class="dropdown-menu">
	            		<li><a href="#">Instructor</a></li>
	            		<li><a href="#">Classmates</a></li>
	          		</ul>
	        	</li>
<!-- 	     		<li><a href="#">My Profile</a></li> -->
	      	</ul>
	      	<ul class="nav navbar-nav navbar-right">
	        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $username; ?></a></li>
	        	<li><a href="<?php echo $rootDir ?>/controllers/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	      	</ul>
	      	<p class="navbar-text navbar-right">Welcome, FirstName LastName</p>
	    </div>
	</nav>
	
</div>