<html>
<head>
    <title>Categories</title>
</head>

<body >
<?php 
	$page_roles = array('member', 'admin');
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
  </div>
</div>

<hr>

  <div class="row">
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="bookinventory.php"><img src="images/book.jpg" class="card-img-top" alt="Books"></a>
              <div class="card-body">
                  <h5 class="card-title">Books</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="filminventory.php"><img src="images/movie.jpg" class="card-img-top" alt="Movie"></a>
              <div class="card-body">
                  <h5 class="card-title">Movies</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="magazineinventory.php"><img src="images/magazine.jpg" class="card-img-top" alt="Magazine"></a>
              <div class="card-body">
                  <h5 class="card-title">Magazines</h5>
              </div>
          </div>
      </div>
  </div>

    <div class="row">
  <div class="col-md-3">
          <div class="card mb-3">
              <a href="audiobookinventory.php"><img src="images/audiobook.jpg" class="card-img-top" alt="AudioBooks"></a>
              <div class="card-body">
                  <h5 class="card-title">Audiobooks</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="equipmentinventory.php"><img src="images/equipment.jpg" class="card-img-top" alt="Equipment"></a>
              <div class="card-body">
                  <h5 class="card-title">Equipment</h5>
              </div>
          </div>
      </div>
      <div class="col-md-3">
          <div class="card mb-3">
              <a href="musicinventory.php"><img src="images/music.jpg" class="card-img-top" alt="Music"></a>
              <div class="card-body">
                  <h5 class="card-title">Music</h5>
              </div>
          </div>
      </div>
  </div>
</div>







<?php
   require_once 'inc/footer.php';
	require_once 'inc/checksession.php';
	$page_roles = array('member', 'admin');

  ?>
