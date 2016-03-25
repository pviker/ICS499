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
								<?php require '../../includes/getforumposts.php';?>
					  		</div>
						</div>
			  		</div>
				</div>
    		</div>
		</div>
	</div>

</body>
</html>