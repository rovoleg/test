<?php 
	if (!isset($_COOKIE['key'])){
		$_COOKIE['key']=0;
	}
	$_COOKIE['key']++;
	setcookie('key', $_COOKIE['key'], time()+60);
	echo 'количество: '.$_COOKIE['key'];
	echo '<br/><br/>'.time();
 ?>