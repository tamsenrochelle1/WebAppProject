<?php

$page_roles = array('admin');

require_once 'inc/menu.php';
require_once 'dblogin.php';
require_once 'inc/checksession.php';
?>

<html>
<head>
    <title>Update Film</title>
</head>

<body >
<?php
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
	
if(isset($_GET['item_id'])) {
	$item_id = $_GET['item_id'];
	
	$query = "SELECT * from film where item_id=$item_id";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);	

	$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j) {
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
	<form method='post' action='updatefilm.php'>
	item_id: <input type ="text" name="item_id" id="item_id" value='$row[1]'><br>
	film_id: <input type ="text" name="film_id" id="film_id" value='$row[0]'><br>
	item_description: <input type ="text" name="item_description" id="item_description" value='$row[2]'><br>
	item_type: <input type ="text" name="item_type" id="item_type" value='$row[3]'><br>
	director: <input type ="text" name="director" id="director" value='$row[4]'><br>
	release_date: <input type ="text" name="release_date" id="release_date" value='$row[5]'><br>
	genre: <input type ="text" name="genre" id="genre" value='$row[6]'><br
		<input type='hidden' name='item_id' value='$row[1]'>
		<input type='hidden' name='update' value='yes'>
		<input type='submit' value="Update">
		</form>
	</pre>
	
_END;

	}
}	

if(isset($_POST['update'])) {
	
	$item_id = $_POST['item_id'];
	$film_id = $_POST['film_id'];
	$item_description = $_POST['item_description'];
	$item_type = $_POST['item_type'];
	$director = $_POST['director'];
	$release_date = $_POST['release_date'];
	$genre = $_POST['genre'];
	
	$query = "UPDATE film set film_id=$film_id, item_description='$item_description', item_type='$item_type', director='$director', release_date='$release_date', genre='$genre' where item_id='$item_id'";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);	
	
	header("Location: filminventory.php");
		
}
	require_once 'inc/footer.php';
		
$conn->close();	
	
	
?>