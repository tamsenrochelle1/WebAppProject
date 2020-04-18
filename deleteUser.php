<?php

require_once 'inc/checksession.php';
require_once 'dblogin.php';
require_once 'inc/checkRole.php';
require_once 'inc/menu.php';


$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

if(isset($_POST['member_id'])) {
	$member_id=get_post($conn, 'member_id');
	$query="DELETE FROM member WHERE member_id='$member_id'";
	$result=$conn->query($query);
	if(!$result) echo "DELETE failed: $query <br>" .
	$conn->error . "<br><br>";

	echo <<<_END
	<pre>User successfully deleted.</pre>
	</br></br>
_END;
}

//$result->close();
$conn->close();

function get_post($conn, $var) {
	return $conn->real_escape_string($_POST[$var]);
}


?>
