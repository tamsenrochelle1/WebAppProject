<?php

$page_roles = array('admin');

require_once 'inc/menu.php';
require_once 'dblogin.php';
require_once 'inc/checksession.php';
?>

<html>
<head>
    <title>card-add</title>
</head>

<body >
<?php
    $conn = new mysqli($hn, $un, $pw, $db); //this is built-in object for PHP
    if($conn->connect_error) die($conn->connect_error); //calls function to die for all those error messages

    if(isset($_GET['item_Id'])){

    $cardId = $_GET['item_id']; 

    $query = "SELECT * from inventory where item_Id=$item_Id ";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;

    for($j=0; $j<$rows; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);


        echo <<<_END

                <div class="col-md-3">
                    <div class="card mb-3">
                        <div class="card-body">
                            <a href="itemDetails.php?book_id=$row[0]">$row[0]</a>
                            <p class="Author">Author: $row[7]</p>
        					<p class="ISBN">ISBN: $row[4]</p>
                        </div>
                    </div>
                </div>

        _END;

    }
}




//check for incoming parameter from the name='update' input in the form above, this is a POST param
    if(isset($_POST['update']))
    {
      $item_Id = $_POST['item_ID'];
      $item_description = $_POST['item_description'];
      $item_type = $_POST['item_type'];
      $copy_id = $_POST['copy_id'];
      $library_id = $_POST['library_id'];


      $query = "UPDATE inventory SET item_id=$item_id, item_description='$item_description', item_type='$item_type', copy_id=$copy_id, library_id=$library_id WHERE item_id=$item_id ";

    $result = $conn->query($query);
    if(!$result) die($conn->error);

    header("Location: categories.php");//this will return you to the view all page

    }

   require_once 'inc/footer.php';

    $conn->close();
  ?>
