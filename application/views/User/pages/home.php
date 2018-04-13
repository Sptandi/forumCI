<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/home.css');?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title></title>
</head>
<body>
	<div class="container">	
		<div class="row">
			<div class="col-md-12 title-forum">
				<h1>Forum</h1>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="input-group mb-3 search-thread">
				  <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" placeholder="Search thread">
				</div>
				<input type="submit" class="bt" name="submit">
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
				<div class="card">
				  <div class="card-header">
				  	Features replied 19 minutes ago
				  </div>
				  <div class="card-body">
				    <h5 class="card-title">Special title treatment</h5>
				    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				  </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>