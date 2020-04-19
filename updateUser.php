<?php
	$page_roles = array('admin');
	require_once 'dblogin.php'; 
	require_once 'inc/checksession.php';
	require_once 'inc/menu.php';
?>

<html>
<head>
    <title>User Update</title>
</head>

<body >
<?php require_once 'inc/menu.php';

    require_once 'dblogin.php';

    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn->connect_error) die($conn->connect_error);

    if(isset($_GET['member_id'])){ 
    $member_id = $_GET['member_id']; 
	
    $query = "SELECT * from member where member_id=$member_id ";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;

    for($j=0; $j<$rows; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_NUM);

echo <<<_END
	<pre>
	<form method='post' action='updateuser.php'>
	
	member_id: <input type ="text" name="member_id" id="member_id" value='$row[0]'><br>
	roles: <input type ="text" name="roles" id="roles" value='$row[1]'><br>
	first_name: <input type ="text" name="first_name" id="first_name" value='$row[2]'><br>
	last_name: <input type ="text" name="last_name" id="last_name" value='$row[3]'><br>
	user_name: <input type ="text" name="user_name" id="user_name" value='$row[4]'><br>
	password: <input type ="text" name="password" id="password" value='$row[5]'><br>
	address_line_1: <input type ="text" name="address_line_1" id="address_line_1" value='$row[6]'><br>
	address_line_2: <input type ="text" name="address_line_2" id="address_line_2" value='$row[7]'><br>
	city: <input type ="text" name="city" id="city" value='$row[8]'><br>
	state: <input type ="text" name="state" id="state" value='$row[9]'><br>
	zip: <input type ="text" name="zip" id="zip" value='$row[10]'><br
	start_date: <input type ="text" name="start_date" id="start_date" value='$row[11]'><br>
	email: <input type ="text" name="email" id="email" value='$row[12]'><br>
	phone_number: <input type ="text" name="phone_number" id="phone_number" value='$row[13]'><br>
		<input type='hidden' name='member_id' value='$row[0]'>
		<input type='hidden' name='update' value='yes'>
		<input type='submit' value="Update">
		</form>
	</pre>


_END;
    }
}



    if(isset($_POST['update']))
    {
      $member_id = $_POST['member_id'];
      $roles = $_POST['roles'];
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $user_name = $_POST['user_name'];
      $password = $_POST['password'];
      $address_line_1 = $_POST['address_line_1'];
      $address_line_2 = $_POST['address_line_2'];
      $city = $_POST['city'];
      $state = $_POST['state'];
      $zip = $_POST['zip'];
      $start_date = $_POST['start_date'];
      $email = $_POST['email'];
      $phone_number = $_POST['phone_number'];

      $query = "UPDATE member SET member_id=$memberId, roles='$roles' first_name='$first_name', last_name='$last_name', user_name='$user_name', password='$password', address_line_1=$address_line_1, address_line_2='$address_line_2', city='$city', state='$state', zip=$zip, start_date='$start_date', email=$email, phone_number='$phone_number'
      WHERE memberId=$memberId"; 

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: categories.php");

    }

   require_once 'inc/footer.php';

    $conn->close();
  ?>
