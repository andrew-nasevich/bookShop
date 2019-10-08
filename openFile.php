<?php
    if (isset($_GET['currDir']) && isset($_GET['name'])) {
		
		$path = $_GET['currDir'] . '\\' . $_GET['name'];
		
		echo '<div style="background-color: rgba(200, 10, 10, 0.5); width: 120px"><a href="laba3.php?currDir='.$_GET['currDir'].'&name='.'">Вернуться назад</a></div>';
		
		echo '<h1 style="text-align: center;">Содежимое файла</h1>';
		echo '<div style="padding: 10px 200px; text-align: center;">';
		echo file_get_contents($path);
		echo "</div>";
		
		session_start();
		$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
		$query = "INSERT INTO admin_actions SET action='openFile', date='".date('Y-m-d')."', dir='".preg_quote($path)."'";
        mysqli_query($link, $query);
    }
?>
