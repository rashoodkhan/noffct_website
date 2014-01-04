<?php
	session_start();
	session_regenerate_id();
	if(!isset($_SESSION['username']))     
	{
    	header("Location: login.html");
	}
	echo "Succesfully Signed In";
?>

<a href='logout.php'>Logout</a>