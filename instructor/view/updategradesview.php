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
                        <h3 class="panel-title">Grades</h3>
                    </div>
                    <div class="panel-body">
                    <form name="updateGrades" action="persistgrades.php" method="post">
                    Name:<br>
                    <?php   
                    while($studentRow = mysqli_fetch_assoc($studentResult)) {
      
                    echo $studentRow["first_name"] . " " . $studentRow["last_name"] . 
                    "<input type=\"text\" name=\"points\" size=\"5\">/" . $maxPoints . "<br>";   }    ?>
  
                    <input type="submit" name= "submit" value="Update Grades">
                    </form>
    
                    </div>
                </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    
    </div>

    

</body>
</html>