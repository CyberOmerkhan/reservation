<?php if(isset($_COOKIE['username'])):?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/chat.css">
	<link rel="shortcut icon" href="img/icon.png" type="image/png">
	<title>Чат</title>
</head>
<body>
	<div class="logout">
		<a href = "logout.php">Выйти</a>
	</div>
	<div class='chat' id = 'chat' onload = "refresh()">
		<div class='chat-messages' id = "chat-messages">
			<div class='chat-messages__content' id='messages'>
				<?php
					$mysql = new mysqli('a372686.mysql.mchost.ru', 'a372686_1', '9Ne6ZKTVEtbY', 'a372686_1');
					$mysql -> query('set names utf8');
					$mysql -> query('set character set utf8');
					$mysql -> query('set character_set_client=utf8');
					$mysql -> query('set character_set_results=utf8');
					$mysql -> query('set character_set_connection=utf8');
					$mysql -> query('set character_set_database=utf8');
					$mysql -> query('set character_set_server=utf8');
					$mysql ->  query("SET SESSION collation_connection = 'utf8_general_ci';");
					$chat = $mysql -> query("SELECT * FROM `chat`");
					foreach ($chat as $message) {
				?>
				<div class="output">
					<?php
						$number = rand(1, 5);
						if($number == 1)
							$color = "#f55c5c";
						else if($number == 2)
							$color = "green";
						else if($number == 3)
							$color = "blue";
						else if($number == 4)
							$color = "yellow";
						else if($number == 5)
							$color = "purple";
					?>
					<?php if($message['username'] == "Omerkhan" && $message['pass'] = "Adeka2015"):?>
					<div class="username" style = "color: <?=$color?>">&#128274; <?=$message['username']?></div>
					<?php else:?>
					<div class="username" style = "color: <?=$color?>"><?=$message['username']?></div>
					<?php endif?>
					<span class="text" id = "text"><?=$message['text']?></span>
					<div class="date"><span><?=$message['date']?></span></div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class='chat-input' id = 'chat'>
			<form method='post' id='chat-form' action = "send_message.php">
				<input type='text' name = "text" class='chat-form__input' placeholder='Введите сообщение'>
				<input type='submit' class='chat-form__submit' value='Send'>
				<?php if(isset($_COOKIE['text_error'])):?>
					<br><span style = "color: red"><?=$_COOKIE['text_error']?></span>
				<?php endif?>
			</form>
		</div>
	</div>
	<div id="id"></div>
	<script type="text/javascript" src = "javascript/script.js"></script>
</body>
</html>
<?php else: header('Location: index.php')?>
<?php endif?>