<?php
require_once 'inc/checksession.php';
require_once 'inc/checkRole.php';
?>

<html>
<head>
    <title>User Update</title>
</head>

<body >
<?php require_once 'inc/menu.php';

    require_once 'dblogin.php';

    $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
    if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

    if(isset($_GET['member_id'])){ //we're using a GET array here, in card-details.php we use ?id in our html, this is a GET parameter so we use GET functions here

    $memberId = $_GET['member_id']; //get the val of id from the GET parameter and store in var

    $query = "SELECT * from member where member_id=$member_id ";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;

    for($j=0; $j<$rows; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);


echo <<<_END
   <form action="updateUser.php">
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
    </form>
    </body>
    </html>


_END;
    }
}





//check for incoming parameter from the name='update' input in the form above, this is a POST param
    if(isset($_POST['memberId']))
    {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $phoneNumber = $_POST['phoneNumber'];
      $streetAddress = $_POST['streetAddress'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zipCode = $_POST['zipCode'];
      $member_id = $_POST['memberId'];
      $startDate = $_POST['startDate'];
      $accountType = $_POST['accountType'];


      $query = "UPDATE member SET member_id=$memberId, account_type='$accountType' email='$email', password='$password', firstName='$firstName', lastName='$lastName', phonenumber=$phoneNumber, streetAddress='$streetAddress', city='$city', state='$state', zipCode=$zipCode, startDate='$startDate'
      WHERE memberId=$memberId"; 

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: inventory.php");//this will return you to the view all page

    }

   require_once 'inc/footer.php';

    $conn->close();
  ?>
