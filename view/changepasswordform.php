<?php

include '../includes/header.php';
include '../includes/nav.php';


?>


<div class="container-fluid">
	<div class="row">
    	<div class="col-sm-6 col-sm-offset-3">
                
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
				            	<div class="form-group">
					                <label>Old Password:</label>
					                <input type="password" class="form-control" name="oldPassword" placeholder="Enter old password" size="25" class="fields" id="oldPass" />
				                </div>
				                <div class="form-group">
				               		<label>New Password:</label>
				                    <input type="password" class="form-control" name="newPassword" placeholder="Enter new password" size="25" class="fields" id="newPass" />
				               	</div>
				               	<div class="form-group">
				                	<label>Confirm New Password:</label>
				                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm new password" size="25" class="fields" id="confirmPass" />
								</div>
				            </fieldset>
				            <div class="buttons">
				                <input type="submit" class="btn btn-default" name="Send" alt="Send" value="Send" />
				                <input type="reset" class="btn btn-default" name="Reset" value="Reset" />
				            </div>
				        </form>
                    </div>
                </div>
            </div>
        </div>
    
    </div>

    

</body>
</html>