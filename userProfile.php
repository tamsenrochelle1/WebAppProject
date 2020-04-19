<html>
<head>
    <title>User Profile</title>
</head>

<body >
<?php 
	$page_roles = array('member','admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php'; 
	?>

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
            <option>Alabama</option>
            <option>Alaska</option>
            <option>Arizona</option>
            <option>Arkansas</option>
            <option>California</option>
            <option>Colorado</option>
            <option>Connecticut</option>
            <option>Delaware</option>
            <option>Florida</option>
            <option>Georgia</option>
            <option>Hawaii</option>
            <option>Idaho</option>
            <option>Illinois</option>
            <option>Iowa</option>
            <option>Kansas</option>
            <option>Kentucky</option>
            <option>Lousiana</option>
            <option>Maine</option>
            <option>Maryland</option>
            <option>Massachusetts</option>
            <option>Mighigan</option>
            <option>Minnesota</option>
            <option>Mississippi</option>
            <option>Montana</option>
            <option>Nebraska</option>
            <option>Nevada</option>
            <option>New Hampshire</option>
            <option>New Jersey</option>
            <option>New Mexico</option>
            <option>New York</option>
            <option>North Carolina</option>
            <option>North Dakota</option>
            <option>Ohio</option>
            <option>Oklahoma</option>
            <option>Oregon</option>
            <option>Pennsylvania</option>
            <option>Rhode Island</option>
            <option>South Carolina</option>
            <option>South Dakota</option>
            <option>Tennessee</option>
            <option>Texas</option>
            <option>Utah</option>
            <option>Vermont</option>
            <option>Virginia</option>
            <option>Washington</option>
            <option>West Virginia</option>
            <option>Wisconsin</option>
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
            $member_id = $_POST['member_id'];
            $roles = 'member';
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
        // Add user_name to userProfuile.php
            $user_name = $_POST['user_name'];
        // Add user_name to userProfuile.php
            $password = $_POST['password'];
            $address_line_1 = $_POST['address_line_1'];
            $address_line_2 = $_POST['address_line_2'];
            $city = $_POST['city'];
            $state = $_POST['state'];
            $zip = $_POST['zip'];
            $start_date = $_POST['start_date'];
            $email = $_POST['email'];
            $phone_number = $_POST['phone_number'];
            
            $query = "INSERT INTO member (`member_id`, `roles`, `first_name`, `last_name`, `user_name`, `password`, `address_line_1, `address_line_2, `city`, `state`, `zip`, `start_date`, `email`, `phone_number`) VALUES
            ('$member_id', '$roles', '$first_name', '$last_name', '$user_name', '$password', '$address_line_1', $address_line_2', '$city', '$state', '$zip', '$start_date', '$email', '$phone_number');


          //echo $query.'<br>';
          $result = $conn->query($query);
          if(!$result) die($conn->error);

          header("Location: inventory.php");//this will return you to the view all page

          }

         require_once 'inc/footer.php';

          $conn->close();
        ?>
