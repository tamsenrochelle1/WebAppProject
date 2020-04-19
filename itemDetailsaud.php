<html>
<title>Audiobooks</title>
</html>
<?php
$page_roles = array('member', 'admin');
//require_once 'inc/checksession.php';
require_once 'inc/menu.php';
require_once 'dblogin.php';

$conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

if(isset($_GET['item_id'])) {
	$item_id = $_GET['item_id'];
	  
$query = "SELECT * FROM audiobook WHERE item_id=$item_id";	
$query2 = "SELECT checkout_status FROM copy WHERE item_id=$item_id";
	  
$result = $conn->query($query); //this runs the query
if(!$result) die($conn->error);

$result2 = $conn->query($query2);
if(!$result2) die($conn->error);
    
$rows = $result->num_rows;
$rows2 = $result->num_rows;

for($j=0; $j<$rows; ++$j) {
	$result->data_seek($j);
  	$row = $result->fetch_array(MYSQLI_NUM);

echo <<<_END
	<pre>
 	<p class="item_description">Title: $row[2]</p><p class="Author">Author: $row[6]</p><p class="genre">Genre: $row[7]</p>
	<p class="publisher">Publisher: $row[4]</p><p class="publisher_date">Date Published: $row[5]</p><p class="item_type">Item Type: $row[3]</p><p class="audiobook_id">Book ID: $row[0]</p><p class="item_id">Item ID: $row[1]</p>
	
	<a href='update.php?item_id=$row[1]'>Update Book</a>
	<a href='deleteaudiobook.php?item_id=$row[1]'>Delete Book</a>
	</pre>
	
		
_END;
	}
	
	for($j=0; $j<$rows2; ++$j) {
	$result2->data_seek($j);
  	$row = $result2->fetch_array(MYSQLI_NUM);
	
echo <<<_END
	<pre>
	STATUS: $row[0]
	</pre>
_END;
	
}
}


$conn->close();

?>


<?php require_once 'inc/footer.php';  ?>
