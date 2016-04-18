<?php

    include '../../includes/header.php';
    include '../includes/nav.php';
    include '../../controllers/db.php';
    include '../includes/updategrades.php';

?>

    <div class="container-fluid">
        
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="panel panel-primary" style="border-color: #696053;">
                    <div class="panel-heading panel-head">
                        <h3 class="panel-title">Updating grades for <?php echo $assignmentName;?></h3>
                    </div>
                    <div class="panel-body">
                    	<div class="table-responsive">
	                    	<form name="updateGrades" action="../controllers/persistgrades.php" method="post" id="form">
				            	<table class="table table-hover">
				            	
							    	<thead>
							    		<tr>
							    			<th>Name</th>
							    			<th>Points Received</th>
							    			<th>Max Points</th>
							    		</tr> 
							    	</thead>   
				                    
				                    <input type="hidden" name="assignments_id" value="<?php echo $assignments_id;?>">
				                    <?php
				                    // print rows of students for specific assignment   
					                    while($studentRow = mysqli_fetch_assoc($studentResult)) {
						                    echo "<div class='form-group'><tr>
    												<td>" . $studentRow["first_name"] . " " . $studentRow["last_name"] . "</td>
        											<td><input type='text' name='" . $studentRow['student_id'] . "' size='5'></td>
            										<td>" . $maxPoints . "</td>
                								 </tr></div>";   
										}    
									?>
									
		    					</table> 
		    				</form>
	    					<input type="submit" name="submit" value="Update Grades" class='btn btn-block btn-primary' form="form">
     					</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    
    </div>

    

</body>
</html>