<?php

include '../../includes/header.php';
include '../../includes/nav.php';

?>

<div class="container-fluid">
        
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
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
                                        <?php include '../../includes/getgrades.php'; ?>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    

</body>
</html>