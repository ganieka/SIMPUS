<?php
	session_start();
	if(isset($_SESSION['login_user']))
	{
		unset($_SESSION['login_user']);
		session_destroy();
	}
	else if(isset($_SESSION['login_admin']))
	{
		unset($_SESSION['login_admin']);
		session_destroy();
	}	
	header("location:index.php");
?>