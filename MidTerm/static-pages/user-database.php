
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

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Item Name</th>
      <th scope="col">Category</th>
      <th scope="col">Due Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Harry Potter 1</td>
      <td>Book</td>
      <td>May 1, 2020</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Dr. Sleep</td>
      <td>Movie</td>
      <td>April 1, 2020</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Audible Recipes</td>
      <td>AuditoBook</td>
      <td>No Due Date</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td></td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>



<!-- Footer -->
<footer class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="img/logo.png" width="30" height="30">
</footer>

</body>
</html>
