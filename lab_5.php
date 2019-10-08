<?php
	//echo $hash_of_the_pass = password_hash($pass, PASSWORD_DEFAULT);
	
	session_set_cookie_params(60*60*24*100);
	session_start();
	
	if (!isset($_SESSION['initialized'])){ 
	
		$_SESSION['initialized'] = TRUE;
		
		$_SESSION['host'] = 'localhost';
		$_SESSION['user'] = 'root';
		$_SESSION['pass'] = '';
		$_SESSION['db'] = 'test';
		$_SESSION['users'] = 'users';
		
		$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
		mysqli_query($link, "SET NAMES 'utf8'");
		$result = mysqli_query($link, "SELECT * FROM banners");
		
		$banners = [];
		$bannersUrls = [];
		
		while($resultArr = mysqli_fetch_assoc($result))
		{
			$banners[] = $resultArr['location'];
			$bannersUrls[] = $resultArr['url'];;
		}
		
		$_SESSION['banners'] = $banners;
		$_SESSION['bannersUrls'] = $bannersUrls;
		
	}

	if(isset($_SESSION['tmp']) && (!$_SESSION['tmp'] || isset($_COOKIE['session_hash']) && ($_SESSION['session_hash'] == $_COOKIE['session_hash'])))
	{
		header('Location: main.php');
	}
	else
	{
		
		echo '<h2>Пожалуйста, авторизуйтесь</h2>';
	if (isset($_GET['message']))
			echo '<p style="color: red;">' . $_GET['message'] . '</p>';
		
		echo '<div style="float: left; border: solid black; padding: 10px">
				<p>Войти</p>
				<form action="login.php" method="GET">
					<p style="margin: 0;">Введите имя</p>
					<input type="text" name="name" size="20"></input>
					<p style="margin: 10px 0 0 0;">Введите пароль</p>
					<input type="password" name="pass"></input><br><br>
					<input type="checkbox" name="tmp" value="yes">
					Чужой компьютер	<br><br>
					<input type="submit" size="40" value="Войти"></input>
				</form>
			</div>';
			
		echo '<div style="float: left; border: solid black; padding: 10px; margin-left: 40px">
				<p>Зарегистрироваться</p>
				<form action="registration.php" method="GET">
					<p style="margin: 0;">Введите имя</p>
					<input type="text" name="name" size="20"></input>
					<p style="margin: 10px 0 0 0;">Введите пароль</p>
					<input type="password" name="pass"></input><br><br>
					<input type="submit" size="40" value="Войти"></input>
				</form>
			</div>';
	} 
	
