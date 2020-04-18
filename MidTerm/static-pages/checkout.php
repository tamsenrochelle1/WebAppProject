<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" >

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


</head>

<body >

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
		<a class="navbar-brand" href="homepage.php"> Public Library</a>
	</nav>

  	<div id="detail" class="container-fluid"></div>
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
				<h2>Item Checkout</h2> <br>
					<label for="Qty">Checkout Date:</label>
        <input id="datepicker" width="270" />
        <script>
            $('#datepicker').datepicker({
                uiLibrary: 'bootstrap'
            });
        </script>

<h6>items are due 30 days after checkout</h5>

				<div class="form-group">
					<label for="Qty">Quanity Requested:</label>
					<input type="text" class="form-control form-control-lg" name="Qty" placeholder="#">
				</div>
			</div>

		<div class="col-sm-2"></div>

		</div>

    <div class="form-row justify-content-center">
        <div class="form-group mt-4">
          <a href="user-database.php">
            <input type="submit" value="Checkout Item" class="btn btn-primary btn-lg">
        </div>
    </div>




<!-- Footer -->
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/logo.png" width="30" height="30">
</footer>

</body>
</html>
