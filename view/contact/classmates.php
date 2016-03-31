<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-3"></div>
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> -- Classmate Contact Information</h3>
			    		
			  		</div>
				  	<div class="panel-body">
				    	<table class="table">
					    	<thead>
					    		<tr>
					    			<th>Name</th>
					    			<th>Email</th>
					    		</tr>
					    			<?php include '../../includes/getclassmateinfo.php'; ?>
				    		</thead>
				    	</table>
				  	</div>
				</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
	
	</div>

	

</body>
</html>