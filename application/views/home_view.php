<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style/User/home.css');?>">
</head>
<body>
	<div class="container">	
		<div class="row">
			<div class="col-md-12" style="border-bottom: solid" style="border-spacing: 10px">
				<h1>Forum</h1>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-3">
				<button type="button" class="btn btn-success" style="width: 255px">Create Thread</button>
				<br>
				<br>
				<h3>Categories</h3>
				<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-action active">
				    Cras justo odio
				  </a>
				  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
				  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
				  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
				  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
				</div>
				<br>
				<br>

				<div class="list-group">
				  <a href="#" class="list-group-item list-group-item-action active">
				    Cras justo odio
				  </a>
				  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
				  <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
				  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
				  <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
				</div>
			</div>
			<div class="col-md-9" >
				<div class="card" style="height: 120">
				  <h5 class="card-header">Featured</h5>
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