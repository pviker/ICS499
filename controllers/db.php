<?php 
	
	$dbserver = "aa1a3uwx91a5i45.cjrwlmqgniq2.us-west-2.rds.amazonaws.com";
	$username = "admin";
	$password = "927485401948";
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