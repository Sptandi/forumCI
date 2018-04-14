	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/register.css'); ?>">
</head>
<body>

	<nav class="navbar navbar-expand-sm">
		<a href="<?php echo site_url('login'); ?>" class="navbar-brand">Forum</a>
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
						<input type="submit" name="submit" id="submit" class="btn btn-block" value="Login">

						<a class="akun" href="<?php echo site_url('register'); ?>">Belum punya akun?</a>
					</form>
				</div>
			</div>	
		</div>
	</div>
</body>
</html>

