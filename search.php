<?php

    $page_roles = array('member','admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php';

	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) {die($conn->connect_error);}


if (!isset($_GET['search'])){ //could also use POST
  header("Location:inventory.php");
}
$search_sql="SELECT item_description FROM book WHERE item_description LIKE '%".$_POST['search']."%'";
$search_query=query($search_sql);
    if(mysql_num_rows($search_query) !=0) {
$search_rs=mysql_fetch_assoc($search_query);
}
?>

<?php
if(mysql_num_rows($search_query) !=0){
  do { echo $search_rs['name'];

} while ($search_rs=mysql_fetch_assoc($search_query));
}
else {
  echo "No Results Found";
}
?>
