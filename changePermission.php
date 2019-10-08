<?php
	
    if (isset($_POST['name']) && isset($_POST['permission'])) {
		session_set_cookie_params(60*60*24*100);
		session_start();
		
		if ($_POST['name'] == '' || $_POST['permission'] == '')
		{
			header('Location: users.php?message=Все поля должны быть заполнены');
			exit();
		}
		
		if ($_POST['permission'] > 1 || $_POST['permission'] < 0)
		{
			header('Location: users.php?message=Некорректное значение в поле прав пользователя');
			exit();
		}
		
		$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
		$result = mysqli_query($link, "SELECT * FROM users");
			
		$found = FALSE;
		
		while(($resArr = mysqli_fetch_assoc($result)) && !$found)
		{
			if ($resArr['name'] == $_POST['name'])
			{
				$found = TRUE;
			}
		}
		
		if (!$found)
		{
			header('Location: users.php?message=Пользователь с таким именем не найден');
			exit();
		}
		
		$result = mysqli_query($link, "UPDATE users SET `permission` = " . $_POST['permission'] . " WHERE `name`='" . $_POST['name'] . "'") or die("Ошибка " . mysqli_error($link));

    }
		header('Location: users.php');

?>