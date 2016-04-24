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
						    		<form role="form" method="post" action="../../../controllers/submitreply.php?postID=<?php echo $_GET['postID']; ?>">
						    			<div class='panel-heading'>
							    			<div class="form-group">
											    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title">
										  	</div>
									  	</div>
									  	<div style="margin-left: 1em; margin-right: 1em;">
						    				<textarea id="txtarea" name="txtarea" placeholder="Post Body" ></textarea><br>
							    		</div>
							    		<div class="row">
							    			<div class="col-sm-4"></div>
								    		<div class="col-sm-4">
								    			<button type="submit" name="submit" value="submit" class="btn btn-default btn-block" ><span class="glyphicon glyphicon-share"></span> 
							 						Submit
							 					</button><br>
							 				</div>
							 				<div class="col-sm-4"></div>
							 			</div>
							 		</form>
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