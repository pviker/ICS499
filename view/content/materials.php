<?php

	include '../../includes/header.php';
	include '../../includes/nav.php';
    include '../../includes/materialslink.php';

//     $content_query = "select course_content_id, file_name, title from course_content where courses_id = '" . $_SESSION["selectedCourse"] . "'";
// 	$content_results = mysqli_query($conn, $content_query);


?>

	<div class="container-fluid">
		
		<div class="row">
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Materials</h3>
			  		</div>
				  	<div class="panel-body">
				    	<div class="list-group">
							<!-- <a href="<?php echo $rootDir ?>/view/course.php?courseID=1" class="list-group-item">Week 1</a>
							<a href="<?php echo $rootDir ?>/view/course.php?courseID=2" class="list-group-item">Week 2</a>
							<a href="<?php echo $rootDir ?>/view/course.php?courseID=3" class="list-group-item">Week 3</a> -->
							<?php 
								
								while($content_row = mysqli_fetch_assoc($content_results)) {
								    echo "<a href = '../../controllers/coursecontentdownload.php?course_content_id=" . $content_row["course_content_id"] . "'
	    									 class='list-group-item'>" . $content_row["title"] . " <small>(Filename: " . $content_row['file_name'] . ")</small></a>";
								} 
							?>
							
						</div>
				  	</div>
				</div>
	    	</div>
	    	<div class="col-sm-6">
    			<div class="panel panel-primary" style="border-color: #696053;">
			  		<div class="panel-heading panel-head">
			    		<h3 class="panel-title">Assignments due for course: <?php echo $_SESSION['selectedCourse']; ?></h3>
			    		
			  		</div>
				  	<div class="panel-body">
				    	<p>*DB query for past 30 days for currently selected course</p>
				  	</div>
				</div>
			</div>
		</div>
	
	</div>

	

</body>
</html>