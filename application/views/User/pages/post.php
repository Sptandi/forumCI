	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/post.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Post | ForumUII</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm">
		<div class="container">
			<a href="<?php echo site_url('home'); ?>" class="navbar-brand">Forum <span class="highlight">UII</span></a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="menu">
				<!-- Access Dropdown -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="<?php echo site_url('login'); ?>" class="nav-link">Login</a>
					</li><li class="nav-item">
						<a href="<?php echo site_url('register'); ?>" class="nav-link">Register</a>
					</li>
				</ul>
				<!-- End Access Dropdown -->

				<!-- Profile Dropdown -->
				<ul class="navbar-nav navbar-toggler-right dropdown">
				  <a class="navbar-right dropdown-toggle" role="button" href="" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none; color: #000;" onmouseover="this.style.color='#fff'" onmouseleave="this.style.color='#000'">
				  	<img class="rounded-circle" style="width: 30px;" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
				  </a>

				  <div class="dropdown-menu" aria-labelledby="dropdownMenu">
				  	<p class="dropdown-item dropdown-backdrop">Fikri Ahmadi</p>
				  	<hr>
				  	<a class="dropdown-item" href=""><i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
				  	<a class="dropdown-item" href=""><i class="fa fa-home" style="margin-right: 5px;"></i> Dashboard</a>
				  	<a class="dropdown-item" href=""><i class="fa fa-cog" style="margin-right: 5px;"></i> Setting</a>
				  	<a class="dropdown-item" href="">Logout</a>
				  </div>
				</ul>
				<!-- End Profile Dropdown -->
			</div>
		</div>
	</nav>

	<section class="container-wrap">
		<div class="container">	
			<div class="row">
				<div class="col-md-3">
					<img class="profile-photo rounded-circle" src="<?php echo base_url('assets/img/sample.jpg'); ?>">
					<h5 class="name-user">Fikri Ahmadi</h5>
					<a href="<?php echo site_url('profile'); ?>" class="btn btn-success">View Profile</a>
					<div class="sidebar-line">
						<hr>
					</div>
					<a class="back" href="<?php echo site_url('home'); ?>">
						<h6>Back</h6>
					</a>
				</div>

				<div class="col-md-9">
					<h1 class="title">Judul Postingan Pertama</h1>
					<div class="title-line">
						<hr>
					</div>
					<!-- Card 1 -->
					<div class="card">
					  <div class="card-header">	
					  	<ul class="nav">
					  		<li class="nav-item">
					  			<a href="" class="nav-link">
					  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
					  			</a>
					  		</li>
					  		<li class="nav-item">
					  			<p>Posted By <a href="">Fikri</a> 10 minutes ago</p>
					  			<span class="respond" style="position: absolute; right: 1rem; top:15px;">
						  			<i class="fa fa-thumbs-up" style="margin-right: 1rem;">123</i>
						  			<i class="fa fa-thumbs-down">876</i>
					  			</span>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href=""><h5 class="card-title">Judul Postingan</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					  </div>
					</div>

					<div class="reply">
						<!-- Reply Card 1 -->
						<div class="card">
						  <div class="card-header">	
						  	<ul class="nav">
						  		<li class="nav-item">
						  			<a href="" class="nav-link">
						  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
						  			</a>
						  		</li>
						  		<li class="nav-item">
						  			<p>Replied By <a href="">Andi</a> 9 minutes ago</p>
						  			<span class="respond" style="position: absolute; right: 1rem; top:15px;">
						  			<i class="fa fa-thumbs-up" style="margin-right: 1rem;">123</i>
						  			<i class="fa fa-thumbs-down">876</i>
					  			</span>
						  		</li>
						  	</ul>
						  </div>
						  <div class="card-body">
						    <a href=""><h5 class="card-title">Judul Postingan 2</h5></a>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
						  </div>
						</div>

						<!-- Reply Card 2 -->
						<div class="card">
						  <div class="card-header">	
						  	<ul class="nav">
						  		<li class="nav-item">
						  			<a href="" class="nav-link">
						  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
						  			</a>
						  		</li>
						  		<li class="nav-item">
						  			<p>Replied By <a href="">Paijo</a> 2 hours ago</p>
						  			<span class="respond" style="position: absolute; right: 1rem; top:15px;">
						  			<i class="fa fa-thumbs-up" style="margin-right: 1rem;">123</i>
						  			<i class="fa fa-thumbs-down">876</i>
					  			</span>
						  		</li>
						  	</ul>
						  </div>
						  <div class="card-body">
						    <a href=""><h5 class="card-title">Judul Postingan 3</h5></a>
						    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
						  </div>
						</div>
					</div>

					<div class="load-more">
						<a href="" class="btn btn-load-more">Load More Replies</a>
					</div>

					<div class="sign-in">
						<a class="sign-in-link" href="<?php echo site_url('login'); ?>">Sign in</a><span> first to participate this Thread</span>
					</div>
				</div>
			</div>
		</div>
	</section>

