<html>
<head>
    <title>New User</title>
</head>
		<script type='text/javascript' src='validate.js'></script> 
		<script>
			function validate(form)
			{
				var fail = validateUser_name(form.user_name.value)
				fail += validateEmail(form.email.value) 
				fail += validatePassword1(form.password1.value)
				fail += validatePassword2(form.password2.value)
				if(form.password1.value!="")
					fail += comparePasswords(form.password1.value, form.password2.value)	
							
				if (fail=="") return true
				else { alert(fail); return false}
			}
		</script>

<body >
<?php require_once 'inc/menu.php'; ?>

<div class="col-sm-offset-2 col-sm-10">
<form action="categories.php">
  <div class="form-group">
        <br><h2>Account Creation</h2><br>
  </div>

  <h5>Enter new login credentials:</h5>

  <div class="form-group">
    <input type="email" class="form-control form-control-lg" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
  </div>

  <div class="form-group">
    <input type="password" class="form-control form-control-lg" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="Password" required>
  </div>


  <h5>	Personal Details: </h5>
  <form action="categories.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">First Name</label>
          <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Last Name</label>
          <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" required>
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
    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="employeeCheck">
        <label class="form-check-label" for="invalidCheck3">
          Are you a library employee?
        </label>
      </div>
    </div>

    <div class="form-group">
      <div class="form-check">
        <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck" required>
        <label class="form-check-label" for="invalidCheck">
          Agree to terms and conditions
        </label>
        <div class="invalid-feedback">
          You must agree before submitting.
        </div>
      </div>
    </div>
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>


<?php
    require_once 'dblogin.php';

    $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
    if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages


    if(isset($_POST['user_name'])) //checking if col has a value
    {
      $user_name = $_POST['user_name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $phoneNumber = $_POST['phoneNumber'];
      $streetAddress = $_POST['streetAddress'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipCode = $_POST['zipCode'];
      $employeeCheck = $_POST['employeeCheck'];


      $query = "INSERT INTO member (user_name, password, firstName, lastName, phoneNumber, streetAddress, city, state, zipCode) VALUES ('$email', $password, '$firstName', $lastName, $phoneNumber, $streetAddress, $city, $state, $zipCode)";

    //echo $query.'<br>';
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: categories.php");//this will return you to the view all page

    }


   require_once 'inc/footer.php';
   $conn->close();

  ?>
