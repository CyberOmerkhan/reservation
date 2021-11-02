<?php
	$username = $_COOKIE['username'];
	$date = date('g:i a');
	$text = $_POST['text'];
	if(mb_strlen(trim($text)) < 1)
		setcookie("text_error", "Длина сообщения не должна быть меньше 1.", time() + 1, "/");
	else{
		$mysql = new mysqli('a372686.mysql.mchost.ru', 'a372686_1', '9Ne6ZKTVEtbY', 'a372686_1');
		$mysql -> query('set names utf8');
		$mysql -> query('set character set utf8');
		$mysql -> query('set character_set_client=utf8');
		$mysql -> query('set character_set_results=utf8');
		$mysql -> query('set character_set_connection=utf8');
		$mysql -> query('set character_set_database=utf8');
		$mysql -> query('set character_set_server=utf8');
		$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
		$mysql -> query("INSERT INTO `chat` (`username`, `date`, `text`) VALUES('$username', '$date', '$text')");
	}
	header('Location: chat.php');
?>