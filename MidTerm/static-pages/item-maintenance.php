<!DOCTYPE html>
<html lang="en">
<head>
    <title>Item Maintenance</title>

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
	</nav>


	</div>	<div id="detail" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
			</div>
			<div class="search-container">
				<form action="item-maintenance.php">
					<input type="text" placeholder="Search..." name="search">
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 text-center">
				<img src="img\book.jpg" height='500' width='320'><br>
			</div>
			<div class="col-sm-4 text-left">
				<h2>Item Maintenance</h2> <br>
        <div class="form-group">
          <label for="Description">Item Title:</label>
          <input type="text" class="form-control form-control-lg" name="Description" placeholder="Item Title">
        </div>
				<div class="form-group">
					<label for="Description">Item Description:</label>
					<input type="text" class="form-control form-control-lg" name="Description" placeholder="Description">
				</div>
        <div class="form-group">
          <label for="Qty">Category:</label>
          <input type="text" class="form-control form-control-lg" name="Qty" placeholder="Category">
        </div>
				<div class="form-group">
					<label for="Qty">Quantity In Stock:</label>
					<input type="text" class="form-control form-control-lg" name="Qty" placeholder="1, 2, 3">
				</div>
    </div>

		<div class="col-sm-2"></div>
		</div>
		<div class="row">
			<div class="col-sm-5 text-right">
				<a href="inventory.php">
				<button type="submit" class="btn btn-primary btn-lg">Add</button>
				</a>
			</div>
			<div class="col-sm-2 text-center">
				<a href="inventory.php">
				<button type="submit" class="btn btn-primary btn-lg">Update</button>
				</a>
			</div>
			<div class="col-sm-5 text-left">
				<a href="inventory.php">
				<button type="submit" class="btn btn-primary btn-lg">Delete</button>
				</a>
			</div>
		</div>
		<br>
	</div>



<!-- Footer -->
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/logo.png" width="30" height="30">
</footer>

</body>
</html>
