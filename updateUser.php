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

    if(isset($_GET['memberId'])){ //we're using a GET array here, in card-details.php we use ?id in our html, this is a GET parameter so we use GET functions here

    $memberId = $_GET['memberId']; //get the val of id from the GET parameter and store in var

    $query = "SELECT * from member where memberId=$memberId ";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;

    for($j=0; $j<$rows; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);


echo <<<_END
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form action="card-update.php" method="post">
                    <h2>Update Gift Card</h2>
                    <div class="form-group mb-4">
                        <label for="giftcardname1">Card Name</label>
                        <input type="text" class="form-control form-control-lg" name="cardName" id="giftcardname1" aria-describedby="giftcardnameinput" value="$row[cardName]">
                    </div>
                    <div class="form-group mb-4">
                        <label for="giftcardtype">Card Type</label>
                        <input type="text" class="form-control form-control-lg" name="cardType" id="giftcardtype" aria-describedby="giftcardnameinput" value=$row[cardType]>
                    </div>
                    <div class="form-group mb-4">
                        <label for="giftcardvalue">Card Value</label>
                        <input type="text" class="form-control form-control-lg" name="cardValue" id="giftcardvalue" aria-describedby="giftcardnameinput" value=$row[cardValue]>
                    </div>
                    <div class="form-group mb-4">
                        <label for="giftcardpoints1">Card Points</label>
                        <input type="text" class="form-control form-control-lg" name="points" id="giftcardpoints1" aria-describedby="giftcardpointsinput" value=$row[points]>
                    </div>
                    <div>
                       <input type='hidden' name='cardId' value='$row[cardId]'>
                       <input type='hidden' name='update' value='yes'>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group mt-4">
                            <input type="submit" value="Update Card" class="btn btn-primary btn-lg">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    </html>


_END;
    }
}


/*
<!-- FORM

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="card-add.php" method="post">
                <h2>New Gift Card</h2>
                <div class="form-group mb-4">
                    <label for="giftcardname1">Card Name</label>
                    <input type="text" class="form-control form-control-lg" name="cardName" id="giftcardname1" aria-describedby="giftcardnameinput" placeholder="enter new gift card name">
                </div>
                <div class="form-group mb-4">
                    <label for="giftcardtype">Card Type</label>
                    <input type="text" class="form-control form-control-lg" name="cardType" id="giftcardtype" aria-describedby="giftcardnameinput" placeholder="enter new gift card type">
                </div>
                <div class="form-group mb-4">
                    <label for="giftcardvalue">Card Value</label>
                    <input type="text" class="form-control form-control-lg" name="cardValue" id="giftcardvalue" aria-describedby="giftcardnameinput" placeholder="enter new gift card value">
                </div>
                <div class="form-group mb-4">
                    <label for="giftcardpoints1">Card Points</label>
                    <input type="text" class="form-control form-control-lg" name="points" id="giftcardpoints1" aria-describedby="giftcardpointsinput" placeholder="enter new gift card points">
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group mt-4">
                        <input type="submit" value="Add Card" class="btn btn-primary btn-lg">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>

-->
*/



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
      $memberId = $_POST['memberId'];
      $startDate = $_POST['startDate'];
      $accountType = $_POST['accountType'];


      $query = "UPDATE member SET member_id=$memberId, account_type='$accountType' email='$email', password='$password', firstName='$firstName', lastName='$lastName', phonenumber=$phoneNumber, streetAddress='$streetAddress', city='$city', state='$state', zipCode=$zipCode, startDate='$startDate'
      WHERE memberId=$memberId"; //cardVal and points are numbers so don't need ''

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: card-list.php");//this will return you to the view all page

    }

   require_once 'inc/footer.php';

    $conn->close();
  ?>
