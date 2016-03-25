<?php

/**
 * Programmer: Patrick Viker
 * Team: ETC.
 * Instructor: Michael Dorin
 * Project: Capstone
 * Date: 3/24/16
 * Filename: getforumposts.php
 * Description: Retrieves from database discussion_post information
 * 				based on selected course from user.
 *
 **************************************************************************/


	if(isset($_SESSION['selectedCourse'])){
		$selectedCourse = $_SESSION['selectedCourse'];
	} else {
		$_SESSION['errormsg'] = "Can't retrieve courses.";
		header("Location: ../index.php");
	}
	
	$query = "SELECT discussion_post_id, title, body, date FROM discussion_post where courses_id='".$selectedCourse."' order by date";
	
	$results = mysqli_query($conn, $query);
	
	//echo $query;
	
	if(!$results) {
		$_SESSION["errormsg"] = "ERROR: Can't get course updates info";
		header("Location: ../index.php");
		exit;
	} else {
		$counter = 1;
		while($row = mysqli_fetch_assoc($results)) {
			if($counter == 1){
				$in = "in";
			} else $in = "";
			echo "<div class='panel panel-default'>
						<div class='panel-heading forum' data-toggle='collapse' data-parent='#accordion' href='#collapse".$counter."'>
							<h4 class='panel-title' style='padding-bottom: .3em'>
								".$row['title']."
							</h4>
						</div>
						<div id='collapse".$counter."' class='panel-collapse collapse ".$in."'>
							<div class='panel-body'>
								<p class='lead'>Post body</p>
									<p>
										".$row['body']."
									</p>
								<div class='dropdown'>
									<button class='btn btn-default btn-sm dropdown-toggle' type='button' id='dropdownMenu2' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
										<span class='glyphicon glyphicon-option-horizontal' aria-hidden='true'></span>
									</button>
									<ul class='dropdown-menu' aria-labelledby='dropdownMenu2'>
										<li><a href='forum/postview.php?postID=".$row['discussion_post_id']."'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span> View</a></li>
										<li><a href='forum/postreply.php?postID=".$row['discussion_post_id']."'><span class='glyphicon glyphicon-share-alt' aria-hidden='true'></span> Reply</a></li>
									</ul>
								</div>
							</div>
						</div>
				   </div>";
			$counter++;
		}
	}

?>