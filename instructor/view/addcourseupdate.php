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
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Add an update for <?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?></h3>
			  		</div>
				  	<div class="panel-body">
				    	<form role="form" action="<?php echo $rootDir ?>/instructor/controllers/courseupdate.php?courseID=<?php echo $_SESSION['selectedCourse'];?>" method="post">
					<div class="form-group">
					    <input type="text" class="form-control <?php echo $status; ?>" id="username" name="username" placeholder="Title">
				  	</div>
					<div class="form-group">
						<textarea id="txtarea" name="txtarea" placeholder="Update Description" ></textarea><br>	    		
				  	</div>
				 	<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" style="background-color: black;" >
				 		Submit
				 	</button>
				</form>
				  	</div>
				</div>	
	    	</div>
		</div>
	</div>

</body>
</html>