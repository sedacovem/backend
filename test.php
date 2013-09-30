<?php
	header('Location: http://mikesedacove.ru/glitch.php');
	session_start();

		$code = $_GET['code'];
		$client_id = '3872232';
		$client_secret = 'yc9HU7ffWUMgXJZbrOEr';
		$redirect_uri = 'http://mikesedacove.ru/glitch.php';
		$url = 'https://oauth.vk.com/access_token';


		$ch = curl_init('https://oauth.vk.com/access_token?client_id=3872232&client_secret=yc9HU7ffWUMgXJZbrOEr&code='.$code.'&redirect_uri=http://mikesedacove.ru/test.php');
		curl_setopt($ch, CURLOPT_HEADER, false);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = json_decode(curl_exec($ch), true);
		curl_close($ch);
    	

		if(isset($data['access_token'])) {
			$params = array (
				'uids'         => $data['user_id'],
				'fields'       => 'uid,first_name,last_name,screen_name,sex,bdate,photo_big,photo_100,photo_medium',
				'access_token' => $data['access_token']
			);
		};
		

		$userid = $params[uids];
		$token = $params[access_token];
		$fields = $params[fields];


    	$_SESSION['token'] = $token;
    	$_SESSION['userid'] = $userid;
    	$_SESSION['fields'] = $fields;