	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/Auth/login.css'); ?>">
</head>
<body>

	<nav class="navbar navbar-expand-sm" style="background-color: #18BC9C;">
		<a href="" class="navbar-brand" style="color: #fff; font-weight: bold;">Forum</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a style="color: #fff;" href="" class="nav-link">Login</a>
				</li><li class="nav-item">
					<a style="color: #fff;" href="" class="nav-link">Register</a>
				</li>
			</ul>
		</div>
	</nav>

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
							<input style="background-color: #18BC9C; color: #fff;" type="submit" name="submit" id="submit" class="btn btn-block" value="Login">

							<a href="">Belum punya akun?</a>
						</form>
					</div>
			</div>	
		</div>
	</div>
</body>
</html>

