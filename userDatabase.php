<html>
<head>
    <title>User Database (Items Out)</title>
</head>

<body >
<?php 
	$page_roles = array('admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php';
	?>


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

<?php
   require_once 'inc/footer.php';


  ?>
