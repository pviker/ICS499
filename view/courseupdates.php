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
			    		<h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> Updates</h3>
			  		</div>
				  	<div class="panel-body">
				  		<?php require '../includes/getcourseupdates.php'; ?>
				  	</div>
				</div>
	    	</div>
		</div>
	
	</div>

	

</body>
</html>