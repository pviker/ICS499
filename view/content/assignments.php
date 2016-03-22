<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> -- Assignments</h3>
			    		
			  		</div>
				  	<div class="panel-body">
				    	<table class="table">
					    	<thead>
					    		<tr>
					    			<th>Assignment</th>
					    			<th>Description</th>
					    			<th>Due Date</th>
					    			<th>Points</th>	
					    		</tr>
					    			<?php include '../../includes/getcourseassignments.php'; ?>
				    		</thead>
				    	</table>
				  	</div>
				</div>
			</div>
		</div>
	
	</div>

	

</body>
</html>