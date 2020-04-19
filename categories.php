<html>
<head>
    <title>User Database (Items Out)</title>
</head>

<body >
<?php 
	$page_roles = array('member','admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php'; 
	?>


<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-8">
    <h1>Choose a Category: </h1>

  </div>
  <div class="col-md-3">
    <a href="cart.php"> View Cart </a> <br>
    <a href="item-maintenance.php"> Item Maintenance (Admin) </a>
  </div>
</div>

<hr>

  <div class="row">
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="inventory.php"><img src="images/book.jpg" class="card-img-top" alt="Books"></a>
              <div class="card-body">
                  <h5 class="card-title">Books</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="inventory.php"><img src="images/movie.jpg" class="card-img-top" alt="Movie"></a>
              <div class="card-body">
                  <h5 class="card-title">Movies</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="inventory.php"><img src="images/magazine.jpg" class="card-img-top" alt="Magazine"></a>
              <div class="card-body">
                  <h5 class="card-title">Magazines</h5>
              </div>
          </div>
      </div>
  </div>

    <div class="row">
  <div class="col-md-3">
          <div class="card mb-3">
              <a href="inventory.php"><img src="images/audiobook.jpg" class="card-img-top" alt="AudioBooks"></a>
              <div class="card-body">
                  <h5 class="card-title">Audiobooks</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="inventory.php"><img src="images/equipment.jpg" class="card-img-top" alt="Equipment"></a>
              <div class="card-body">
                  <h5 class="card-title">Equipment</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="inventory.php"><img src="images/music.jpg" class="card-img-top" alt="Music"></a>
              <div class="card-body">
                  <h5 class="card-title">Music</h5>
              </div>
          </div>
      </div>
  </div>
</div>







<?php
   require_once 'inc/footer.php';


  ?>
