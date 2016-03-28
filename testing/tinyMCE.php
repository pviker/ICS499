
<!DOCTYPE html>
<html>
<head>
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
  <textarea>Easy! You should check out MoxieManager!</textarea>
  
  <?php
	$to = "pviker@me.com";
	$subject = "My subject";
	$txt = "Hello world!";
	$headers = "From: pviker@me.com" . "\r\n" . "CC: patviker@gmx.com";
	
	if(mail($to,$subject,$txt,$headers)){
		echo "TRUE";
	} else echo "FALSE";
?>
</body>
</html>