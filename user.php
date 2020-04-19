<?php

require_once 'dblogin.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User{
	
	public $user_name;
	public $roles = array();
	
	function __construct($user_name){
		global $conn;
				
		$this->user_name = $user_name;
		
		$query="select account_type from member where user_name='$user_name' ";
		
		$result = $conn->query($query);
		if(!$result) die($conn->error);
			
		$rows = $result->num_rows;		
		
		for($i=0; $i<$rows; $i++){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			$role = $row['account_type'];
			array_push($this->roles, $role); 
		}				
		
	}

	function getRoles(){
		return $this->roles;
	}

}

?>