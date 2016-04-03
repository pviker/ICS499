<?php 

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/17/16
 * Filename: nav.php
 * Description: This is the navigation header placed on all 
 * 				VIEW pages, requires DB to retrieve courses
 * 				for logged in user.
 *
 *****************************************************************/

	// checks if file system is on server and corrects root directory for absolute URL paths
	$server = $_SERVER['SERVER_NAME'];
	$pos = strpos($server, "localhost");
	if ($pos !== false) {
		$rootDir = "/thelearninghub/";
	} else {
		$rootDir = "";
	}
	
	//echo $_SERVER['DOCUMENT_ROOT'].$rootDir."view/content/forum/postreply.php";

	require $_SERVER['DOCUMENT_ROOT'].$rootDir.'instructor/includes/conditionalpermissions.php';
	require $_SERVER['DOCUMENT_ROOT'].$rootDir.'instructor/includes/getuserinfo.php';

?>

<!-- <div class="container-fluid"> -->

<!-- 	<div class="jumbotron mainheader text-center">	 -->
<!-- 		<h1 class="head-logo">The Learning Hub</h1> -->
<!-- 	</div> -->
	
	<nav class="navbar navbar-inverse">
		<div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        	<span class="icon-bar"> </span>
	        	<span class="icon-bar"> </span>
	        	<span class="icon-bar"> </span>     
	        	<span class="icon-bar"> </span>                     
	      	</button>
	    <!-- 	<a class="navbar-brand" href="<?php //echo $rootDir ?>/instructor/view/course.php?courseID=<?php //echo $selectedCourse; ?>">
	    		Course: <?php //echo $selectedCourse; ?></a> -->
	    	<a class="navbar-brand" href="<?php echo $rootDir ?>/instructor/view/landing.php">The Learning Hub <small>(Instructor Portal)</small></a>
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
		        
	        	<li class="<?php echo $active; ?>"><a href="<?php echo $rootDir ?>/instructor/view/landing.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
	        	
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
	          		<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Courses<span class="caret"> </span></a>
	        		<ul class="dropdown-menu">
				        <?php require $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursesnav.php'; ?>
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
		          		<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>&nbsp;&nbsp;<?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?><span class="caret"> </span></a>
		          		<ul class="dropdown-menu">
			          		<li><a href="<?php echo $rootDir ?>/view/course.php">Add Course Update</a></li>
				            <li><a href="<?php echo $rootDir ?>/view/content/materials.php">Add Course Materials</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="<?php echo $rootDir ?>/view/content/forum.php">Add Discussion Post</a></li>
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
		        
		        <?php if(isset($_SESSION['selectedCourse']) || isset($_GET['courseID'])){ ?>
	     		<li class="dropdown <?php echo $active; ?>">
	         		<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Contact<span class="caret"> </span></a>
	          		<ul class="dropdown-menu">
	            		<li><a href="<?php echo $rootDir ?>/view/contact/instructor.php?courseID=<?php echo $courseID; ?>">Instructor</a></li>
	            		<li><a href="<?php echo $rootDir ?>/view/contact/classmates.php?courseID=<?php echo $courseID; ?>">Classmates</a></li>
	          		</ul>
	        	</li>
	        	<?php } ?>
<!-- 	     		<li><a href="#">My Profile</a></li> -->
	      	</ul>
	      	<ul class="nav navbar-nav navbar-right">
	        	<li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?></a></li>
	        	<li><a href="<?php echo $rootDir ?>/controllers/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
	      	</ul>
	      	<?php //if(isset($_SESSION['selectedCourse'])){ ?>
	      		<!-- <p class="navbar-text navbar-right"> Selected course: <?php// include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?></p> -->
	      	<?php //} ?>
	    </div>
	</nav>
	
<!-- </div> -->