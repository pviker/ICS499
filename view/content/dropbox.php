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
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
		
		<!-- FORM START -->
		<div class="row">
	    	<div class="col-sm-6 col-sm-offset-3">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Assignment Dropbox for <strong><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getassignmentname.php';?></strong></h3>
			  		</div>
				  	<div class="panel-body">
						<form role="form" action="<?php echo $rootDir ?>/controllers/dropboxupload.php" method="post" enctype="multipart/form-data">
						
							<input type="hidden" id="courseID" name="courseID" value="<?php echo $_SESSION['selectedCourse']; ?>">
							<input type="hidden" id="assignmentsid" name="assignmentsid" value="<?php echo $_GET['assignmentID']; ?>">
							<div class="form-group">
								<label for="title">Course materials title</label>
							    <input type="text" class="form-control <?php echo $status; ?>" id="title" name="title" placeholder="ie. syllabus">
						  	</div>
						  	<div class="form-group">
						  		<label for="fileinput">File input</label>
						  		<input class="" type="file" name="myFile" id="fileinput"/>
						  		<p class="help-block">Upload your document (valid filetypes: .pdf, .jpg, .doc, .txt)</p>
						  	</div>
						 	<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" style="background-color: black; " >
						 		Upload
						 	</button>
						</form>
				  	</div>
				</div>	
	    	</div>
	    	<!-- FORM END -->
	    	
		   	
		</div>
	</div>

</body>
</html>