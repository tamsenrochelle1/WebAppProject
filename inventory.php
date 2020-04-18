<html>
<head>
    <title>Categories</title>
</head>

<?php
    require_once 'inc/menu.php';
    require_once 'dblogin.php';
?>

<body >
<!-- GIFT CARDS -->
<div class="container py-5">
    <h1>Gift Cards</h1>
    <hr>
    <h2 class="mt-4">Choose a category:</h2>
      <div class="row">


  <?php

    $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
    if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

    $query = "Select * from inventoryz.books"; //this is the query
    $result = $conn->query($query); //this will run the query, send in the query string, we store the result of the query and store in result variable
    if(!$result) die($conn->error); //if result is false, pull up the error

    $rows = $result->num_rows;

    for($j=0; $j<$rows; $j++)
    {
    $result->data_seek($j); //we're calling the data_seek() from the result for each row number, this gives us result for each row

    $row = $result->fetch_array(MYSQLI_ASSOC);

echo <<<_END

        <div class="col-md-3">
            <div class="card mb-3">
                <a href="itemDetails.php?ISBIN=$row[ISBIN]"><img src="images/$row[quantity].jpeg" class="card-img-top" alt="Item"></a>
                <div class="card-body">
                    <h5 class="Name">$row[Name]</h5>
                    <p class="Text">$row[Quantity]</p>
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
