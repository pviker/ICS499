
<!DOCTYPE html>
<html>
<head>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
<!--   <textarea>Easy! You should check out MoxieManager!</textarea> -->
  
  <?php
// 	$to = "pviker@me.com";
// 	$subject = "My subject";
// 	$txt = "Hello world!";
// 	$headers = "From: pviker@me.com" . "\r\n" . "CC: patviker@gmx.com";
	
// 	if(mail($to,$subject,$txt,$headers)){
// 		echo "TRUE";
// 	} else echo "FALSE";
	

/*
 Our php.ini contains the following settings:

display_errors = On
register_globals = Off
post_max_size = 8M
*/

echo 'display_errors = ' . ini_get('display_errors') . "<br>";
echo 'register_globals = ' . ini_get('register_globals') . "<br>";
echo 'post_max_size = ' . ini_get('post_max_size') . "<br>";
echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "<br>";
echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size')) . "<br>";
echo 'upload_max_filesize = ' . ini_get('upload_max_filesize') . "<br>";

function return_bytes($val) {
	$val = trim($val);
	$last = strtolower($val[strlen($val)-1]);
	switch($last) {
		// The 'G' modifier is available since PHP 5.1.0
		case 'g':
			$val *= 1024;
		case 'm':
			$val *= 1024;
		case 'k':
			$val *= 1024;
	}

	return $val;
}

// Returns a file size limit in bytes based on the PHP upload_max_filesize
// and post_max_size
function file_upload_max_size() {
	static $max_size = -1;

	if ($max_size < 0) {
		// Start with post_max_size.
		$max_size = parse_size(ini_get('post_max_size'));

		// If upload_max_size is less, then reduce. Except if upload_max_size is
		// zero, which indicates no limit.
		$upload_max = parse_size(ini_get('upload_max_filesize'));
		if ($upload_max > 0 && $upload_max < $max_size) {
			$max_size = $upload_max;
		}
	}
	return $max_size;
}

function parse_size($size) {
	$unit = preg_replace('/[^bkmgtpezy]/i', '', $size); // Remove the non-unit characters from the size.
	$size = preg_replace('/[^0-9\.]/', '', $size); // Remove the non-numeric characters from the size.
	if ($unit) {
		// Find the position of the unit in the ordered string which is the power of magnitude to multiply a kilobyte by.
		return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
	}
	else {
		return round($size);
	}
}

?>


<?php
$date = date("m/d/Y");
echo "Current date: " . $date;

$date=date_create($date);
date_add($date,date_interval_create_from_date_string("14 days"));
$futureDate = date_format($date,"m/d/Y");

echo "<br>+14 days: " . $futureDate;
?>

</body>
</html>