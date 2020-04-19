<?php
	$_SESSION = array(); //or $_SESSION = null; this makes the session array blank
	setCookie(session_name(), '', time()-2592000, '/');
	session_destroy(); //iffy, it may not always work
	
	header("Location: login.php")
?>