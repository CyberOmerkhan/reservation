<?php
	$username = $_POST['username_who_wants_to_find_password'];
	$mysql = new mysqli('a372686.mysql.mchost.ru', 'a372686_1', '9Ne6ZKTVEtbY', 'a372686_1');
	$mysql -> query('set names utf8');
	$mysql -> query('set character set utf8');
	$mysql -> query('set character_set_client=utf8');
	$mysql -> query('set character_set_results=utf8');
	$mysql -> query('set character_set_connection=utf8');
	$mysql -> query('set character_set_database=utf8');
	$mysql -> query('set character_set_server=utf8');
	$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
	$result = $mysql -> query("SELECT * FROM `users` WHERE `username` = '$username'");
	$result = $result -> fetch_assoc();
	if($username == "Omerkhan")
		setcookie("found_password", "Иди лесом, мучача.", time() + 1, "/");
	else if(is_countable($result))
		setcookie("found_password", $result['pass'], time() + 1, "/");
	else
		setcookie("found_password", "Пользователя с таким именем не существует", time() + 1, "/");
	header('Location: find_pass.php');
?>