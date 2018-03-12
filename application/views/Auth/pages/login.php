<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/login.css'); ?>">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-header">
							Login
						</div>

						<form method="POST" action="" class="form-login">
							<div class="form-group">
								<label for="username"><b>Username</b> </label>
								<input type="text" name="username" id="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="password"><b>Password</b> </label>
								<input type="password" name="password" id="password" class="form-control">
							</div>
							<input type="checkbox" name="remember_me" id="remember_me">
							<span>Remember Me</span>
							<input type="submit" name="submit" id="submit" class="btn btn-success btn-block" value="Login">

							<a href="Forgot Password?"></a>
						</form>
					</div>
			</div>	
		</div>
	</div>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>