<!DOCTYPE html>
<head>
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="style/main-css.css">
	<title>Лабораторная работа №3 - файловый менеджер</title>
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
		<h1 style="text-align: center">Файловый менеджер</h1>
        <?php
            $files_folder = getcwd() . '\files';
                if(isset($_GET['currDir'])) {
                    $currDir = $_GET['currDir'];
                }else
					$currDir = $files_folder;
        ?>
		
		<div class="editing_container">
			<form action="addDir.php" method="GET">
				<h3>Создать новую папку</h3><br>
				<p>Введите имя папки</p>
				<input type="text" name="name" size="20"></input>
				<?php echo '<input type="text" name="currDir" style="display: none;" value="'.$currDir.'"></input>';?>
				<input type="submit" size="40" value="Создать"></input>
			</form>
			
			<form enctype="multipart/form-data" action="upload.php" method="POST">
				<h3>Загрузить файл<h3><br>
				<input type="file" name="uploadingFile" size="40" required></input>
				<?php echo '<input type="text" name="currDir" style="display: none;" value="'.$currDir.'"></input>';?>
				<input type="submit" size="40" value="Загрузить"></input>
			</form>
			
		</div>
		
		<div class="folder_content_container">
			<?php
			
			echo '<table class="schedule_3">
					<tr class="places">
						<th>Имя</th>
						<th>Размер</th>
						<th>Дата сохранения</th>
						<th>Открыть</th>
						<th>Изменить название</th>
						<th>Удалить</th>
					</tr>';
			if ($currDir != $files_folder) {
				echo '<tr><td>' . dirname($currDir) . '</td>
					<td></td>
					<td></td>
					<td><a href="laba3.php?currDir='.dirname($currDir).'">Вернуться</a></td>
					<td></td>
					<td></td></tr>';
                }		
					
            $catalogContent = scandir($currDir);

            for ($i = 0; $i < count($catalogContent); $i++) {
				if ($catalogContent[$i] != '.' && $catalogContent[$i] != '..')
					if (is_file($currDir .'\\'.$catalogContent[$i])) {
							echo '<tr><td>' . $catalogContent[$i] . '</td>';
							echo '<td>' . filesize($currDir .'\\' . $catalogContent[$i]) . ' bytes</td>';
							echo '<td>' . date (" d/m/Y H:i:s", filemtime($currDir .'\\'.$catalogContent[$i])) . '</td>';
							echo '<td><a href="openFile.php?currDir='.$currDir.'&name='.$catalogContent[$i].'">Открыть</a></td>';
							echo '<td><a href="rename_start.php?currDir='.$currDir.'&name='.$catalogContent[$i].'">Переименовать</a></td>';
							echo '<td><a href="delete.php?currDir='.$currDir.'&name='.$catalogContent[$i].'">Удалить</a></td>';
						}
						else {
							echo '<td>' . $catalogContent[$i] . '</td>';
							echo '<td>--</td>';
							echo '<td></td>';
							echo '<td><a href="laba3.php?currDir='.$currDir . '\\' . $catalogContent[$i].'" >Открыть</a></td>';
							echo '<td><a href="rename_start.php?currDir='.$currDir.'&name='.$catalogContent[$i].'">Переименовать</a></td>';
							echo '<td><a href="delete.php?currDir='.$currDir.'&name='.$catalogContent[$i].'">Удалить</a></td>';
							}
						echo '</tr>';	
            }
			echo '</table>';
            ?>
		</div>
		<div style="margin-left: 20px">
			<p>Действия вдминистратора</p>
			<table style="border: 2px solid black; ">
				<tr>
					<th>Действие</th>
					<th>Дата совершения</th>
					<th>Каталог</th>
				<tr>
				<?php
					$query = "SELECT * FROM admin_actions";
					$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
					$result = mysqli_query($link, $query);
					while($resultArr = mysqli_fetch_assoc($result))
					{
						echo '<tr>
								<td>'.$resultArr['action'].'</td>
								<td>'.$resultArr['date'].'</td>
								<td>'.$resultArr['dir'].'</td>
							</tr>';
					}
				?>
			</table>
		</div>
	</main>
</body>