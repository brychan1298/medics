<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	<title></title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
	</style>	
</head>
<body data-spy="scroll" data-target="menu">
	<nav style="background-color: rgb(67,133,255);" class="navbar navbar-dark navbar-expand-md fixed-top">
		<h1><img src="../../img/apasi.png" style="width: 120px;"></h1>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item bar1">
					<a href="/Aqueue" class="nav-link text-white">Queue</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/Adoctor" class="nav-link text-white">Doctor</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/Amedicine" class="nav-link text-white">Medicine</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/Ahospital" class="nav-link text-white">Hospital</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/Acheck" class="nav-link text-white">Check</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/Acustomer" class="nav-link text-white">Customer</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/Apatient" class="nav-link text-white">Patient</a>					
				</li>
			</ul>
		</div>
	</nav>

	<div>
		<?php echo $__env->yieldContent('konten'); ?>
	</div>	

	<div class="row d-none d-lg-block" style="background-color: rgb(67,133,255); padding-top: 20px;padding-bottom: 20px;margin-top: 250px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img class="nn1" src="../../img/asuransi.jpg" style="width: 100px;margin-left: 150px;">
				</div>
				<div class="col-sm-2">
					<div class="jj1">Extra Links</div>
					<div class="jj2">About Us</div>
					<div class="jj3">Doctors</div>
					<div class="jj4">Shop</div>
				</div>
				<div class="col-sm-2">
					<div class="jj5">Contact us</div>
					<div class="jj6">(628)-502-111</div>
					<div class="jj7">brychan@gmail.com</div>
				</div>
				<div class="col-sm-4">
					<div class="jj8">Social Media</div>
					
				</div>
			</div>
		</div>				
	</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\TAmedics\resources\views/admin/master.blade.php ENDPATH**/ ?>