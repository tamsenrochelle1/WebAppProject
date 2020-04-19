<html>
<head>
    <title>New User</title>
</head>

<body >
<?php require_once 'inc/menu.php'; ?>

<div class="col-sm-offset-2 col-sm-10">
<form action="categories.php">
  <div class="form-group">
        <br><h2>Account Creation</h2><br>
  </div>

  <h5>Enter new login credentials:</h5>

  <div class="form-group">
    <input type="text" name="user_name" method="post" action="newUser.php"  class="form-control form-control-lg"  id="inputUser_Name" aria-describedby="user_nameHelp" placeholder="Username" required>
  </div>

  <div class="form-group">
    <input type="text" name="password" method="post" action="newUser.php" class="form-control form-control-lg"  id="exampleInputPassword1" placeholder="Password" required>
    <p><br><br></p>
  </div>
  </form>



  <h5>	Personal Details: </h5>
  <form action="categories.php">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">First Name</label>
          <input type="text" name="first_name" method="post" action="newUser.php" class="form-control"  id="inputFirstName" placeholder="First Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputPassword4">Last Name</label>
          <input type="text" name="last_name" method="post" action="newUser.php" class="form-control"  id="inputLastName" placeholder="Last Name" required>
        </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Address</label>
          <input type="text" name="address_line_1" method="post" action="newUser.php" class="form-control"  id="inputAddress" placeholder="1234 S. Main St">
        </div>
      <div class="form-group">
        <label for="inputAddress2">Address 2</label>
        <input type="text" name="address_line_2" method="post" action="newUser.php" class="form-control"  id="inputAddress2" placeholder="Apartment or Unit Number">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" method="post" action="newUser.php" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
          <label for="inputState">State</label>
          <select type="text" name="state" method="post" action="newUser.php" id="inputState" class="form-control">
            <option selected>Choose...</option>
            <option>AL</option>
            <option>AK</option>
            <option>AZ</option>
            <option>AR</option>
            <option>CA</option>
            <option>CO</option>
            <option>CT</option>
            <option>DE</option>
            <option>FL</option>
            <option>GA</option>
            <option>HI</option>
            <option>ID</option>
            <option>IL</option>
            <option>IN</option>
            <option>IA</option>
            <option>KS</option>
            <option>KY</option>
            <option>LA</option>
            <option>ME</option>
            <option>MD</option>
            <option>MA</option>
            <option>MI</option>
            <option>MN</option>
            <option>MS</option>
            <option>MO</option>
            <option>MT</option>
            <option>NE</option>
            <option>NV</option>
            <option>NH</option>
            <option>NJ</option>
            <option>NM</option>
            <option>NY</option>
            <option>NC</option>
            <option>ND</option>
            <option>OH</option>
            <option>OK</option>
            <option>OR</option>
            <option>PA</option>
            <option>RI</option>
            <option>SC</option>
            <option>SD</option>
            <option>TN</option>
            <option>TX</option>
            <option>UT</option>
            <option>VT</option>
            <option>VA</option>
            <option>WA</option>
            <option>WV</option>
            <option>WI</option>
            <option>WY</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" name="zip" method="post" action="newUser.php" class="form-control"  id="inputZip">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress2">Email</label>
        <input type="text" name="email" method="post" action="newUser.php" class="form-control"  id="inputEmail" placeholder="Email Address">
      </div>
      
      <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputPhone">Phone Number</label>
        <input type="text" name="phone_number" method="post" action="newUser.php" class="form-control"  id="inputPhone">
      </div>
    </div>
    
    <button class="btn btn-primary" type="submit">Submit form</button>
  </form>


<?php
  //  require_once 'dblogin.php';

    $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
    if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

    $salt1 = 'qm&h*';
    $salt2 = 'pg!@';

    if(isset($_POST['email'])) //checking if col has a value
    {
      //set date format
      $date = date('Y-m-d H:i:s');

      $member_id = '';
      $roles = 'member';

      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $address_line_1 = $_POST['address_line_1'];
      $address_line_2 = $_POST['address_line_2'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $start_date = '$date';
      $email = $_POST['email'];
      $phone_number = $_POST['phone_number'];
      $token = hash('ripemd128', "$salt1$password$salt2");



      $query = "INSERT INTO member (roles, first_name, last_name, user_name, password, address_line_1, address_line_2, city, state, zip, start_date, email, phone_number) VALUES 
      ('$roles', '$first_name', '$last_name', '$user_name', '$token', '$address_line_1', '$address_line_2', '$city', '$state', '$zip', '$start_date', '$email', '$phone_number')";
      
      $result = $conn->query($query);
      if(!$result) die($conn->error);




    //echo $query.'<br>';
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: categories.php");//this will return you to the view all page

    }


   require_once 'inc/footer.php';
   $conn->close();

  ?>
