@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>		
	<title>Doctor</title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
		html, body{
			overflow-x: hidden;
			width: 100%;
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div style="margin-top: 130px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					 <center><img src="gambar/hospital.png" class="w-75"></center>
				</div>
				<div class="col-sm-6 mt-4  col-12 text-sm-right text-center">
					<div>
						<div style="font-size: 45px;">Hospital Queue</div>
						<div style="color: #8B8B8B">Hospital Queues help you to book queues at the hospital so that you no longer need to come directly to the hospital</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div>
		<div class="container mt-5">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<div style="font-size: 20px;color: black;">
							<a href="/hospital">Hospital</a> | <a href="" style="text-decoration: underline;">Doctor</a>
						</div>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-8 col-7"></div>
				<div class="col-sm-4 col-5 mt-4">
					<img src="gambar/calendar.png" style="width: 50px;"> 
					<span style="color: #2680EB;">
						Queue History
					</span>
				</div>
				<div class="col-sm-12 mt-5">
					<form action="/UdocSearch" method="GET">
						<center>
							<span >
								<input type="text" name="cari" value="{{ old('cari') }}" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; padding-right: 550px; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
							</span>
							<span>
								<button type="submit" style="background-color: #6672EC;padding: 12px;border-radius: 0px 10px 10px 0px; margin-left: -5px;border:none;">
									<img src="gambar/searchicon.png" style="width: 30px;">
								</button>
							</span>
						</center>	
					</form>
				</div>
			</div>


			<div class="row">
				@foreach($doctor2 as $d)
				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="../../gambar/{{$d->gambar}}" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">{{$d->nama}}</div>
								<div style="color: black;">{{$d->spesialisasi}} Spesialist</div>
							</center>
						</div>
					</a>
				</div>
				@endforeach
				<!--<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="gambar/doctor1.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">Dr.Artanto</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="gambar/doctor2.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">Dr.Susan</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5 d-none d-lg-block">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="gambar/doctor1.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">Dr.Artanto</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="gambar/doctor1.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">Dr.Artanto</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="gambar/doctor2.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">Dr.Susan</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5  d-none d-lg-block">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 50px 10px;">
							<center>								
								<img src="gambar/doctor1.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;">Dr.Artanto</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>-->
			</div>
			<div class="mt-5 pagination justify-content-center">
				{{$doctor2->links()}}
			</div>	
			</div>
		</div>
	</div>
</body>
</html>
@endsection