	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/author.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Fikrius | Author</title>
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

	<section class="author-description">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-6 author">
					<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 username">
					<h3>Fikrius</h3>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 social-media">
					<a href=""><i class="fa fa-facebook-square"></i></a>
					<a href=""><i class="fa fa-twitter-square"></i></a>
					<a href=""><i class="fa fa-instagram"></i></a>
					<a href=""><i class="fa fa-linkedin"></i></a>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2 back">
					<a href="javascript:history.go(-1)">
						<h6><i class="fa fa-arrow-left"></i> Back</h6>
					</a>
				</div>
			</div>

			<div class="row desc">
				<!-- Threads -->
				<div class="col-md-6">
					<h4>Threads</h4>
					<div class="list-group category">
						<a href="" class="list-group-item list-group-item-action">Pemilwa UII 2018</a>
						<a href="" class="list-group-item list-group-item-action">Pendirian Kampus Hukum di Kampus terpadu</a>
					</div>
				</div>

				<!-- Contributions -->
				<div class="col-md-6">
					<h4>Latest Replies</h4>
					<div class="list-group category">
						<a href="" class="list-group-item list-group-item-action">Thread 1 - Menurut saya threadnya kurang bagus...</a>
						<a href="" class="list-group-item list-group-item-action">Thread 2 - Pendirian Kampus Hukum di Kampus terpadu kurang cepat...</a>
					</div>
				</div>
			</div>
		</div>				
	</section>