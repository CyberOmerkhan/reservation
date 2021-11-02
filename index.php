<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="shortcut icon" href="img/icon.png" type="image/png">
	<title>Главная страница</title>
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
			<div class = "login">
				<form method = "post" class = "form" action = "login.php">
					<?php if(isset($_COOKIE['username'])): ?>
						<input type = "text" name = "lusername" placeholder = "Введите имя" value = "<?=$_COOKIE['username']?>">
						<input type = "password" name = "lpass" placeholder = "Введите пароль" value = "<?=$_COOKIE['pass']?>">
					<?php else: ?>
						<input type = "text" name = "lusername" placeholder = "Введите имя">
						<input type = "password" name = "lpass" placeholder = "Введите пароль">
					<?php endif?>
					<input type = "submit" class = "btn" value = "Войти">
				</form>
				<div class="forgot">
					<a href = "find_pass.php">Забыли пароль?</a>
				</div>
			</div>
		</div>
		<div class="content">
			<div class="img">
				<img src="img/troll.jpeg" alt="Взлом жепы">
			</div>
			<div class="registration">
				<h1>Регистрация</h1>
				<h3>Это бесплатно и всегда будет бесплатно.</h3>
				<form action = "registration.php" method = "post">
						<input type = "text" name = "rusername" placeholder = "Имя"><br>
						<?php if(isset($_COOKIE['username_error'])): ?>
							<span style = "color: red;"><?=$_COOKIE['username_error']?></span><br>
						<?php elseif(isset($_COOKIE['same_username'])): ?>
							<span style = "color: red;"><?=$_COOKIE['same_username']?></span><br>
						<?php endif?>
						<input type = "password" name = "rpass" placeholder = "Пароль">
						<?php if(isset($_COOKIE['pass_error'])): ?>
							<br><span style = "color: red;"><?=$_COOKIE['pass_error']?></span><br><br><br>
							<button type = "submit">Зарегистрироваться</button>
						<?php else: ?>
						<br><br><br><button type = "submit">Зарегистрироваться</button>
						<?php endif?>
					</form>
			</div>
			<div class="mregistration">
				<div class = "mlogin">
					<form action = "registration.php" method = "post">
						<input type = "text" name = "rusername" placeholder = "Имя"><br>
						<?php if(isset($_COOKIE['username_error'])): ?>
							<span style = "color: red;"><?=$_COOKIE['username_error']?></span><br>
						<?php elseif(isset($_COOKIE['same_username'])): ?>
							<span style = "color: red;"><?=$_COOKIE['same_username']?></span><br>
						<?php endif?>
						<input type = "password" name = "rpass" placeholder = "Пароль">
						<?php if(isset($_COOKIE['pass_error'])): ?>
							<br><span style = "color: red;"><?=$_COOKIE['pass_error']?></span><br><br><br>
							<button type = "submit">Регистрация</button>
						<?php else: ?>
						<br><br><br><button type = "submit">Регистрация</button>
						<?php endif?>
					</form>
					<br><hr><div id="hrtext">или</div><hr style = "margin-bottom: 6%">
					<form method = "post" class = "form" action = "login.php">
						<?php if(isset($_COOKIE['username'])): ?>
							<input type = "text" name = "lusername" placeholder = "Введите имя" value = "<?=$_COOKIE['username']?>">
							<input type = "password" name = "lpass" placeholder = "Введите пароль" value = "<?=$_COOKIE['pass']?>">
						<?php else: ?>
							<input type = "text" name = "lusername" placeholder = "Введите имя">
							<input type = "password" name = "lpass" placeholder = "Введите пароль">
						<?php endif?>
						<div class="forgot">
							<a href = "find_pass.php">Забыли пароль?</a>
						</div>
						<input type = "submit" class = "btn" value = "Войти">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>