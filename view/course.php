<?php

	include '../includes/header.php';
	include '../includes/nav.php';
	
	if(isset($_GET['courseID'])){
		$courseID = $_GET['courseID'];
		$_SESSION['selectedCourse'] = $_GET['courseID'];
	}

?>

	<div class="container-fluid">
		<div class="row">
	    	<div class="col-sm-8 col-sm-offset-2">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">What would you like to do?</h3>
			  		</div>
				  	<div class="panel-body">
				        <div class="list-group">
							<a href="<?php echo $rootDir ?>/view/courseupdates.php" class="list-group-item">
								<h4 class="list-group-item-heading">Course Updates</h4>
								<p class="list-group-item-text">View updates from your instructor.</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/content/materials.php" class="list-group-item">
								<h4 class="list-group-item-heading">Course Materials</h4>
								<p class="list-group-item-text">View downloadable content posted by instructor.</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/content/forum.php" class="list-group-item">
								<h4 class="list-group-item-heading">Discussion Posts</h4>
								<p class="list-group-item-text">View and reply to discussion topics posted by instructor.</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/content/assignments.php" class="list-group-item">
								<h4 class="list-group-item-heading">Assignments</h4>
								<p class="list-group-item-text">View assignments posted by instructor.</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/content/grades.php" class="list-group-item">
								<h4 class="list-group-item-heading">Grades</h4>
								<p class="list-group-item-text">View your grades for selected course.</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/contact/instructor.php?courseID=<?php echo $courseID; ?>" class="list-group-item">
								<h4 class="list-group-item-heading">Instructor</h4>
								<p class="list-group-item-text">View instructor contact information.</p>
							</a>
							<a href="<?php echo $rootDir ?>/view/contact/classmates.php?courseID=<?php echo $courseID; ?>" class="list-group-item">
								<h4 class="list-group-item-heading">Classmates</h4>
								<p class="list-group-item-text">View class list and contact information.</p>
							</a>
						</div>
				  	</div>
				</div>	
	    	</div>
		</div>
	</div>

	

</body>
</html>