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
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 160px;">NEW DOCTORS </div></center>
			</div>
		</div>
	</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px;">
		<div class="row" style="margin-top:40px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12">
				<div>
					<form action="/doctor/update" method="post">
					<?php echo e(csrf_field()); ?>

					<input type="hidden" name="id" value="<?php echo e($doctor->id); ?>">
					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">Name<br><input type="text" name="nama" value="<?php echo e($doctor->nama); ?>" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Phone Number <br><input type="text" name="nohp" value="<?php echo e($doctor->nohp); ?>" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">
								<input type="file" name="gambar" accept="image/*"><br><img src="../../gambar/addphoto.png" style="margin-right:20px;width: 280px;height: 280px;position: absolute;">
							</div>
						</div>
					</div>
					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">Specialist<br><input type="text" name="spesialisasi" value="<?php echo e($doctor->spesialisasi); ?>" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Email<br><input type="text" name="email" value="<?php echo e($doctor->email); ?>" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4" style=""></div>
						</div>
					</div>

					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">Practice Start Date<br><input type="date" name="tgl_mulai_kerja" value="<?php echo e($doctor->tgl_mulai_kerja); ?>" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Alamat<br><textarea style="width: 92%;position: absolute; border-radius: 15px; border:1px solid #707070; padding-left:10px; height:135px;" name="alamat"><?php echo e($doctor->alamat); ?></textarea>
							</div>
						</div>
					</div>

					<div class="container mb-5">
						<div class="row">
							<div class="col-sm-4">Kota<br><input type="text" name="kota" value="<?php echo e($doctor->kota); ?>" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4"></div>
							<div class="col-sm-4">
								<input type="submit" name="" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 18px 50px; margin-left: 160px;">
							</div>
						</div>
					</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TAmedics\resources\views/admin/editdoctor.blade.php ENDPATH**/ ?>