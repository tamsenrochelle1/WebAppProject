<?php

if (!in_array('Admin', $_SESSION['account_types'])) {
	header("Location: inventory.php"); //needle in a haystack
}

?>
