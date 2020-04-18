<html>
<head>
    <title>User Profile</title>
</head>

<body >
<?php require_once 'inc/menu.php'; ?>

	<div class="col-sm-offset-2 col-sm-10">
<form action="categories.php">
		<div class="form-group">
          <br><h2>User Profile</h2><br>
		</div>
		Enter updated login credentials:
		<div class="form-row">
			<input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
		</div><br>

    <div class="form-row">
			<input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="Current Password">
		</div>

		<div class="form-row">
			<input type="password" class="form-control" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="New Password">
		</div><br>

    <button type="submit" class="btn btn-primary">Update Login Credentials</button>

        <br><br>


	<h5>	Personal Details: </h5>
  <form action="categories.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">First Name</label>
          <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Last Name</label>
          <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 S. Main St">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment or Unit Number">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>Utah</option>
            <option>Texas</option>
            <option>Wyoming</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
      </div>
      <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputPhone">Phone Number</label>
        <input type="tel" class="form-control" id="inputPhone">
      </div>
    </div>


      <button type="submit" class="btn btn-primary">Update Personal Details</button>
    </form>


      <?php
          require_once 'dblogin.php';

          $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
          if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

    //this needs to be updated::
          if(isset($_POST['member'])) //checking if col has a value
          {
            $memberId = $_POST['memberId'];
            $accountType = $_POST['accountType'];
            $email = $_POST['email'];
            $password = $_POST['password'];
	    $firstName = $_POST['firstName'];
	    $lastName = $_POST['lastName'];
	    $phoneNumber = $_POST['phoneNumber'];
	    $streetAddress = $_POST['streetAddress'];
	    $city = $_POST['city'];
	    $state = $_POST['state'];		  
	    $zipCode = $_POST['zipCode'];
	    $startDate = $_POST['startdate'];
	    	  
		  

            $query = "INSERT INTO member (memberId, accountType, email, password, firstName, lastName, phoneNumber, streetAddress, city, state, zipcode, startDate) VALUES ($memberId, '$accountType', '$email', '$password', '$firstName', '$lastName', $phoneNumber, '$streetAddress', '$city', '$state', $zipcode, '$startDate')"; 

          //echo $query.'<br>';
          $result = $conn->query($query);
          if(!$result) die($conn->error);

          header("Location: inventory.php");//this will return you to the view all page

          }

         require_once 'inc/footer.php';

          $conn->close();
        ?>
