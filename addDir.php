<?php
    if (isset($_GET['currDir']) && isset($_GET['name'])) {
		
        $path = $_GET['currDir'] . '\\' . $_GET['name'];
        if (!file_exists($path)) 
            mkdir($path);
		
		session_start();
		$link = mysqli_connect($_SESSION['host'], $_SESSION['user'], $_SESSION['pass'], $_SESSION['db']);
		$query = "INSERT INTO admin_actions SET action='addDir', date='".date('Y-m-d')."', dir='".preg_quote($path)."'";
        mysqli_query($link, $query);
		
		//header('Location: laba3.php?currDir='.$_GET['currDir']);
    }
?>
