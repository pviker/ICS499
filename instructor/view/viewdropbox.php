<?php

    include '../../includes/header.php';
    include '../includes/nav.php';
 //   include '../includes/getassignments.php';

?>

    <div class="container-fluid">
        
        <div class="row">
        	<div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="panel panel-primary" style="border-color: #696053;">
                    <div class="panel-heading panel-head">

                        <h3 class="panel-title">Student Assignments Dropbox for <?php include '../../includes/getcoursenum.php';?></h3>

                    </div>
                    <div class="panel-body">
                    	<div class='list-group'>
	                    	<?php include '../includes/getdropboxassignments.php'; ?>
	                    </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
<!--             <div class="col-sm-6"> -->
<!--                <div class="panel panel-primary" style="border-color: #696053;"> -->
<!--                     <div class="panel-heading panel-head"> -->
<!--                     <h3 class="panel-title">Assignments due for course: <?php //echo $_SESSION['selectedCourse']; ?></h3> -->
                        
<!--                     </div> -->
<!--                     <div class="panel-body"> -->
<!--                         <p>*DB query for past 30 days for currently selected course</p> -->
<!--                     </div> -->
<!--                 </div> -->
<!--             </div> -->
        </div>
    
    </div>

    

</body>
</html>