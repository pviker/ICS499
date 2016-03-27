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
			<li><a href="../forum.php" style="color: black">Discussion Topics</a></li>
			<li class="active">View Post</li>
		</ol>
		<?php if(isset($_SESSION['msg'])){?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Success!</strong> Your reply has been posted.
			</div>
		<?php } unset($_SESSION['msg']);?>
		<?php if(isset($_SESSION['errormsg'])){?>
			<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Oh Snap!</strong> Your post was not submitted, please try again.
			</div>
		<?php } unset($_SESSION['errormsg']);?>
		<div class="row">
	    	<div class="col-sm-12">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Instructor Discussion</h3>
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
			    		<h3 class="panel-title">Student Replies</h3>
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