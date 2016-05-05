<?php
	session_start();
	
	if($_SESSION['uname'] != NULL && $_SESSION['upass'] != NULL)
		{
			session_destroy();
			header('location:../login.php');
			
		}


?>