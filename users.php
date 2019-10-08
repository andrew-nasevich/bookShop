<!DOCTYPE html>
<head>
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="style/main-css.css">
	<title>Лабораторная работа №3 - файловый менеджер</title>
	<style>
	   .shelder { 
			border: 4px double black; 
			border-collapse: collapse; 
			width: 55%;
			margin: 1% 0 0 1%;
	   }
	   .shelder th { 
			text-align: left; 
			background: #ccc; 
			padding: 5px; 
			border: 1px solid black; 
	   }
	   .shelder td { 
			padding: 5px; 
			border: 1px solid black; 
	   }
	</style>
</head>
<body>
	<header>
		<nav>
			<table>
				<tbody>
					<tr>
						<?php
						session_set_cookie_params(60*60*24*100);
						session_start();
						if(isset($_SESSION['tmp']) && (!$_SESSION['tmp'] || isset($_COOKIE['session_hash']) && ($_SESSION['session_hash'] == $_COOKIE['session_hash'])))
						{
							$pages_amount = count($_SESSION['pages']);
							$i = 0;
							while($i < $pages_amount)
							{
								echo '<td> <a href="'.$_SESSION['pages'][$i].'">'.$_SESSION['names'][$i++].'</a> </td>';
 							}
						}
						else
							header('Location: lab_5.php');
						
						?>
					</tr>
				</tbody>
			</table>
		</nav>
	</header>
	<main>
		<h1 style="text-align: center">Пользователи и их права</h1>
		<div class="editing_container">
		
			<?php
				if (isset($_GET['message']))
					echo '<p style="color: red">' . $_GET['message'] . '</p>';
			?>
			<form action="deleteUser.php" method="POST">
				<h3>Удалить пользователя</h3><br>
				Введите имя пользователя:
				<input type="text" name="name" size="40"></input><br><br>
				<input type="submit" size="40" value="Удалить"></input>
			</form>
			
			<form action="changePermission.php" method="POST">
				<h3>Изменить права пользователя</h3><br>
				Введите имя пользователя:
				<input type="text" name="name" size="40"></input><br><br>
				Введите новое значение прав пользователя:
				<input type="text" name="permission" size="1"></input><br><br>
				<input type="submit" size="40" value="Изменить"></input>
			</form>
			
		</div>
		
		<div class="folder_content_container">
			<?php
			
			echo '<table class="shelder">
					<tr>
						<th>№</th>
						<th>Имя пользователя</th>
						<th>Права пользователя</th>
					</tr>';
							
			$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
			mysqli_query($link, "SET NAMES 'utf8'");
			$result = mysqli_query($link, "SELECT * FROM users");
			
			$num = 1;
			while($resArr = mysqli_fetch_assoc($result))
			{
				echo '<tr><td>' . $num++ . '</td>
					  <td>' . $resArr['name'] . '</td>
					  <td>' . $resArr['permission'] . '</td></tr>';
			}
			
			echo '</table>';
			
  
            ?>
		</div>
		
	</main>
</body>