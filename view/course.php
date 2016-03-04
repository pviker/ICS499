<?php

	include '../includes/header.php';
	include '../includes/nav.php';
	
	if(isset($_GET['courseID'])){
		$courseID = $_GET['courseID'];
		$_SESSION['selectedCourse'] = $_GET['courseID'];
	} else header("Location: landing.php");
	


?>

	<div class="container-fluid">
		
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Updates for course: <?php echo $courseID; ?></h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="alert alert-info alert-dismissible" role="alert">
						 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  		<span aria-hidden="true">&times;</span>
						  	</button>
						  	<strong>Update!</strong> This is a dismissable update for course updates <br>
						  		New line...<br>
						  		New line...
						</div>
						<div class="alert alert-info alert-dismissible" role="alert">
						 	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						  		<span aria-hidden="true">&times;</span>
						  	</button>
						  	<strong>Update!</strong> This is a dismissable update for course updates <br>
						  		New line...<br>
						  		New line...
						</div>
				  	</div>
				</div>
	    	</div>
		</div>
	
	</div>

	

</body>
</html>