<?php

require_once 'dblogin.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

class User{

	public $member_id; //global vars
	public $account_type = array(); //this will contain 1+ roles user is assigned to

	function __construct($member_id){ //constructor, takes username coming from the front
		global $conn; //functions do not have access to global vars, so we have to add 'global' to the $conn object so it's accessible in this func

		$this->member_id = $member_id; //set the username in the class to contain the value of the username coming from the front

		$query="select * from member where member_id='$member_id' "; //get the user roles from DB
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

		$this->account_type[] = $account_type; //for each role, we add it to the user object in the role array
	}

	function getAccount_type(){ //add a Get function to return the roles
		return $this->account_type;
	}

}

//test our code above by creating a new user instance
//$user = new User('bsmith');
//$roles = $user->getRoles();
//print_r($roles);






?>
