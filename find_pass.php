<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="img/icon.png" type="image/png">
	<title>Найти пароль</title>
</head>
<body>
	<?php
		if(isset($_COOKIE['success'])):
	?>
	<script>
		alert('Регистрация прошла успешно');
	</script>
	<?php endif?>
	<div class="main">
		<div class="header">
			<h1>reservation</h1>
		</div>
		<div class="content">
			<div class = "find-password">
				<h1 style = "margin-bottom: 15px; color: #bab641">Найти пароль</h1>
				<?php if(isset($_COOKIE['found_password'])):?>
					<h3 style = "margin-bottom: 5px">Ваш пароль:</h3><h3 style = "color: #709b62;"><?=$_COOKIE['found_password']?></h3>
				<?php else:?>
				<form method = "post" action = "password.php">
					<input type = "text" name = "username_who_wants_to_find_password" placeholder = "Введите ваше имя">
					<input type = "submit" class = "button" value = "Найти">
				</form>
				<?php endif?>
			</div>
		</div>
		<div class = "return"><a style = "text-decoration: none" href="index.php">Вернуться на страницу авторизации</a></div>
	</div>
</body>
</html>