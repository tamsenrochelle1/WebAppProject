<?php

if (!in_array('Admin', $_SESSION['roles'])) {
	header("Location: card-list.php"); //needle in a haystack
}

?>
