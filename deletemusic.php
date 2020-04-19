<?php

$page_roles = array('admin');

require_once 'inc/menu.php';
require_once 'dblogin.php';
require_once 'inc/checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['item_id'])) {
	$item_id = $_GET['item_id'];
	
	$query = "delete from music where item_id=$item_id";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);	
}
	
$result = $conn->query($query);
if(!$result) die($conn->error);	
	
$conn->close();	

header("Location: categories.php");	
	

function get_post($conn, $var) {
return $conn->real_escape_string($_POST[$var]);
}


?>