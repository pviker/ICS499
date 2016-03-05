


<div class="container-fluid">

<div class="jumbotron mainheader">
	<h1 class="text-center">Welcome to The Learning Hub</h1>
</div>

<?php 
	
	if(isset($_SESSION['errormsg'])){
		echo '<br><div class="alert alert-danger alert-dismissable" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span></button>
				<strong>' . $_SESSION['errormsg'] . '</strong></div>';
		unset($_SESSION['errormsg']);
	}
	
	

?>

		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="margin-top:3em;">
				<div class="well well-lg">
					<h1 style="margin-top: 0px;"><small>Sign In</small></h1>
					<form role="form" action="<?php echo $rootDir ?>/controllers/authorizelogin.php" method="post" >
						<div class="form-group">
<!-- 						    <label for="username">Username:</label> -->
						    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
					  	</div>
						<div class="form-group">
<!-- 						    <label for="pwd">Password:</label> -->
						    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
					  	</div>
				<!-- 	  	<div class="checkbox"> -->
				<!-- 	    	<label><input type="checkbox" id="saveUsername">Remember me</label> -->
				<!-- 	  	</div> -->
					 	<button type="submit" class="btn btn-primary btn-block" style="background-color: black;">Submit</button>
					</form>
				</div>
			</div>
			<div class="col-sm-4"></div>
		</div>
	
	</div>