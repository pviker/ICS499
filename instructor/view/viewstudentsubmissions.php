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
                        <h3 class="panel-title">Student Submissions for <?php $row1 = mysqli_fetch_assoc($assignments_results);
                        														echo $row1['name'];
                        														mysqli_free_result($assignments_results);
                        												?></h3>
                    </div>
                    <table class="table">
					    	<thead>
					    		<tr>
					    			<th>Student Name</th>
					    			<th>Student Submission Description</th>
					    			<th>Date Submitted</th>
					    			<th>Submission Download</th>
					    		</tr>
					    	</thead>	
					    		
				<?php 
					include '../includes/getassignments.php';
                                
	                if($row_count==0){
						echo "No submissions at this time";
					} else{
			            while($row = mysqli_fetch_assoc($assignments_results)) {
							echo "<tr>".
									 "<td>".$row['first_name']. " " . $row['last_name'] . "</td>".
									 "<td>".$row['title']."</td>".
									 "<td>".$row['date']."</td>".
									 "<td><a href = '../controllers/dropboxdownload.php?assignments_id=" . $row["assignments_id"] . "'>Download</a></td>
								 </tr>";
						
// 				            echo "<a href = '../controllers/dropboxdownload.php?assignments_id=" . $row["assignments_id"] . "'
// 				            		class='list-group-item'>" . $row["name"] . "</a>";
			            } 
	                }
                ?>
					 
                    </table>
                    <div class="panel-body">
                        <div class="list-group">
                            <!-- <a href="<?php echo $rootDir ?>/view/course.php?courseID=1" class="list-group-item">Week 1</a>
                            <a href="<?php echo $rootDir ?>/view/course.php?courseID=2" class="list-group-item">Week 2</a>
                            <a href="<?php echo $rootDir ?>/view/course.php?courseID=3" class="list-group-item">Week 3</a> -->

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
            
        </div>
    
    </div>

    

</body>
</html>