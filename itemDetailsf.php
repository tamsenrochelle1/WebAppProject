<html>
<title>Movies</title>
</html>
<?php
$page_roles = array('member', 'admin');
require_once 'inc/checksession.php';
require_once 'inc/menu.php';
require_once 'dblogin.php';


$conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

if(isset($_GET['item_id'])) {
	$item_id = $_GET['item_id'];
	  
$query = "SELECT * FROM film WHERE item_id=$item_id";	
	  
$result = $conn->query($query); //this runs the query
if(!$result) die($conn->error);
    
$rows = $result->num_rows;

for($j=0; $j<$rows; ++$j) {
	$result->data_seek($j);
  	$row = $result->fetch_array(MYSQLI_NUM);

echo <<<_END
	<pre>
 	<p class="item_description">Title: $row[2]</p><p class="director">Director: $row[4]</p><p class="genre">Genre: $row[6]</p><p class="release_date">Release Date: $row[5]</p>
	<p class="item_type">Item Type: $row[3]</p><p class="film_id">Movie ID: $row[0]</p><p class="item_id">Item ID: $row[1]</p>
	
	<a href='cart.php'</a><input type='submit' value="Add to Cart"></a>
	<a href='update.php?item_id=$row[1]'>Update Movie</a>
	<a href='delete.php?item_id=$row[1]'>Delete Movie</a>
	</pre>
	
		
_END;
	}
}

$conn->close();

?>


<?php require_once 'inc/footer.php';  ?>
