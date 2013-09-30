<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Glitch Em!</title>
	<script src="http://vk.com/js/api/openapi.js" type="text/javascript"></script>
		<link rel="stylesheet" href="style.css">


</head>
<body>

<body>


<div id="login_button" onclick="VK.Auth.login(authInfo);"></div>

<script language="javascript">
VK.init({
  apiId: 3872232
}
</script>
<?php

    $client_id = '3872232';
	$client_secret = 'yc9HU7ffWUMgXJZbrOEr';
	$redirect_uri = 'http://mikesedacove.ru/test.php';
    $url = 'http://oauth.vk.com/authorize';

    $params = array(
        'client_id'     => $client_id,
        'redirect_uri'  => $redirect_uri,
        'display' => 'page',
        'v' => '5.2',
        'scope' => 'photo,friends',
        'response_type' => 'code'
    );

    echo $link = '
    <div class="center">
    <p><a href="' . $url . '?' . urldecode(http_build_query($params)) . '" class="enter_link">GLITCH EM!</a></p>
	</div>';
?>
</body>
</html>