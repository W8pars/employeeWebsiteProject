

<?php require 'master.php';?>

<div class="container text-center">
	<h1> Welcome to the Registration Page </h1>
</div>

<div class="container text-right">
	<h2> Please Enter Your Information Below to Register.</h2>

<form>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="userfName">First Name</label>
			<input type="text" class="form-control" id="userfNameInput" placeholder="First Name">
		</div>
		<div class="form-group col-md-6">
			<label for="userlName">Last Name</label>
			<input type="text" class="form-control" id="userlNameInput" placeholder="Last Name">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="userEmailInput">Email</label>
			<input type="email" class="form-control" id="userEmailInput" placeholder="Email">
		</div>
		<div class="form-group col-md-6">
			<label for="userPassword">Password</label>
			<input type="password" class="form-control" id="userPasswordInput" placeholder="Password">
		</div>
	</div>
	<div class= form-group col-md-6">
		<label for="inputPasswordAgain">Enter Password Again</label>
		<input type="password" class="form-control" id="userPasswordInput2" placeholder="Enter Password Again">
	</div>
	<div class="form-group">
		<label for="inputAddress">Address</label>
		<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
	</div>
	<div class="form-group">
		<label for="inputAddress2">Address 2</label>
		<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
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
			<option>...</option>
		</select>
	</div>
	<div class="form-group col-md-2">
		<label for="inputZip">Zip</label>
		<input type="text" class="form-control" id="inputZip">
	</div>
<button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
<?php require 'footer.php';?>