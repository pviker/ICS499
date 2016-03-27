<?php

	if(!isset($_GET['postID'])){
		$_SESSION['errormsg'] = "Please select a post to view replies";
		header("Location: ../view/landing.php");
	}

	include '../../../includes/header.php';
	include '../../../includes/nav.php';

?>

	<div class="container-fluid">
		<ol class="breadcrumb">
			<li><a href="../../landing.php" style="color: black">Home</a></li>
			<li><a href="../forum.php" style="color: black">Discussion Forum</a></li>
			<li class="active">Discussion Topic</li>
		</ol>
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Discussion Topic</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<div class="panel-group">
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
			    		<h3 class="panel-title">Discussion Replies</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<div class="panel-group">
						    	<?php include '../../../includes/getdiscussionreplies.php';?>
					  		</div>
						</div>
			  		</div>
				</div>
    		</div>
		</div>
	</div>

</body>
</html>