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
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 160px;">NEW MEDICINE</div></center>
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
					<form action="/medicine/submit" method="post">
					<?php echo csrf_field(); ?>
					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">Medicine Name<br><input type="text" name="nama" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Kategori<br><input type="text" name="kategori" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">
								<input type="file" name="img" accept="image/*"><br>
								<img src="gambar/addphoto.png" style="margin-right:20px;width: 280px;height: 280px;position: absolute;">
							</div>
						</div>
					</div>

					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">Expired Date<br><input type="date" name="tgl_expired" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Kegunaan<br><input type="text" name="kegunaan" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;">
							</div>
						</div>
					</div>

					<div class="container mb-5">
						<div class="row">
							<div class="col-sm-4">Jumlah Stock<br><input type="text" name="jumlah_stok" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Harga Jual<br><input type="text" name="harga" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4"></div>
						</div>
					</div>

					<div class="container mb-5">
						<div class="row">
							<div class="col-sm-4"></div>
							<div class="col-sm-4"></div>
							<div class="col-sm-4"><button style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 18px 40px; margin-left: 160px;">SIMPAN</button></div>
						</div>
					</div>
					</form>
				</div>				
			</div>
		</div>
	</div>

	<div class="row" id="ww7" style="background-color: rgb(67,133,255); padding-top: 20px;padding-bottom: 20px;">
				<div class="col-sm-4">
					<img class="nn1" src="gambar/asuransi.png" style="width: 100px;margin-left: 150px;">
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
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TAmedics\resources\views/admin/adminmedicine.blade.php ENDPATH**/ ?>