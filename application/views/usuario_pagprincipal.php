<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>pag principal</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>

</head>
<body style="background: url(<?php echo base_url();?>img/fondo2.jpg) no-repeat;background-size: cover;background-attachment: fixed;">

	<div class="container">
		<header class="text-white">
	        <div class="container">
	            <div class="row align-items-center my-3">
	                <div class="col-md-6">
	                    <img src="<?php echo base_url();?>img/logo.png" class="img-fluid" width="100">
	                </div>
	                <div class="col-md-6 text-end">
	                    <a href="#" class="btn btn-outline-info me-2">log in</a>
	                    <a href="#" class="btn btn-outline-info me-2">registr</a>
	                    <a href="#" class="btn btn-outline-info me-2">Botón 3</a>
	                </div>
	            </div>
	        </div>
	    </header>
	    	
		
		<div class="row">
			<div class="col-md-4">
				<aside>
					
				</aside>
			</div>			 
			<div class="col-md-8 my-5">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		  			<div class="carousel-inner">
					    <div class="carousel-item active">
					      <img src="img/img3.png" class="d-block w-100 img-fluid" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/img1.jpg" class="d-block w-100" alt="...">
					    </div>
					    <div class="carousel-item">
					      <img src="img/img8.jpg" class="d-block w-100" alt="...">
					    </div>		    
					    <div class="carousel-item">
					      <img src="img/img4.jpg" class="d-block w-100" alt="...">
					    </div>		   
					    <div class="carousel-item">
					      <img src="img/img5.jpg" class="d-block w-100" alt="...">
					    </div>
		  			</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					</button> 
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					</button>
				</div>	
			</div>
		</div>	
		
		
	</div>
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>