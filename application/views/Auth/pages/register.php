	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/register.css'); ?>">
</head>
<body>

	<nav class="navbar navbar-expand-sm">
		<a href="<?php echo site_url('home'); ?>" class="navbar-brand">Forum</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a href="<?php echo site_url('login'); ?>" class="nav-link">Login</a>
				</li><li class="nav-item">
					<a href="<?php echo site_url('register'); ?>" class="nav-link">Register</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 offset-lg-4 offset-md-4 offset-sm-2 offset-xs-2">
				<div class="card">
					<div class="card-header">
						Register
					</div>
					<form method="POST" action="" class="form-login">
						<div class="form-group">
							<label for="username"><b>Username </b><sup>*</sup></label>
							<input type="text" name="username" id="username" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="email"><b>Email </b><sup>*</sup></label>
							<input type="email" name="email" id="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="password"><b>Password </b><sup>*</sup></label>
							<input type="password" name="password" id="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="confirm_password"><b>Confirm Password </b><sup>*</sup></label>
							<input type="confirm_password" name="confirm_password" id="confirm_password" class="form-control" required>
						</div>
						<input type="submit" name="submit" id="submit" class="btn btn-block" value="Register">
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>

