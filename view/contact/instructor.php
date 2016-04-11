<?php

	if(!isset($_GET['courseID'])){
		header("Location: ../landing.php");
	} else $courseID = $_GET['courseID'];
	
	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-3"></div>
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> -- Instructor ContactInformation</h3>
			    		
			  		</div>
				  	<div class="panel-body">
				    	<div class="table-responsive">
		                    <table class="table table-striped">
						    	<thead>
						    		<tr>
						    			<th>Name</th>
						    			<th>Email</th>
						    		</tr>
						    			<?php include '../../includes/getinstructorinfo.php'; ?>
					    		</thead>
					    	</table>
					    </div>
				  	</div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	
	</div>

	

</body>
</html>