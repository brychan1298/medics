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
				<center><div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">OUR DOCTORS </div></center>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="/tambahdokter" class="btn btn-primary" >Add Doctor</a>
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
						<th colspan="2">Action</th>
											
					</tr>
					<?php $__currentLoopData = $adoctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($aa->nama); ?></td>
							<td><?php echo e($aa->nohp); ?></td>
							<td><?php echo e($aa->email); ?></td>
							<td><?php echo e($aa->spesialisasi); ?></td>
							<td><?php echo e($aa->alamat); ?></td>
							<td><?php echo e($aa->kota); ?></td>
							<td><?php echo e($aa->tgl_mulai_kerja); ?></td>
							<td><a href="/doctor/edit/<?php echo e($aa->id); ?>" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;" >EDIT</a></td>
							<td><a href="/doctor/delete/<?php echo e($aa->id); ?>" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;" >DELETE</a></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

				</table>
			</div>
		</div>
	</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TAmedics\resources\views/admin/admindatadoctor.blade.php ENDPATH**/ ?>