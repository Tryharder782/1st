<?php
	$login = filter_var(trim($_POST['login']),	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),	FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	if (mb_strlen($login) < 2 || mb_strlen($login) > 99){
		echo "Недопустимая длина логина";
		exit();
	}
	else if (mb_strlen($password) < 2 || mb_strlen($password) > 32){
		echo "Недопустимая длина пароля (минимум 8 символов)";
		exit();
	}
	else if (mb_strlen($name) < 2 || mb_strlen($name) > 49){
		echo "Недопустимая длина имени";
		exit();
	}


	$password = md5($password."wtfbro696969");

	$mysql = new mysqli('localhost', 'mysql', 'mysql', 'users');
	$result = $mysql -> query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'");

	if (count($result)!=''){
		
	}
	
	$mysql ->query ("INSERT INTO `users` (`login`, `password`, `name`) VALUES('$login', '$password', '$name')");

	$mysql ->close();

	header('Location: /');
?>