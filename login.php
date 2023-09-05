

<?php require 'master.php';?>

<div class="container text-center">
	<h1> Welcome to the Login Page </h1>
</div>
<div class="container text-center">
	<form>
		<div class="form-group">
    			<label for="userEmailInput">Email address</label>
   			<input type="email" class="form-control" id="userEmailInput" aria-describedby="emailHelp" placeholder="Enter email">
    			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  		</div>
  		<div class="form-group">
    			<label for="userPasswordInput">Password</label>
    			<input type="password" class="form-control" id="userPasswordInput" placeholder="Password">
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>

<?php require 'footer.php';?>