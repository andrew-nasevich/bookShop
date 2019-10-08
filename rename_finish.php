<?php
    if (isset($_GET['currDir']) && isset($_GET['name']) && isset($_GET['newname']))
    {
        $path = $_GET['currDir'].'\\'.$_GET['newname'];
        if (!file_exists($path))
		{
            rename($_GET['currDir'].'\\'.$_GET['name'], $path);
			
			session_start();
			$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
			$query = "INSERT INTO admin_actions SET action='renameDir', date='".date('Y-m-d')."', dir='".preg_quote($path)."'";
			mysqli_query($link, $query);
		}
		
        header('Location: laba3.php?currDir='.$_GET['currDir']);
        
    }
?>