<?php

    if(isset($_GET['assignments_id'])) {
        
        $assignments_id = $_GET['assignments_id'];
        
    } else {
        
        header("Location: landing.php");
        
    }
    
    include '../../includes/header.php';
    include '../includes/nav.php';
    include '../includes/getassignments.php';

?>

    <div class="container-fluid">
        
        <div class="row">
        	<div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="panel panel-primary" style="border-color: #696053;">
                    <div class="panel-heading panel-head">
                        <h3 class="panel-title">Student Submissions</h3>
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                            <!-- <a href="<?php echo $rootDir ?>/view/course.php?courseID=1" class="list-group-item">Week 1</a>
                            <a href="<?php echo $rootDir ?>/view/course.php?courseID=2" class="list-group-item">Week 2</a>
                            <a href="<?php echo $rootDir ?>/view/course.php?courseID=3" class="list-group-item">Week 3</a> -->
                            <?php 
                                
                            	if($row_count==0){
									echo "No submissions at this time";
								} else{
	                                while($assignments_row = mysqli_fetch_assoc($assignments_results)) {
	                                    echo "<a href = '../controllers/dropboxdownload.php?assignments_id=" . $assignments_row["assignments_id"] . "'
	                                             class='list-group-item'>" . $assignments_row["name"] . "</a>";
	                                } 
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
            
        </div>
    
    </div>

    

</body>
</html>