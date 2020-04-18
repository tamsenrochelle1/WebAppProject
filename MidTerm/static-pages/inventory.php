<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inventory</title>

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
			<h1>Inventory</h1>

		</div>
		<div class="col-md-3">
			<a href="checkout.php"> View Cart </a> <br>
			<a href="user-details.php"> User Details (Admin) </a> <br>
			<a href="item-maintenance.php"> Item Maintenance (Admin) </a>
		</div>
	</div>

	<hr>
	<!-- This page will look a lot better / make more sense once we integrate the database to create the list!
	-->
  <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Item Name</th>
        <th scope="col">Category</th>
        <th scope="col">Quantity</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Harry Potter 1</td>
        <td>Book</td>
        <td>10</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Dr. Sleep</td>
        <td>Movie</td>
        <td>20</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td>Sewing Machines</td>
        <td>Equipment</td>
        <td>7</td>
      </tr>
      <tr>
        <th scope="row">4</th>
        <td>Enders Game</td>
        <td>Audio Book</td>
        <td>Unlimitted</td>
      </tr>
      <tr>
        <th scope="row">5</th>
        <td>The Beatles</td>
        <td>Music</td>
        <td>Unlimitted</td>
      </tr>

    </tbody>
  </table>

<!-- Footer -->
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/logo.png" width="30" height="30">
</footer>

</body>
</html>
