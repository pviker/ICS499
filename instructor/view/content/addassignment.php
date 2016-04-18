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

	include '../../../includes/header.php';
	include '../../includes/nav.php';
	

?>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script>
		$(function() {
			$( "#datepicker" ).datepicker();
		});
	</script>

	<div class="container-fluid">
	
		<?php if(isset($_SESSION['msg'])){?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Success!</strong> New assignment added for <?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?>.
			</div>
		<?php } unset($_SESSION['msg']);?>
		<?php if(isset($_SESSION['errormsg4'])){?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Oh Snap!</strong> Your assignment was not added, please try again.
			</div>
		<?php } unset($_SESSION['errormsg4']);?>
		
		<!-- FORM START -->
		<div class="row">
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Add assignments for <?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?></h3>
			  		</div>
				  	<div class="panel-body">
						<form role="form" action="<?php echo $rootDir ?>/instructor/controllers/persistaddassignment.php" method="post" enctype="multipart/form-data">
						
							<input type="hidden" id="courseID" name="courseID" value="<?php echo $_SESSION['selectedCourse']; ?>">
							<div class="form-group">
								<label for="title">Title</label>
							    <input type="text" class="form-control <?php echo $status; ?>" id="title" name="title" placeholder="ie. Reading Assignment 1">
						  	</div>
						  	<div class="form-group">
						  		<label for="description">Description</label>
						  		<input type="text" class="form-control <?php echo $status; ?>" id="description" name="description" placeholder="Read chapters 1-n">
						  	</div>
						  	<div class="form-group">
						  		<label for="duedate">Due date</label>
						  		<input type="text" class="form-control <?php echo $status; ?>" id="datepicker" name="datepicker">
						  	</div>
						  	<div class="form-group">
						  		<label for="description">Max points</label>
						  		<input type="text" class="form-control <?php echo $status; ?>" id="points" name="points" placeholder="ie. 150">
						  	</div>
						  	<div class="checkbox">
								<label>
									<input type="checkbox" value="1" id="dropbox" name="dropbox">
									Select checkbox if you want to be able to make assignment uploadable
								</label>
							</div>
						 	<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" style="background-color: black; " >
						 		Add Assignment
						 	</button>
						</form>
				  	</div>
				</div>	
	    	</div>
	    	<!-- FORM END -->
	    	<div class="col-sm-6">
	    		<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Current Assignments for <?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?></h3>
			    		
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
						    		</tr>
						    			<?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'instructor/includes/getcourseassignments.php'; ?>
					    		</thead>
					    	</table>
					    </div>
				  	</div>
				</div>
			</div>
	    	</div>
	    	
		   	
		</div>
	</div>

</body>
</html>