<?php

    $page_roles = array('member','admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php';

	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) {die($conn->connect_error);}

if (!isset($_POST['search'])){ //could also use POST
  header("Location:categories.php");
}

$search_sql="SELECT * FROM inventory WHERE item_description LIKE '%".$_POST['search']."%'";
$search_query=mysqli_query($conn, $search_sql);

if(mysqli_num_rows($search_query)!=0){
	$search_rs=mysqli_fetch_assoc($search_query);
}


if(mysqli_num_rows($search_query)!=0){
  do {?>
	<p><?php echo 'Name: '.$search_rs['item_description'];
			 echo '<br>';
			 echo 'Type: '.$search_rs['item_type'];
			 echo '<br>';
			 echo 'ID: '.$search_rs['item_id']; 
			 echo '<br>';
			 ?> </p>
	  
	  
	  
<?php
} while ($search_rs=mysqli_fetch_assoc($search_query));

}else{
  echo "No Results Found";
}

?>

