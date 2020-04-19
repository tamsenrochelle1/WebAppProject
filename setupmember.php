<?php


require_once 'dblogin.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "CREATE TABLE `member` (
    `member_id` int(10) NOT NULL AUTO_INCREMENT,
    `roles` varchar(6) NOT NULL,
    `first_name` varchar(20) NOT NULL,
    `last_name` varchar(20) NOT NULL,
    `user_name` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `address_line_1` varchar(50) not null,
    `address_line_2` varchar(50),
    `city` varchar(25) NOT NULL,
    `state` varchar(2) NOT NULL,
    `zip` int(5) NOT NULL,
    `start_date` date NOT NULL,
    `email` varchar(50) NOT NULL,
    `phone_number` varchar(16) NOT NULL,
    PRIMARY KEY (`member_id`)
    )";

$result = $conn->query($query);
if(!$result) die($conn->error);

$salt1 = 'qm&h*';
$salt2 = 'pg!@';

// Admin Accounts
$member_id = 10000;
$roles = 'admin';
$first_name = 'Ethan';
$last_name = 'Larsen';
$user_name = 'elarsen';
$password = 'root';
$address_line_1 = '123 Easy Street';
$address_line_2 = NULL;
$city = 'Salt Lake City';
$state = 'UT';
$zip = 84123;
$start_date = '2020-04-09';
$email = 'ethan.larsen@gmail.com';
$phone_number = '8017215003';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10001;
$roles = 'admin';
$first_name = 'Chandler';
$last_name = 'Braddley';
$user_name = 'cbraddley';
$password = 'root';
$address_line_1 = '567 Some Street';
$address_line_2 = NULL;
$city = 'Salt Lake City';
$state = 'UT';
$zip = 84123;
$start_date = '2020-04-09';
$email = 'Chandler.Braddley@gmail.com';
$phone_number = '8014253625';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10002;
$roles = 'admin';
$first_name = 'Tamsen';
$last_name = 'Reid';
$user_name = 'treid';
$password = 'root';
$address_line_1 = 'River Heights';
$address_line_2 = NULL;
$city = 'South Jordan';
$state = 'UT';
$zip = 84095;
$start_date = '2020-04-09';
$email = 'Tamsen.Reid@gmail.com';
$phone_number = '8017215232';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10003;
$roles = 'admin';
$first_name = 'Dustin';
$last_name = 'Reid';
$user_name = 'Fife';
$password = 'root';
$address_line_1 = 'Oak Drive';
$address_line_2 = NULL;
$city = 'Sandy';
$state = 'UT';
$zip = 84047;
$start_date = '2020-04-09';
$email = 'Dustin.Fife@gmail.com';
$phone_number = '5627524603';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);


// Member Accounts
$member_id = 10004;
$roles = 'member';
$first_name = 'Rudy';
$last_name = 'Gobert';
$user_name = 'rgobert';
$password = 'root';
$address_line_1 = 'Maple Avenue';
$address_line_2 = NULL;
$city = 'Cottonwood Heights';
$state = 'UT';
$zip = 84635;
$start_date = '2020-04-03';
$email = 'Rudy.Gobert@gmail.com';
$phone_number = '8018426325';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10005;
$roles = 'member';
$first_name = 'Mike';
$last_name = 'Conley';
$user_name = 'mconley';
$password = 'root';
$address_line_1 = 'Cherry Street';
$address_line_2 = NULL;
$city = 'Draper';
$state = 'UT';
$zip = 84526;
$start_date = '2020-04-02';
$email = 'Mike.Conley@gmail.com';
$phone_number = '8015632462';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10006;
$roles = 'member';
$first_name = 'Bowser';
$last_name = 'Boss';
$user_name = 'bboss';
$password = 'root';
$address_line_1 = 'Dogwood Lane';
$address_line_2 = NULL;
$city = 'Herriman';
$state = 'UT';
$zip = 84856;
$start_date = '2020-04-01';
$email = 'Bowser.Boss@gmail.com';
$phone_number = '8013698562';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10007;
$roles = 'member';
$first_name = 'Peach';
$last_name = 'Princess';
$user_name = 'pprincess';
$password = 'root';
$address_line_1 = 'Applewood Row';
$address_line_2 = NULL;
$city = 'Riverton';
$state = 'UT';
$zip = 84452;
$start_date = '2020-04-01';
$email = 'Princess.Peach@gmail.com';
$phone_number = '8013698562';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10008;
$roles = 'member';
$first_name = 'Mario';
$last_name = 'Plumber';
$user_name = 'mplumber';
$password = 'root';
$address_line_1 = 'Mario Street';
$address_line_2 = NULL;
$city = 'Layton';
$state = 'UT';
$zip = 84953;
$start_date = '2020-04-05';
$email = 'Mario.Plumber@gmail.com';
$phone_number = '8017536985';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);

$member_id = 10009;
$roles = 'member';
$first_name = 'Lugi';
$last_name = 'Plumber';
$user_name = 'lplumber';
$password = 'root';
$address_line_1 = 'Lugi Street';
$address_line_2 = NULL;
$city = 'Hooper';
$state = 'UT';
$zip = 84456;
$start_date = '2020-04-06';
$email = 'Lugi.Plumber@gmail.com';
$phone_number = '8017856324';
$token = hash('ripemd128', "$salt1$password$salt2");

add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token);


function add_user($conn, $member_id, $roles, $first_name, $last_name, $user_name, $password, $address_line_1, $address_line_2, $city, $state, $zip, $start_date, $email, $phone_number, $token){
	//code to add user here
	$query = "INSERT INTO `member` (`member_id`, `roles`, `first_name`, `last_name`, `user_name`, `password`, `address_line_1`, `address_line_2`, `city`, `state`, `zip`, `start_date`, `email`, `phone_number`) VALUES ('$member_id', '$roles', '$first_name', '$last_name', '$user_name', '$token', '$address_line_1', '$address_line_2', '$city', '$state', '$zip', '$start_date', '$email', '$phone_number')";
	$result = $conn->query($query);
	if(!$result) die($conn->error);
}

?>