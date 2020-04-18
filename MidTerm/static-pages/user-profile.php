<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

</head>

<body >

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

		<a class="navbar-brand" href="homepage.php">
			<img src="img\logo.png" width="30" height="30">
			Public Library
		</a>
	</nav>


	<div class="col-sm-offset-2 col-sm-10">
<form action="category.php">
		<div class="form-group">
          <br><h2>Account Update</h2><br>
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
  <form action="category.php">
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


      <button type="submit" class="btn btn-primary">Update Personal Details</button>
    </form>

<br><br>
  <!-- Footer -->
  <footer class="navbar navbar-expand-lg navbar-dark bg-dark">
      <img src="img/logo.png" width="30" height="30">
  </footer>

  </body>
  </html>

</body>
</html>
