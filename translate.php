<?php
	header('Cache-control: private'); // IE 6 FIX
	if(isSet($_GET['lang'])){
		$lang = $_GET['lang'];
		// register the session and set the cookie
		$_SESSION['lang'] = $lang;
		setcookie('lang', $lang, time() + (3600 * 24 * 30));
	}else if(isSet($_SESSION['lang'])){
		$lang = $_SESSION['lang'];
	}else if(isSet($_COOKIE['lang'])){
		$lang = $_COOKIE['lang'];
	}else{
		$lang = 'es';
	}
	switch ($lang) {
		case 'es':
			$lang_file = 'es.php';
			break;
		case 'en':
			$lang_file = 'en.php';
			break;
		case 'ru':
			$lang_file = 'ru.php';
			break;
		default:
			$lang_file = 'es.php';
	}
	include_once 'languages/'.$lang_file;
?>