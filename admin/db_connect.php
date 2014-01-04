<?php
		$db_host = "localhost";
		$db_user = "rashid";
		$db_password = "Orange20202!";
		$db_name = "noffct";
		$connection=@mysql_connect($db_host, $db_user, $db_password)or die("Database Error - Could not create a connection"); 
		mysql_select_db($db_name,$connection)or die("Database could not be selected");
?>