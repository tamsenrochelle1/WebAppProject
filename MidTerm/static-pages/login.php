<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>

<body>

	<nav class="navbar navbar-dark bg-dark" id="top">
  		<a class="navbar-brand" href="homepage.php">
    	<img src="img\logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    		Public Library
  		</a>
	</nav>

	<div class="container py-5">
    	<div class="row justify-content-center">
	   		<div class="col-md-6">
	            <form action="category.php" method="post">
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
					<a href="new-user.php"> No account? Create one now! <a/>
	            </form>

	       	</div>
   		</div>
	</div>

<!-- Footer -->
<footer class="navbar navbar-dark bg-dark">
    <img src="img/logo.png" width="30" height="30">
</footer>


</body>
</html>
