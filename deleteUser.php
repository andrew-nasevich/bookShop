<?php
	
    if (isset($_POST['name'])) {
		session_set_cookie_params(60*60*24*100);
		session_start();
		
		if ($_POST['name'] == '')
		{
			header('Location: users.php?message=Поле с именем пользователя не может быть пустым');
			exit();
		}
		
		if ($_POST['name'] == 'admin')
		{
			header('Location: users.php?message=Администратор не может быть удален');
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
		
		$result = mysqli_query($link, "DELETE FROM users WHERE name='" . $_POST['name'] . "'") or die("Ошибка " . mysqli_error($link));

    }
		header('Location: users.php');

?>