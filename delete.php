<?php

$page_roles = array('admin');

require_once 'inc/menu.php';
require_once 'dblogin.php';
require_once 'inc/checksession.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['item_id'])) {
	$item_id = get_post($conn, 'item_id');

	$query = "delete from inventory where item_id ='$item_Id'
	 	left join book on book.item_id = inventory.item_id
		left join audiobook on audiobook.item_id = inventory.item_id
		left join film on film.item_id = inventory.item_id
		left join magazine on magazine.item_id = inventory.item_id
		left join music on music.item_id = inventory.item_id
		left join equipment on equipment.item_id = inventory.item_id
		 ";
	$result = $conn->query($query);
  if(!$result) echo "DELETE failed: $query <br>" .
	$conn->error . "<br><br>";

  echo <<<_END
  <pre>Book successfully deleted.</pre>
  </br></br>
_END;
}

$conn->close();

header("Location:categories.php");

function get_post($conn, $var) {
return $conn->real_escape_string($_POST[$var]);
}


?>