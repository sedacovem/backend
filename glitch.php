<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?101"></script>
	<link rel="stylesheet" href="style.css">

</head>
<body>
<?php
		session_start();

  	    $ch = curl_init('https://api.vk.com/method/friends.get?user_id='.$_SESSION['userid'].'&access_token='.$_SESSION['token'].'&fields='.$_SESSION['fields'].'    ');		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$flow = json_decode(curl_exec($ch), true);
		curl_close($ch);

		 echo '<div class="center"><ul class="photos">';				
           		 for($i=0; $i<25; $i++){
           		 	$photo = $flow['response'][$i];
	           		 echo '<li><a href="http://vk.com/'. $photo['screen_name'] .'"><img src="glitchem.php?url=' . $photo['photo_medium'] . '" /></a></li>';
           		 }
         echo '</ul></div>';
?>
</body>
</html>