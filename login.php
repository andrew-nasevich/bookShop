<?php
    if (isset($_GET['name']) && isset($_GET['pass'])) {
		
		if ($_GET['name'] == '' || $_GET['pass'] == '')
		{
			header('Location: lab_5.php?message="Заполните все поля"');
			exit();
		}
		
		session_set_cookie_params(60*60*24*100);
		session_start();
		
		if (isset($_SESSION['initialized'])){
			
			$_SESSION['authorized'] = FALSE;			
							
			$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
			mysqli_query($link, "SET NAMES 'utf8'");
			$result = mysqli_query($link, "SELECT * FROM users");
			
			$found = FALSE;	
			
			while(($resultArr = mysqli_fetch_assoc($result)) && !$found){
					
				if ($resultArr['name'] === $_GET['name'] && password_verify($_GET['pass'], $resultArr['hash_of_the_pass']))
				{
					$found = TRUE;
					
					if (isset($_GET['tmp']))
					{
						$_SESSION['session_hash'] = rand(0, getrandmax());
						setcookie('session_hash', $_SESSION['session_hash']);
						
					}
					
					$_SESSION['tmp'] = isset($_GET['tmp']);
					
					$_SESSION['permission'] = $resultArr['permission'];
						
					$pages = [];
					$names = [];
						
					$resPage = mysqli_query($link, "SELECT * FROM pages");
					for (; $resPageArr = mysqli_fetch_assoc($resPage);)
					{
						if ($resPageArr['permission'] <= $_SESSION['permission'])
						{
							$names[] = $resPageArr['nick'];
							$pages[] = $resPageArr['page_name'];
						}
					}

					$_SESSION['names'] = $names;
					$_SESSION['pages'] = $pages;	
				}
			}
			
			if (!$found)
			{
				header('Location: lab_5.php?message="Неправильное имя пользователя или пароль"');
				exit();
			}
		}
    }
	
	header('Location: lab_5.php');
?>