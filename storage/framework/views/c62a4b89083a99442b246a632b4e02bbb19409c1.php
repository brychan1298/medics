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
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 160px;">OUR PATIENT</div></center>
			</div>
		</div>
	</div>
<!-- SEARCH -->
	<div class="container mb-5 mt-4">	
		<div class="row">
			<div class="col-sm-12">
				<center>
					<input type="text" name="" placeholder="Search" class="" style="width: 75%;border-radius: 15px;padding: 10px;">
				</center>
			</div>					
		</div>
	</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 50px;border-radius: 30px;">
		<div class="row mb-3 mt-3" >
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-12">
				<table>
					<tr class="mt-5">
						<td class="pl-4"><img src="gambar/images.png" class="img-fluid" style="width:60px;height: 60px;border-radius: 50px;margin:0px;"></td>
						<td style="font-weight: bold;font-size: 18px; padding-left: 90px;">Nana</td>
						<td style="font-size: 18px; padding-left: 90px;">done</td>
						<td style="font-size: 18px; padding-left: 90px;">15-06-2020 12:00</td>
						<td style="font-size: 18px; padding-left: 90px;">082152755499</td>
						<td><button style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 14px 40px; margin-left: 90px;">SIMPAN</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px;">
		<div class="row mb-3 mt-3" >
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-12">
				<table>
					<tr class="mt-5">
						<td class="pl-4"><img src="gambar/images.png" class="img-fluid" style="width:60px;height: 60px;border-radius: 50px;margin:0px;"></td>
						<td style="font-weight: bold;font-size: 18px; padding-left: 90px;">Nana</td>
						<td style="font-size: 18px; padding-left: 90px;">done</td>
						<td style="font-size: 18px; padding-left: 90px;">15-06-2020 12:00</td>
						<td style="font-size: 18px; padding-left: 90px;">082152755499</td>
						<td><button style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 14px 40px; margin-left: 90px;">SIMPAN</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TAmedics\resources\views/admin/ourpatient.blade.php ENDPATH**/ ?>