<html>
<head>
    <title>inventory</title>
</head>

<body >
<?php require_once 'inc/menu.php'; ?>

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
      <td>AudioBook</td>
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


    <div class="form-row justify-content-center">
        <div class="form-group mt-4">
          <a href="user-database.php">
            <input type="submit" value="Complete Your Checkout" class="btn btn-primary btn-lg">
        </div>
    </div>




    <?php
        require_once 'dblogin.php';

        $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
        if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

//this needs to be updated::
        if(isset($_POST['cardName'])) //checking if col has a value
        {
          $itemdetail = $_POST['itemDetail'];
          $cardType = $_POST['cardType'];
          $cardValue = $_POST['cardValue'];
          $points = $_POST['points'];


          $query = "INSERT INTO gift_card (cardName, cardType, cardValue, points) VALUES ('$cardName', '$cardType',$cardValue, $points)"; //cardVal and points are numbers so don't need ''?

        //echo $query.'<br>';
        $result = $conn->query($query);
        if(!$result) die($conn->error);

        header("Location: card-list.php");//this will return you to the view all page

        }

       require_once 'inc/footer.php';

        $conn->close();
      ?>
