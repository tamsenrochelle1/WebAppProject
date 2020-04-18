<?php

//after validating password, we create new User object, add User object to the session
//NOTE: we changed username vars a bit in this example from previous auth pages

//this page goes with continue2.php

require_once 'user.php'; //we add this for creating new User object after password is validated
require_once 'dblogin.php';
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);


if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {

	//Get values from SERVER
	$tmp_user_name = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_USER']);//$_SERVER is the array object from the browser
	$tmp_password = mysql_entities_fix_string($conn, $_SERVER['PHP_AUTH_PW']); //PHP_AUTH_* is where the un and pw are stored after prompt

	//get password from DB w/ SQL
	$query = "SELECT password FROM user WHERE username = '$tmp_user_name'";

	$result = $conn->query($query); // -> means "run"
	if(!$result) die($conn->error);

	$rows = $result->num_rows;
	$password="";
	for($j=0; $j<$rows; $j++)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_ASSOC);
		$password = $row['password'];//name of column for MYSQLI_ASSOC, MYSQLI_NUM would be 3 for the 3rd column in database
	}

	//Salt and Hash incoming password
	$salt1 = 'qm&h*';
	$salt2 = 'pg!@';
	$token = hash('ripemd128',"$salt1$tmp_password$salt2"); //hash is what hashes the password with the salt

	//Compare passwords
	if($token == $password){

		$user = new User($tmp_user_name); //create a new User object

		session_start();//this must be called anywhere you want to use a session
		$_SESSION['user_name'] = $user;	//instead of adding username to the session, we get the user object that contains the username
		$_SESSION['password'] = $tmp_password; //this is the plaintext, not hashed password
		//$_SESSION['forename'] = $tmp_user_name;
		//$_SESSION['surname'] = $tmp_username;




		echo "successful login<br>";
		echo "<a href='card-list.php'>Continue</a><br>";
	}
	else
	{
		echo "login error<br>";
	}

}else{
	header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
	die('Please enter your username and password');
}



//sanitization functions
function mysql_entities_fix_string($conn, $string){
	return htmlentities(mysql_fix_string($conn, $string));
}

function mysql_fix_string($conn, $string){
	if(get_magic_quotes_gpc()) $string = stripslashes($string);
	return $conn->real_escape_string($string);
}




?>
