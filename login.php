<?php
	$username = $_POST['lusername'];
	$pass = $_POST['lpass'];
	$mysql = new mysqli('a372686.mysql.mchost.ru', 'a372686_1', '9Ne6ZKTVEtbY', 'a372686_1');
	$mysql -> query('set names utf8');
	$mysql -> query('set character set utf8');
	$mysql -> query('set character_set_client=utf8');
	$mysql -> query('set character_set_results=utf8');
	$mysql -> query('set character_set_connection=utf8');
	$mysql -> query('set character_set_database=utf8');
	$mysql -> query('set character_set_server=utf8');
	$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
	$result = $mysql -> query("SELECT * FROM `users` WHERE `username` = '$username' AND `pass` = '$pass'");
	$result = $result -> fetch_assoc();
	if(is_countable($result)){
		setcookie("username", $username, time() + 3600 * 24 * 365 * 5, "/");
		setcookie("pass", $pass, time() + 3600 * 24 * 365 * 5, "/");
		header('Location: chat.php');
	}
	else 
		header('Location: index.php');
?>