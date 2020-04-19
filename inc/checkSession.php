<?php

require_once 'user.php';

session_start();

if(!isset($_SESSION['user']))//if the username is NOT in session
{
	header("Location: login.php");
	exit();
}else{  //user is in session
	$user = $_SESSION['user'];
	$user_name = $user->user_name;
	$user_roles = $user->getRoles();
	
	$found=0;
	foreach($user_roles as $urole){
		foreach($page_roles as $prole){
			if($urole==$prole) $found=1;			
		}		
	}
	//echo $found.'<br>';
	if(!$found){
		header("Location: unauthorized.php");
	}
	
}
?>