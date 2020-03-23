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
	<nav class="navbar navbar-expand-md fixed-top" style="background-color: rgb(67,133,255);">
		<h1><img src="gambar/yayaya.png" style="width: 100px;"></h1>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto mr-5">				
				<li class="nav-item bar1">
					<a href="/home" class="nav-link text-white">Home</a>
				</li>				
				<li class="nav-item bar1">
					<a href="/aboutus" class="nav-link text-white">About Us</a>
				</li>				
				<li class="nav-item bar1">
					<a href="/shop" class="nav-link text-white">Shop</a>
				</li>				
				<li class="nav-item bar1">
					<a href="/doctor" class="nav-link text-white">Doctors</a>
				</li>				
				<li class="nav-item bar1">
					<a href="/hospital" class="nav-link text-white">Hospital</a>
				</li>				
				<li class="nav-item bar1">
					<a href="/login" class="nav-link text-white">Login</a>
				</li>
				<li class="nav-item bar1">
					<a href="#" class="nav-link text-white"><img src="gambar/ADDT.png" style="width: 30px;"></a>
				</li>			
			</ul>
		</div>
	</nav>

	<div>
		@yield('konten')
	</div>	

	<div class="row d-none d-lg-block" style="background-color: rgb(67,133,255); padding-top: 20px;padding-bottom: 20px;margin-top: 100px;">
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
</html>