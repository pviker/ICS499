<?php

	include '../../../includes/header.php';
	include '../../../includes/nav.php';

?>

	<div class="container-fluid">
		<ol class="breadcrumb">
			<li><a href="../../landing.php" style="color: black">Home</a></li>
			<li><a href="../forum.php" style="color: black">Discussion Topics</a></li>
			<li class="active">Discussion Reply</li>
		</ol>
		
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Instructor Discussion</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<div class="panel-group" id="accordion">
						    	<div class="panel panel-default">
						    		<?php include '../../../includes/getdiscussionpost.php';?>
					    		</div>
					  		</div>
						</div>
			  		</div>
				</div>
    		</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="panel panel-primary" style="border-color: #696053;">
					<div class="panel-heading panel-head">
						<h3 class="panel-title">Post Reply</h3>
					</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<div class="panel-group" id="accordion">
						    	<div class="panel panel-default">
						    		<textarea id="txtarea"></textarea><br>
						    		<div class="row">
						    			<div class="col-sm-4"></div>
							    		<div class="col-sm-4">
							    			<button type="submit" name="submit" value="submit" class="btn btn-primary btn-block" style="background-color: black;" >
						 						Submit
						 					</button>
						 				</div>
						 				<div class="col-sm-4"></div>
						 			</div>
					    		</div>
					  		</div>
						</div>
			  		</div>
			  	</div>
			  	
		  	</div>		
		</div>
	</div>

</body>
</html>