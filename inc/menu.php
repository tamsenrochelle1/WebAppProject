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
    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    <a class="navbar-brand" href="homepage.php"> Public Library</a>
    <div class="search-container">
      <form action="inventory.php" method="GET" action="search.php">
        <input name="search" input type="text" placeholder="Search..." name="inventory">
  	    <input type="Submit" name="Submit" Value="Search">
      </form>
    </div>
    <li><a href='logout.php'>Logout</a></li>
  </nav>
