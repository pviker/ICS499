<?php

	include '../../../includes/header.php';
	include '../../../includes/nav.php';

?>

	<div class="container-fluid">
		<ol class="breadcrumb">
			<li><a href="../../landing.php" style="color: black">Home</a></li>
			<li><a href="../forum.php" style="color: black">Discussion Forum</a></li>
			<li class="active">Discussion Reply</li>
		</ol>
		
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Discussion Board</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<div class="panel-group" id="accordion">
						    	<div class="panel panel-default">
						    		<?php include '../../../includes/getdiscussionpost.php';?>
<!-- 						      		<div class="panel-heading forum" data-toggle="collapse" data-parent="" href=""> -->
<!-- 						        		<h4 class="panel-title"> -->
<!-- 						          			1 - Post Title -->
<!-- 						        		</h4> -->
<!-- 						      		</div> -->
<!-- 						      		<div id="collapse1" class="panel-collapse collapse in"> -->
<!-- 						        		<div class="panel-body"> -->
<!-- 						        			<p class="lead">Post body</p> -->
<!-- 						        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, -->
<!-- 						        			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, -->
<!-- 						        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
<!-- 						        		</div> -->
<!-- 					      			</div> -->
					    		</div>
					  		</div>
						</div>
			  		</div>
				</div>
    		</div>
		</div>
		
		<textarea>Reply to posts here!</textarea><br>
		
	</div>

</body>
</html>