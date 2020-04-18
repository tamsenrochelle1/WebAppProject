
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" >

</head>

<body >

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
  <a class="navbar-brand" href="homepage.php"> Public Library</a>
  <div class="search-container">
    <form action="inventory.php">
      <input type="text" placeholder="Search..." name="search">
    </form>
  </div>
</nav>


	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-8">
			<h1>Choose a Category: </h1>

		</div>
		<div class="col-md-3">
			<a href="checkout.php"> View Cart </a> <br>
			<a href="user-details.php"> User Details (Admin) </a> <br>
			<a href="item-maintenance.php"> Item Maintenance (Admin) </a>
		</div>
	</div>

	<hr>

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-3">
                <a href="inventory.php"><img src="img/book.jpg" class="card-img-top" alt="Barnes and Noble gift card"></a>
                <div class="card-body">
                    <h5 class="card-title">Books</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <a href="inventory.php"><img src="img/movie.jpg" class="card-img-top" alt="Starbucks gift card"></a>
                <div class="card-body">
                    <h5 class="card-title">Movies</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <a href="inventory.php"><img src="img/magazine.jpg" class="card-img-top" alt="Cinemark gift card"></a>
                <div class="card-body">
                    <h5 class="card-title">Magazines</h5>
                </div>
            </div>
        </div>
		</div>

	    <div class="row">
		<div class="col-md-3">
            <div class="card mb-3">
                <a href="inventory.php"><img src="img/audiobook.jpg" class="card-img-top" alt="Amazon gift card"></a>
                <div class="card-body">
                    <h5 class="card-title">Audiobooks</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <a href="inventory.php"><img src="img/equipment.jpg" class="card-img-top" alt="Barnes and Noble gift card"></a>
                <div class="card-body">
                    <h5 class="card-title">Equipment</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card mb-3">
                <a href="inventory.php"><img src="img/music.jpg" class="card-img-top" alt="Amazon gift card"></a>
                <div class="card-body">
                    <h5 class="card-title">Music</h5>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/logo.png" width="30" height="30">
</footer>

</body>
</html>
