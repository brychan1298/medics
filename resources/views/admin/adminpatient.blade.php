@extends('admin.master')
@section('konten')
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
			<div class="col-sm-12" style="margin-top:100px;">
				<img src="img/doctor-malefemale.png" style="position:absolute;width: auto;height: 220px; padding: 0px; margin: 0px;margin-left: 30px;margin-top: 45px;">
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 160px;">PATIENT DATA</div></center>
			</div>
		</div>
	</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px;">
		<div class="" style="margin-top:40px; margin-bottom: 40px;">
			<form action="/Aqueuesubmit" method="POST">
				@csrf
				<!-- <div class="col-sm-12">
					<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
				</div> -->
				<div class="col-sm-12">
					<div>
						<div class="container mb-4">
							<div class="row">
								<div class="col-sm-4">Patient Name<br><input type="text" name="nama" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
								<div class="col-sm-4">Email<br><input type="email" name="email" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
								<div class="col-sm-4">no HP<br><input type="tel" name="nohp" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							</div>
						</div>
						<div class="container mb-4">
						<div class="row">
								<div class="col-sm-4">Disease<br><input type="text" name="disease" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
								<div class="col-sm-4">Appointment<br><input type="time" name="appointment" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
								<div class="col-sm-4">
									Doctor<br>
									<select class="form-control" name="dokter" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;" value="Doctor">
								@foreach($nama as $n)
										<option>{{ $n -> nama }}</option>
								@endforeach									
									</select>
								</div>
							</div>
						</div>
						<div class="container mb-4">
						<div class="row">
								<div class="col-sm-4">
									Specialist<br>
									<select class="form-control" name="spesialist" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;" value="Specialist">
								@foreach($nama as $n)
										<option>{{ $n -> spesialisasi }}</option>
								@endforeach									
									</select>
								</div>
								<div class="col-sm-4">Date<br><input type="date" name="date" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
								<div class="col-sm-4"><button style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 18px 50px; margin-left: 170px;">SIMPAN</button></div>
							</div>
						</div>
					</div>				
				</div>
			</form>
		</div>
	</div>
</body>
</html>
@endsection