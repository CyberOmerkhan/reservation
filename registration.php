<?php
	$username = $_POST['rusername'];
	$pass = $_POST['rpass'];
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
	if(mb_strlen(trim($username)) < 3)
		setcookie("username_error", "Имя пользователя не менее 3 символов.", time() + 1, "");
	else if(mb_strlen(trim($pass)) < 3)
		setcookie("pass_error", "Пароль не менее 3 символов.", time() + 1, "/");
	else if(is_countable($result))
		setcookie("same_username", "Пользователь с этим именем уже существует.", time() + 1, "/");
	else{
		setcookie("username", $username, time() + 3600 * 24 * 365 * 5, "/");
		setcookie("pass", $pass, time() + 3600 * 24 * 365 * 5, "/");
		setcookie("success", 1, time() + 1, "/");
		$mysql -> query("INSERT INTO `users` (`username`, `pass`) VALUES('$username', '$pass')");
	}
	header('Location: index.php');
?>