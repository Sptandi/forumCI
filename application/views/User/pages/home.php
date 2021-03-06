	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/home.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Home | Forum</title>

</head>
<body>

	<nav class="navbar navbar-expand-sm fixed-top">
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
				  	<a class="dropdown-item" href="<?php echo site_url('author/fikrius'); ?>"><i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
				  	<a class="dropdown-item" href="<?php echo site_url('home'); ?>"><i class="fa fa-home" style="margin-right: 5px;"></i> Dashboard</a>
				  	<a class="dropdown-item" href="<?php echo site_url('setting'); ?>"><i class="fa fa-cog" style="margin-right: 5px;"></i> Setting</a>
				  	<a class="dropdown-item" href="<?php echo site_url('logout'); ?>">Logout</a>
				  </div>
				</ul>
				<!-- End Profile Dropdown -->
			</div>
		</div>
	</nav>

	<section class="container-wrap" style="min-height: 70rem; margin-top: 75px;">
		<div class="container">	
			<div class="row">
				<div class="col-md-3">
					<div class="input-group mb-3 search-thread">
					  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Search thread">
					</div>
					<div class="input-group mb-3 sm-12">
						<input type="submit" class="btn btn-success" name="submit" value="Create Thread">
					</div>
					<div class="sidebar-line">
						<hr>
					</div>

					<!-- Top Thread -->
					<div class="list-group category">
			    	  <h4>Top Threads</h4>
					  <a href="#" class="list-group-item list-group-item-action">Pemilwa Rektor</a>
					  <a href="#" class="list-group-item list-group-item-action">Sarasehan Pencairan Mapala Unisi</a>
					  <a href="#" class="list-group-item list-group-item-action">Unisi ArtFest</a>
					  <a href="#" class="list-group-item list-group-item-action">UII Story : LEM U</a>
					  <a href="#" class="list-group-item list-group-item-action disabled">PMB UII 2018</a>
					</div>

					<!-- Category -->
					<div class="list-group category">
			    	  <h4>Categories</h4>
					  <a href="#" class="list-group-item list-group-item active item">Cras justo odio</a>
					  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
					</div>
				</div>

				<div class="col-md-6 main-content">
					<!-- Baris slideshow berita terpopuler dan space iklan -->
					<div class="row">
						<!-- Slideshow berita terpopuler -->
						<div class="col-md-12">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							 	<ol class="carousel-indicators">
							    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							    	<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							    	<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							  	</ol>

							  	<div class="carousel-inner">
							    	<div class="carousel-item active">
							      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="First slide">
							      		<div class="carousel-caption d-none d-md-block">
											<a href="#" style="color: inherit;"><h5>Status Gunung Merapi</h5></a>
										    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										    tempor incididunt ut labore et dolore magna aliqua. Ut</p>
										</div>
							    	</div>

							    	<div class="carousel-item">
							      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="Second slide">
							      		<div class="carousel-caption d-none d-md-block">
											<a href="#" style="color: inherit;"><h5>Status Gunung Merapi</h5></a>
										    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										    tempor incididunt ut labore et dolore magna aliqua. Ut</p>
										</div>
							    	</div>

							    	<div class="carousel-item">
							      		<img class="d-block w-100" src="<?php echo base_url('assets/img/merapi.jpg'); ?>" alt="Third slide">
							      		<div class="carousel-caption d-none d-md-block">
											<a href="#" style="color: inherit;"><h5>Status Gunung Merapi</h5></a>
										    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										    tempor incididunt ut labore et dolore magna aliqua. Ut</p>
										</div>
							    	</div>
							  	</div>

							  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Previous</span>
							  	</a>

							  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
							    	<span class="sr-only">Next</span>
							  	</a>
							</div>
						</div>
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
					  			<p>Posted By <a href="<?php echo site_url('author/fikrius'); ?>">Fikri</a> 10 minutes ago</p>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href="<?php echo site_url('post'); ?>"><h5 class="card-title">Judul Postingan</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
					  </div>
					</div>

					<!-- Card 2 -->
					<div class="card">
					  <div class="card-header">	
					  	<ul class="nav">
					  		<li class="nav-item">
					  			<a href="" class="nav-link">
					  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
					  			</a>
					  		</li>
					  		<li class="nav-item">
					  			<p>Posted By <a href="">Andi</a> 9 minutes ago</p>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href=""><h5 class="card-title">Judul Postingan 2</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
					  </div>
					</div>

					<!-- Card 2 -->
					<div class="card">
					  <div class="card-header">	
					  	<ul class="nav">
					  		<li class="nav-item">
					  			<a href="" class="nav-link">
					  				<img src="<?php echo base_url('assets/img/sample.jpg'); ?>" class="img-fluid rounded-circle">
					  			</a>
					  		</li>
					  		<li class="nav-item">
					  			<p>Posted By <a href="">Paijo</a> 2 hours ago</p>
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href=""><h5 class="card-title">Judul Postingan 3</h5></a>
					    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sedUt enim ad minim...</p>
					  </div>
					</div>
				</div>

				<div class="col-md-3 iklan" style="margin-top: 1rem;">
					<div class="iklan-satu">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/infografis banjir jkt.jpg'); ?>">
						</a>
					</div>
					<hr>
					<div class="iklan-dua" style="margin-top: 1rem;">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/minion.gif'); ?>">
						</a>
					</div>
					<hr>
					<div class="iklan-dua" style="margin-top: 1rem;">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/madya.jpg'); ?>">
						</a>
					</div>
					<hr>
					<div class="iklan-tiga" style="margin-top: 1rem;">
						<a href="#">
							<img style="width: 100%;" src="<?php echo base_url('assets/img/iklan/tangguh award.jpg'); ?>">
						</a>
					</div>
				</div>

			</div>
		</div>
	</section>
