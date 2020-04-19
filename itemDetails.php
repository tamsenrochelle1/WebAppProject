<html>
<head>
    <title>card-details</title>
</head>

<body >
  <?php
    $page_roles = array('member','admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php'; 


    $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
    if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages


    if(isset($_GET['ISBIN']))
    {
      $cardId = $_GET['ISBIN'];
      $query = "Select * from books where ISBIN='ISBIN'";
      $result = $conn->query($query); //this runs the query
      if(!$result) die($conn->error);
    }

    $row = $result->fetch_array(MYSQLI_ASSOC);

    echo <<<_END
     <!-- Card Details -->
        <div class="container">
        <h2>CARD DETAILS</h2><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card mb-3">
                    <img src="Card_images/$row[points].jpeg" class="card-img-top" alt="Barnes and Noble gift card">
                    <div class="card-body">
                        <h5 class="card-title">$row[cardName]</h5>
                        <p class="card-text">$row[points]</p>
                        <a href="card-update.php?cardId=$row[cardId]" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Update</a>
                        <a href="card-delete.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a>
                    </div>
                </div>
            </div>
            </div>

            <div class="col-sm-8">

              <h4><strong>Selected Card:</strong> $row[cardName] card with $row[points] points.</h4><br>
              <p><strong>Details:</strong> We want to thank our customers for their continued support by providing a gift card for future travel. ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <button class="btn btn-lg">Add to Cart</button>
            <button class="btn btn-lg">Remove from Cart</button><br>
            </div>
          </div>

    _END;

  ?>


<?php require_once 'inc/footer.php';  ?>
