<?php

	include '../../includes/header.php';
	include '../includes/nav.php';
    include '../../controllers/db.php';
    include '../includes/getassignmentsupdategrades.php';

?>

	<div class="container-fluid">
		
		<div class="row">
			<div class="col-sm-3"></div>
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Grades</h3>
			  		</div>
				  	<div class="panel-body">
				  	<?php
				  	
				  	while($row = mysqli_fetch_assoc($result)) {
        
                    echo "<a href='updategradesview.php?assignments_id=" . $row["assignments_id"] . "'>" . $row["name"] . "</a><br>";
                    
                    } ?>	
				  	</div>
				</div>
	    	</div>
	    	<div class="col-sm-3"></div>
		</div>
	
	</div>

	

</body>
</html>