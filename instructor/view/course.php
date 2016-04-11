<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/21/16
 * Filename: landing.php
 * Description: This is the primary VIEW landing page after
 * 				a user successfully logs in.
 *
 *****************************************************************/

	include '../../includes/header.php';
	include '../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
	    	<div class="col-sm-10 col-sm-offset-1">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">What would you like to do?</h3>
			  		</div>
				  	<div class="panel-body">
				        <div class="list-group">
							<a href="<?php echo $rootDir ?>/instructor/view/content/addcourseupdate.php" class="list-group-item">
								<h4 class="list-group-item-heading">Update Course</h4>
								<p class="list-group-item-text">...</p>
							</a>
							<a href="<?php echo $rootDir ?>/instructor/view/content/addcoursematerials.php" class="list-group-item">
								<h4 class="list-group-item-heading">Add Course Materials</h4>
								<p class="list-group-item-text">...</p>
							</a>
							<a href="<?php echo $rootDir ?>/instructor/view/content/adddiscussionpost.php" class="list-group-item">
								<h4 class="list-group-item-heading">Create Discussion Post</h4>
								<p class="list-group-item-text">...</p>
							</a>
							<a href="<?php echo $rootDir ?>/instructor/view/content/addassignment.php" class="list-group-item">
								<h4 class="list-group-item-heading">Add Assignments</h4>
								<p class="list-group-item-text">...</p>
							</a>
							<a href="<?php echo $rootDir ?>/instructor/view/viewcoursestudents.php" class="list-group-item">
								<h4 class="list-group-item-heading">Student Classlist</h4>
								<p class="list-group-item-text">...</p>
							</a>
							<a href="<?php echo $rootDir ?>/instructor/view/viewdropbox.php" class="list-group-item">
								<h4 class="list-group-item-heading">Dropbox</h4>
								<p class="list-group-item-text">...</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/content/grades.php" class="list-group-item">
								<h4 class="list-group-item-heading">Update Grades</h4>
								<p class="list-group-item-text">...</p>
							</a>
						</div>
				  	</div>
				</div>	
	    	</div>
<!-- 	    	<div class="col-sm-6"> -->
<!--   			<div class="panel panel-primary" style="border-color: #696053;"> -->
<!-- 			  		<div class="panel-heading panel-head"> -->
<!-- 			    		<h3 class="panel-title">Assignments due soon?</h3> -->
			    		
<!-- 			  		</div> -->
<!-- 				  	<div class="panel-body"> -->
<!-- 				    	<p>*DB query for past 30 days and sort by what's due soonest</p> -->
<!-- 				  	</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</div>
	
	</div>

	

</body>
</html>