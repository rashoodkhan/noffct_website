<?php
	session_start();
	unset($_SESSION['username']);
	session_destroy();
	mysql_close($connection);
	header("Location: index.php");
?>