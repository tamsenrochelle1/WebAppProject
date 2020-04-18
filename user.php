<?php

require_once 'dblogin.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User{

	public $username; //global vars
	public $roles = array(); //this will contain 1+ roles user is assigned to

	function __construct($username){ //constructor, takes username coming from the front
		global $conn; //functions do not have access to global vars, so we have to add 'global' to the $conn object so it's accessible in this func

		$this->username = $username; //set the username in the class to contain the value of the username coming from the front

		$query="select * from user where username='$username' "; //get the user roles from DB
		//echo $query.'<br>';
		$result = $conn->query($query); //run query
		if(!$result) die($conn->error);

		$rows = $result->num_rows; //get the # of rows

		$roles = Array();
		for($i=0; $i<$rows; $i++){
			$row = $result->fetch_array(MYSQLI_ASSOC);
			//echo $row['role']; echo '<br>';
			$role = $row['role'];
		}

		$this->roles[] = $role; //for each role, we add it to the user object in the role array
	}

	function getRoles(){ //add a Get function to return the roles
		return $this->roles;
	}

}

//test our code above by creating a new user instance
//$user = new User('bsmith');
//$roles = $user->getRoles();
//print_r($roles);






?>
