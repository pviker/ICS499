<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';
    include '../../includes/materialslink.php';

?>

	<div class="container-fluid">
		
		<div class="row">
		    <div class="col-sm-3"></div>
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Download Course Materials</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<?php 
								while($content_row = mysqli_fetch_assoc($content_results)) {
								    echo "<a href = '../../controllers/coursecontentdownload.php?course_content_id=" . $content_row["course_content_id"] . "'
	    									 class='list-group-item'><span class='glyphicon glyphicon-download'></span> " . $content_row["title"] . " <small>(Filename: " . $content_row['file_name'] . ")</small></a>";
								} 
							?>
						</div>
				  	</div>
				</div>
	    	</div>
	    	<div class="col-sm-3">
    			<!-- <div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Assignments due for course: <?php echo $_SESSION['selectedCourse']; ?></h3>
			  		</div>
				  	<div class="panel-body">
				    	<p>*DB query for past 30 days for currently selected course</p>
				  	</div>
				</div> -->
			</div>
		</div>
	
	</div>

	

</body>
</html>