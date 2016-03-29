<?php

	if(!isset($_GET['courseID'])){
		header("Location: ../landing.php");
	} else $courseID = $_GET['courseID'];
	
	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-2"></div>
	    	<div class="col-sm-8">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> Instructor Contact Information</h3>
			  		</div>
			  		<div class="panel-body">
			  			
			  			<?php require '../../includes/getinstructorinfo.php';?>
			  		</div>
				</div>
	    	</div>
	    	<div class="col-sm-2"></div>
		</div>
	
	</div>

	

</body>
</html>