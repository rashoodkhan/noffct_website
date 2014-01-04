<?php 
	include 'db_connect.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$encrypt=sha1($password);
	$query="select * from admin where username= '".$username."' and password='".$encrypt."'";
	$result=mysql_query($query) or die($query."<br/>Failed<br/>".mysql_error());
	$norows= mysql_num_rows($result);
	if($norows==0)
	{
		echo 'Enter correct username and password<br>';
		echo $username.'<br>';
		echo $pwd.'<br>';
		echo $norows.'<br>';
		echo 'Redirecting to login.............';
		header('Refresh: 0; URL=login.html');
	}

	else
	{
			echo 'Logging in<br>';	
			session_start();
			$_SESSION['username']=$username;
			header('Location: index.php');
	
	}
?>