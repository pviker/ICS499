<?php

include '../../includes/header.php';
include '../../includes/nav.php';

?>

<div class="container-fluid">
        
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-primary" style="border-color: #696053;">
                    <div class="panel-heading panel-head">
                        <h3 class="panel-title"><?php include $_SERVER['DOCUMENT_ROOT'].$rootDir.'includes/getcoursenum.php';?> -- Assignment Grades</h3>
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Assignment</th>
                                        <th>Points Received</th>
                                        <th>Max Points</th>  
                                    </tr>
                                </thead>
                                <?php include '../../includes/getgrades.php'; ?>
                            </table>
                            <div class="well well-sm text-right">
                            	Current grade total: 
                            	<?php 
                            		echo $totalPoints . " / " . $maxPointsTotal . " "; 
                            		
                            		function get_percentage($total, $number)
                            		{
                            			if ( $total > 0 ) {
                            				return round($number / ($total / 100),2);
                            			} else {
                            				return 0;
                            			}
                            		}
                            		echo "(".get_percentage($maxPointsTotal, $totalPoints)."%)";
                            	?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    

</body>
</html>