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

	include '../../includes/header.php';
	include '../includes/nav.php';

?>

	<div class="container-fluid">
		
		<div class="row">
	    	<div class="col-sm-6 col-sm-offset-3">
	    	    <?php
	    	     if(isset($_SESSION['passConfirmMessage'])) {
     
     echo $_SESSION['passConfirmMessage'];
     unset($_SESSION['passConfirmMessage']);
 }
                 
 ?>
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Select Course</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
				    		<?php require '../includes/getcourses.php'; ?>
						</div>
				  	</div>
				</div>	
	    	</div>
		</div>
	
	</div>

	

</body>
</html>