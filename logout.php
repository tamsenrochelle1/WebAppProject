<?php

session_start(); //this must be used every time you want to use the session. Even to end it.


if(isset($_SESSION['email']))
{
	$_SESSION = array();
	setCookie(session_name(), '', time()-2592000, '/');
	session_destroy();
	
		echo "Logout is successful";

		header("Location: login.php");
}





?>
