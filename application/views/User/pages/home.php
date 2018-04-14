	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/home.css');?>">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<title>Home | Forum</title>
</head>
<body>

	<nav class="navbar navbar-expand-sm">
		<div class="container">
			<a href="<?php echo site_url('home'); ?>" class="navbar-brand">Forum <span class="highlight">UII</span></a>
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
		</div>
	</nav>

	<section class="container-wrap">
		<div class="container">	
			<div class="row">
				
			</div>
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
					<div class="list-group category">
			    	  <h4>Categories</h4>
					  <a href="#" class="list-group-item list-group-item active item">Cras justo odio</a>
					  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
					  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
					  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
					  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
					</div>
				</div>

				<div class="col-md-9 main-content">
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
					  		</li>
					  	</ul>
					  </div>
					  <div class="card-body">
					    <a href=""><h5 class="card-title">Judul Postingan</h5></a>
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
			</div>
		</div>
	</section>
</body>
</html>