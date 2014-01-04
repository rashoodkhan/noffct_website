<?php
		$db_host = "";
		$db_user = "";
		$db_password = "";
		$db_name = "noffct";
		$connection=@mysql_connect($db_host, $db_user, $db_password)or die("Database Error - Could not create a connection"); 
		mysql_select_db($db_name,$connection)or die("Database could not be selected");
?>
