<?php
	setcookie('username', null, -1, '/');
	setcookie('pass', null, -1, '/');
	header('Location: index.php');