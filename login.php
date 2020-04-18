<html>
<head>
    <title>New User</title>
</head>

<body >
<?php require_once 'inc/menu.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
            <form action="categories.php" method="post">
                <h2>Account Login</h2>
                <div class="form-group mb-4">
                    <input type="email" class="form-control form-control-lg" name="exampleInputEmail1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="exampleInputPassword1" id="exampleInputPassword1" placeholder="Password">
                </div>
                 <div class="form-row justify-content-center">
                  <div class="form-group mt-4">
                      <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                  </div>
                </div>
        <a href="newUser.php"> No account? Create one now! <a/>
            </form>

        </div>
    </div>
</div>




<?php
   require_once 'inc/footer.php';


  ?>
