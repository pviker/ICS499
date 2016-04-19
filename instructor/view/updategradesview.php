<?php

    include '../../includes/header.php';
    include '../includes/nav.php';
    include '../../controllers/db.php';
    include '../includes/updategrades.php';

?>

    <div class="container-fluid">
    
    	<ol class="breadcrumb">
			<li><a href="course.php?courseID=<?php echo $courseID; ?>" style="color: black">Home</a></li>
			<li><a href="grades.php" style="color: black">Assignments to grade</a></li>
			<li class="active">Update Grades</li>
		</ol>
		
    	<?php if(isset($_SESSION['msg'])){?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Success!</strong> Grades have been updated for <strong><?php echo $assignmentName; ?></strong>.
			</div>
		<?php } unset($_SESSION['msg']);?>
        
        <div class="row">
            
            <div class="col-sm-8 col-sm-offset-2">
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
							    			<th>Current Points Received</th>
							    			<th>Max Points</th>
							    		</tr> 
							    	</thead>   
				                    
				                    <input type="hidden" name="assignments_id" value="<?php echo $assignments_id;?>">
				                    <?php
				                    // print rows of students for specific assignment   
					                    while($studentRow = mysqli_fetch_assoc($studentResult)) {
											require '../includes/getcurrentgrades.php';
						                    echo "<div class='form-group'><tr>
    												<td>" . $studentRow["first_name"] . " " . $studentRow["last_name"] . "</td>
        											<td><input type='text' name='" . $studentRow['student_id'] . "' size='5' value='" . $grade . "'></td>
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
        </div>
    
    </div>

    

</body>
</html>