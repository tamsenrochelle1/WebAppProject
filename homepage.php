<html>
<head>
    <title>Homepage</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" >

</head>

<body >




<div id="portfolio" class="container-fluid text-center bg-grey">

	  <h2>Welcome!  <a href="login.php">Login</a> to view Inventory!</h2>
	  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">

		<ol class="carousel-indicators">
		  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		  <li data-target="#myCarousel" data-slide-to="1"></li>
		  <li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner" role="listbox">
		  <div class="item active">
			<img src="images/homepage1.jpg">
		  </div>

		  <div class="item">
			<img src="images/homepage2.jpg">
		  </div>

		  <div class="item">
			<img src="images/homepage3.jpg">
		  </div>
		</div>

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		  <span class="sr-only">Previous</span>
		</a>

		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		  <span class="sr-only">Next</span>
		</a>
	  </div>
	</div>
	<br>


  <?php
     require_once 'inc/footer.php';


    ?>
