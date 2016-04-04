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
			    		<h3 class="panel-title">What would you like to do?</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
				    		<ul class="nav nav-pills">
							  <li role="presentation" class="active"><a href="#">Home</a></li>
							  <li role="presentation"><a href="#">Profile</a></li>
							  <li role="presentation"><a href="#">Messages</a></li>
							</ul>
						</div>
				  	</div>
				</div>	
	    	</div>
<!-- 	    	<div class="col-sm-6"> -->
<!--   			<div class="panel panel-primary" style="border-color: #696053;"> -->
<!-- 			  		<div class="panel-heading panel-head"> -->
<!-- 			    		<h3 class="panel-title">Assignments due soon?</h3> -->
			    		
<!-- 			  		</div> -->
<!-- 				  	<div class="panel-body"> -->
<!-- 				    	<p>*DB query for past 30 days and sort by what's due soonest</p> -->
<!-- 				  	</div> -->
<!-- 				</div> -->
<!-- 			</div> -->
		</div>
	
	</div>

	

</body>
</html>