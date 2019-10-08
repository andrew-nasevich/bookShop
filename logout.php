<?php
	session_start();
	session_destroy();
	
	if (isset($_COOKIE['autorized'])) {
		unset($_COOKIE['autorized']);
		setcookie('autorized', '', time() - 3600, '/');
	}
	
	header('Location: lab_5.php');
?>