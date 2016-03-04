

<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        
       	<meta name="viewport" content="width=device-width, initial-scale=1" http-equiv="x-ua-compatible">
	    
		
		<!------------------------------ BOOTSTRAP -------------------------------------------------------------->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		
		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<!------------------------------ /BOOTSTRAP ------------------------------------------------------------->
        
        
        <title>Patrick Viker - Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        
		<?php include '../includes/nav.php'; ?>
		
		<div class="container">
			
			<div class="well lg-well">
				
				<p class="lead">DATABASE CONNECTION TEST:</p>
				
				<?php 
	
					$dbserver = "aa1cg0663xhviwk.cjrwlmqgniq2.us-west-2.rds.amazonaws.com";
					$username = "admin";
					$password = "Pv271312!";
					$db = "patrickviker";
					
					$conn = mysqli_connect($dbserver, $username, $password, $db, 3306);
					
					$query = "select * from test";
					
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					
					$result = mysqli_query($conn, $query);
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						$i=1;
						while($row = mysqli_fetch_assoc($result)) {
							echo "Row " .$i++. " <span class='glyphicon glyphicon-arrow-right'></span> id: " 
									. $row["id_test"]. " - Name: " . $row["name"] . "<br>";
						}
					}
						
						
				?>
		 	</div>
		 	
		 	<div class="well lg-well">
		 		<p class="lead">PHP METHOD CALL TESTING:</p>
				<?php
					echo "Today is " . date("Y/m/d") . "<br>";
					echo "Today is " . date("Y.m.d") . "<br>";
					echo "Today is " . date("Y-m-d") . "<br>";
					echo "Today is " . date("l");
				?>
			</div>
		
		 	
		  
		</div><br>

        <!-- <h1><small>Sign In</small></h1>
			<form role="form" action="/ics499/controllers/formcontrol.php" method="post" >
				<div class="form-group">
				    <label for="username">Username:</label>
				    <input type="text" class="form-control" id="username">
			  	</div>
				<div class="form-group">
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd">
			  	</div>
			  	<div class="checkbox">
			    	<label><input type="checkbox" id="saveUsername">Remember me</label>
			  	</div>
			 	<button type="submit" class="btn btn-default">Submit</button>
			</form> -->

        <script src="https://code.jquery.com/jquery-{{JQUERY_VERSION}}.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-{{JQUERY_VERSION}}.min.js"><\/script>');</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments);};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview');
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
