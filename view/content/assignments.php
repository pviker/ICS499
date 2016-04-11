<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
	
		<?php if(isset($_SESSION['msg'])){?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Success!</strong> Class update posted.
			</div>
		<?php } unset($_SESSION['msg']);?>
		<?php if(isset($_SESSION['errormsg3'])){?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Oh Snap!</strong> Your update was not posted, please try again.
			</div>
		<?php } unset($_SESSION['errormsg3']);?>
		
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> -- Assignments</h3>
			    		
			  		</div>
				  	<div class="panel-body">
				    	<div class="table-responsive">
		                    <table class="table table-striped">
						    	<thead>
						    		<tr>
						    			<th>Assignment</th>
						    			<th>Description</th>
						    			<th>Due Date</th>
						    			<th>Points</th>	
						    			<th>Submit</th>
						    		</tr>
						    			<?php include '../../includes/getcourseassignments.php'; ?>
					    		</thead>
					    	</table>
					    </div>
				  	</div>
				</div>
			</div>
		</div>
	
	</div>

	

</body>
</html>