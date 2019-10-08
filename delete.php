<?php
    if (isset($_GET['currDir']) && isset($_GET['name'])) {
        $path = $_GET['currDir'] . '\\' . $_GET['name'];
	
		recDel($path);
		
		session_start();
		$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
		$query = "INSERT INTO admin_actions SET action='delete', date='".date('Y-m-d')."', dir='".preg_quote($path)."'";
        mysqli_query($link, $query);
		
        header('Location: laba3.php?currDir='.$_GET['currDir']);
    }

function recDel($dir)
{
	if (!is_file($dir))
	{
		$dirContent = scandir($dir);
		for($i = 0; $i < count($dirContent); $i++) {
			var_dump($dirContent);
			if ($dirContent[$i] != '.' && $dirContent[$i] != '..')
			{
				if (!is_file($dir . '\\' . $dirContent[$i]))
					recDel($dir . '\\' . $dirContent[$i]);
				else
					unlink($dir . '\\' . $dirContent[$i]);
			}
		}
		
		rmdir($dir);
	} else
        unlink($dir);
}
?>