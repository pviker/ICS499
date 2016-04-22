<?php

include '../../includes/header.php';
include '../includes/nav.php';


?>


<div class="container-fluid">
        
        <div class="row">
            <div class="col-sm-12">
                
<?php
                
     if(isset($_SESSION['blankPassMessage'])) {
     
     echo $_SESSION['blankPassMessage'];
     unset($_SESSION['blankPassMessage']);
 }
 
 if(isset($_SESSION['passNotMatch'])) {
     
     echo $_SESSION['passNotMatch'];
     unset($_SESSION['passNotMatch']);
 }
 
 if(isset($_SESSION['passLengthMessage'])) {
     
     echo $_SESSION['passLengthMessage'];
     unset($_SESSION['passLengthMessage']);
 }
                
                
                
                ?>
                <div class="panel panel-primary" style="border-color: #696053;">
                    <div class="panel-heading panel-head">
                        <h3 class="panel-title">Change Password</h3>
                    </div>
                    <div class="panel-body">
                        <form name="changePassword" action="../controllers/changepassword.php" method="post" class="change-password">
            
            <fieldset id="field1" class="fieldset">
                <legend>Change Password</legend>
            
                <label>Old Password:</label>
                    <input type="password" name="oldPassword" placeholder="Enter old password" size="25" class="fields" id="oldPass" /><br />
                <label>New Password:</label>
                    <input type="password" name="newPassword" placeholder="Enter new password" size="25" class="fields" id="newPass" /><br />
                <label>Confirm New Password:</label>
                    <input type="password" name="confirmPassword" placeholder="Confirm new password" size="25" class="fields" id="confirmPass" /><br />

            </fieldset>
            <br />
            <div class="buttons">
                <input type="submit" class="formButton" name="Send" alt="Send" value="Send" />
                <input type="reset" class="formButton" name="Reset" value="Reset" />
            </div> 

            
        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    

</body>
</html>