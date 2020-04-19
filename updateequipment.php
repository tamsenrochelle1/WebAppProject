<?php

$page_roles = array('admin');

require_once 'inc/menu.php';
require_once 'dblogin.php';
require_once 'inc/checksession.php';
?>

<html>
<head>
    <title>Update Equipment</title>
</head>

<body >
<?php
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);
	
if(isset($_GET['item_id'])) {
	$item_id = $_GET['item_id'];
	
	$query = "SELECT * from equipment where item_id=$item_id";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);	

	$rows = $result->num_rows;

	for($j=0; $j<$rows; ++$j) {
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
	<form method='post' action='updateequipment.php'>
	item_id: <input type ="text" name="item_id" id="item_id" value='$row[1]'><br>
	equipment_id: <input type ="text" name="equipment_id" id="equipment_id" value='$row[0]'><br>
	item_description: <input type ="text" name="item_description" id="item_description" value='$row[2]'><br>
	item_type: <input type ="text" name="item_type" id="item_type" value='$row[3]'><br>
	equipment_type: <input type ="text" name="equipment_type" id="equipment_type" value='$row[4]'><br>
	purchase_date: <input type ="text" name="purchase_date" id="purchase_date" value='$row[5]'><br>
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
	$equipment_id = $_POST['equipment_id'];
	$item_description = $_POST['item_description'];
	$item_type = $_POST['item_type'];
	$equipment_type = $_POST['equipment_type'];
	$purchase_date = $_POST['purchase_date'];
		
	$query = "UPDATE equipment set equipment_id=$equipment_id, item_description='$item_description', item_type='$item_type', equipment_type='$equipment_type', purchase_date='$purchase_date' where item_id='$item_id'";
	
	$result = $conn->query($query);
	if(!$result) die($conn->error);	
	
	header("Location: equipmentinventory.php");
		
}
	require_once 'inc/footer.php';
		
$conn->close();	
	
	
?>