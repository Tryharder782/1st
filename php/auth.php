<?php
	$login = filter_var(trim($_POST['login']),	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),	FILTER_SANITIZE_STRING);
	
	if(logi)
	
	$password = md5($password."wtfbro696969");

	$mysql = new mysqli('localhost', 'mysql', 'mysql', 'users');
	
	$result = $mysql -> query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password' ");

	$user = $result->fetch_assoc();

	if (count($user)==0){
	echo "Пользователя не существует";
	exit();
	}

	setcookie('user', $user['name'], time() + 3600, "/");

	$mysql ->close();

	header('Location: /');
?>