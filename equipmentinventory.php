<html>
<head>
    <title>Equipment</title>
</head>

<?php
    require_once 'inc/menu.php';
    require_once 'dblogin.php';
?>

<body >
<!-- GIFT CARDS -->
<div class="container py-5">
    <h1>Equipment</h1>
    <hr>
    <h2 class="mt-4">Choose an equipment:</h2>
      <div class="row">


  <?php

	$page_roles = array('member', 'admin');
	require_once  'dblogin.php';
	require_once 'inc/checksession.php';
	
	
	
	$conn = new mysqli($hn, $un, $pw, $db);
	if($conn->connect_error) {die($conn->connect_error);}

	$query = "SELECT * FROM equipment";
	$result = $conn->query($query); 
	if(!$result) die($conn->error);
	$rows = $result->num_rows;

	for($j=0; $j<$rows; $j++)
	{
		$result->data_seek($j);
		$row = $result->fetch_array(MYSQLI_NUM); 
		$item_description  = $row[2];
		$equipment_type = $row[4];
		$purchase_date    = $row[5];

echo <<<_END

        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-body">
                    <a href="itemDetailsequip.php?item_id=$row[1]">$row[2]</a>
                    <p class="equipment_type">Equipment Type: $row[4]</p>
					<p class="purchase_date">Date Purchased: $row[5]</p>
                </div>
            </div>
        </div>

_END;

}

$conn->close();
  ?>

  </div>
</div>
</body>
</html>
<?php
   require_once 'inc/footer.php';


  ?>
