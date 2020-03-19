<?php $__env->startSection('konten'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>	
	<title></title>
	<style type="text/css">
		.bar1{
			padding-right: 10px;
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	
	<!-- judul -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">OUR DOCTORS </div></center>
			</div>
		</div>
	</div>
	<div class="row">				
				<div class="col-sm-12">
					<center>
					<span >
						<input type="text" name="" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; padding-right: 550px; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
						<img src="gambar/searchicon.png" style="width: 30px;">
					</span>
				</center>
				</div>
			</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px; height: 300px">
		<div class="row" style="margin-top:0px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12">									
				<table  class="table-border table col-lg-12" style="border-bottom: 1px solid #707070;margin: 5px;">
					<tr>
						<th>Name</th>
						<th>Phone Number</th>						
						<th>Email</th>						
						<th>Specialist</th>						
						<th>Address</th>						
						<th>Country</th>						
						<th>Date</th>						
					</tr>

				</table>
			</div>
		</div>
	</div>

	<div class="row mt-5 d-none d-lg-block" id="ww7" style="background-color: rgb(67,133,255); padding-top: 20px;padding-bottom: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img class="nn1" src="img/asuransi.jpg" style="width: 100px;margin-left: 150px;">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TAmedics\resources\views/admindatadoctor.blade.php ENDPATH**/ ?>