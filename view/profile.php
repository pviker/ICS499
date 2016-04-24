<?php

	include '../includes/getuserinfo.php';
	include '../includes/header.php';
	include '../includes/nav.php';
	
	if(isset($_GET['courseID'])){
		$courseID = $_GET['courseID'];
		$_SESSION['selectedCourse'] = $_GET['courseID'];

	}

?>

	<div class="container-fluid">
		<div class="row">
	    	<div class="col-sm-6 col-sm-offset-3">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Profile Information</h3>
			  		</div>
				  	<div class="panel-body">
				        <p class="lead">
					        Username: <?php echo $username; ?> <br>
					        Name: <?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?><br>
					        Email: <?php echo $_SESSION['email']; ?> <br>
				        </p>
				        <a href="changepasswordform.php" class="btn btn-default"><span class="glyphicon glyphicon-lock"></span> Change Password</a>
				        
				  	</div>
				</div>	
	    	</div>
		</div>
	</div>

	

</body>
</html>