<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Materials</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<a href="<?php echo $rootDir ?>/view/course.php?courseID=1" class="list-group-item">Week 1</a>
							<a href="<?php echo $rootDir ?>/view/course.php?courseID=2" class="list-group-item">Week 2</a>
							<a href="<?php echo $rootDir ?>/view/course.php?courseID=3" class="list-group-item">Week 3</a>
						</div>
				  	</div>
				</div>
	    	</div>
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Assignments due for course: <?php echo $_SESSION['selectedCourse']; ?></h3>
			    		
			  		</div>
				  	<div class="panel-body">
				    	<p>*DB query for past 30 days for currently selected course</p>
				  	</div>
				</div>
			</div>
		</div>
	
	</div>

	

</body>
</html>