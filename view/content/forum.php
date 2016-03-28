<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';

?>

	<div class="container-fluid">
	
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
						      		<div class="panel-heading forum" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
						        		<h4 class="panel-title" style="padding-bottom: .3em">
						          			1 - Post Title
						        		</h4>
						      		</div>
						      		<div id="collapse1" class="panel-collapse collapse in">
						        		<div class="panel-body">
						        			<p class="lead">Post body</p>
						        			<p>
							        			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        			</p>
						        			<div class="dropdown">
												<button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<!-- 														Action<span class="caret"></span> -->
												<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
													<li><a href="forum/postview.php?postID=1"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a></li>
													<li><a href="forum/postreply.php?postID=1"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</a></li>												
	<!-- 												<li role="separator" class="divider"></li> -->
	<!-- 												<li><a href="#">Separated link</a></li> -->
												</ul>
											</div>
												
<!-- 						        			<br> -->
<!-- 						        			<div class="list-group"> -->
<!-- 												<div class="panel-group" id="accordion"> -->
<!-- 											    	<div class="panel panel-default"> -->
<!-- 											      		<div class="panel-heading forum" data-toggle="collapse" data-parent="#accordion" href="#replycollapse1"> -->
<!-- 											        		<h4 class="panel-title"> -->
<!-- 											          			1 - Post Title -->
<!-- 											        		</h4> -->
<!-- 											      		</div> -->
<!-- 											      		<div id="replycollapse1" class="panel-collapse collapse in"> -->
<!-- 											        		<div class="panel-body"> -->
<!-- 											        			<p class="lead">Post body</p> -->
<!-- 											        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, -->
<!-- 											        			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, -->
<!-- 											        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
<!-- 											        		</div> -->
<!-- 										      			</div> -->
<!-- 										    		</div> -->
<!-- 											    	<div class="panel panel-default"> -->
<!-- 											      		<div class="panel-heading forum" data-toggle="collapse" data-parent="#accordion" href="#replycollapse2"> -->
<!-- 											        		<h4 class="panel-title"> -->
<!-- 											          			2 - Post title -->
<!-- 											        		</h4> -->
<!-- 											      		</div> -->
<!-- 											      		<div id="replycollapse2" class="panel-collapse collapse"> -->
<!-- 											        		<div class="panel-body"> -->
<!-- 											        			<p class="lead">Post body</p> -->
<!-- 											        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, -->
<!-- 											       				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, -->
<!-- 											        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
<!-- 										        			</div> -->
<!-- 										      			</div> -->
<!-- 										    		</div> -->
<!-- 											    	<div class="panel panel-default"> -->
<!-- 											    		<div class="panel-heading forum" data-toggle="collapse" data-parent="#accordion" href="#replycollapse3"> -->
<!-- 											        		<h4 class="panel-title"> -->
<!-- 											          			3 - Post title -->
<!-- 											        		</h4> -->
<!-- 											      		</div> -->
<!-- 											      		<div id="replycollapse3" class="panel-collapse collapse"> -->
<!-- 											        		<div class="panel-body"> -->
<!-- 											        			<p class="lead">Post body</p> -->
<!-- 											        			Lorem ipsum dolor sit amet, consectetur adipisicing elit, -->
<!-- 											        			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, -->
<!-- 											        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. -->
<!-- 											        		</div> -->
<!-- 											      		</div> -->
<!-- 											    	</div> -->
<!-- 										  		</div> -->
<!-- 											</div> -->
						        		</div>
					      			</div>
					    		</div>
						    	<div class="panel panel-default">
						      		<div class="panel-heading forum" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
						        		<h4 class="panel-title">
						          			2 - Post title
						        		</h4>
						      		</div>
						      		<div id="collapse2" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<p class="lead">Post body</p>
						        			<p>
							        			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							       				sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					        				</p>
					        				<div class="dropdown">
												<button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<!-- 														Action<span class="caret"></span> -->
												<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
													<li><a href="forum/postview.php?postID=2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a></li>
													<li><a href="forum/postreply.php?postID=2"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</a></li>												
	<!-- 												<li role="separator" class="divider"></li> -->
	<!-- 												<li><a href="#">Separated link</a></li> -->
												</ul>
											</div>
					        			</div>
					      			</div>
					    		</div>
						    	<div class="panel panel-default">
						    		<div class="panel-heading forum" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
						        		<h4 class="panel-title">
						          			3 - Post title
						        		</h4>
						      		</div>
						      		<div id="collapse3" class="panel-collapse collapse">
						        		<div class="panel-body">
						        			<p class="lead">Post body</p>
						        			<p>
							        			Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							        			sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							        			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
						        			</p>
						        			<div class="dropdown">
												<button class="btn btn-default btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<!-- 														Action<span class="caret"></span> -->
												<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
												</button>
												<ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
													<li><a href="forum/postview.php?postID=3"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View</a></li>
													<li><a href="forum/postreply.php?postID=3"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Reply</a></li>												
	<!-- 												<li role="separator" class="divider"></li> -->
	<!-- 												<li><a href="#">Separated link</a></li> -->
												</ul>
											</div>
						        		</div>
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