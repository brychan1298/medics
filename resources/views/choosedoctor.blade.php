@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	<title>Choose Doctor</title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div style="margin-top: 180px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-12">
					 <center><img src="../../gambar/{{$hospital->img}}" style="width: 350px;"></center>
				</div>
				<div class="col-sm-4 mt-5 col-12 text-center">
					<div class="ml-sm-5 pl-sm-5">
						<div style="font-size: 38px;">{{$hospital->nama}}</div>
						<div>{{$hospital->kota}}, {{$hospital->provinsi}}</div>
						<div>{{$hospital->alamat}}</div>
					</div>
				</div>
				<div class="col-sm-5 mt-5 d-none d-lg-block">
					<div style="text-align: right;margin-right: 200px;">
						<img src="../../gambar/girldoctor.png" class="w-75">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="margin-top: 120px;">
		<div class="container mt-sm-5">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<div style="font-size: 25px;">
							Choose a Doctor:
						</div>						
					</center>
				</div>
			</div>
			<div class="row">				
				<div class="col-sm-12 mt-3">
					<center>
					<span >
						<input type="text" name="" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; width: 65%; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
						<img src="../../gambar/searchicon.png" style="width: 30px;">
					</span>
				</center>
				</div>
			</div>


			<div class="row mt-5">
				@foreach($chosedok as $c)
				<div class="col-sm-4 mt-sm-0 col-6 mt-5">
					<a href="/booking/{{$c->tbdokter->id}}/{{$id}}">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 40px 10px;">
							<center>								
								<img src="../../gambar/{{$c->tbdokter->gambar}}" class="w-50" style="border-radius: 50%;">
								<div style="color: black;" class="mt-3">Dr.{{$c->tbdokter->nama}}</div>
								<div style="color: black;">{{$c->tbdokter->spesialisasi}} Specialist</div>
							</center>
						</div>
					</a>
				</div>
				@endforeach
			<!--	<div class="col-sm-4 mt-sm-0 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 40px 10px;">
							<center>								
								<img src="gambar/doctor1.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;" class="mt-3">Dr.Artanto</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 mt-sm-0 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 40px 10px;">
							<center>								
								<img src="gambar/doctor2.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;" class="mt-3">Dr.Susan</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 mt-sm-0 mt-5 d-none d-lg-block" >
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 40px 10px;">
							<center>								
								<img src="gambar/doctor1.jpg" class="w-50" style="border-radius: 50%;">
								<div style="color: black;" class="mt-3">Dr.Artanto</div>
								<div style="color: black;">Surgery Specialist</div>
							</center>
						</div>
					</a>
				</div>-->
			</div>

			<!-- <div class="row mt-5">
				<div class="col-sm-12">
					<center>
							<div>
								<span>								
									<button  style="border:none;border-radius: 50%;padding: 5px 7px;transform: rotate(180deg);">
										<img src="gambar/hemhem.png" style="width: 20px;">
									</button>
								</span>								
								<span>
									<button  style="background-color:rgb(67,133,255);border:none;border-radius: 50%;padding: 5px 12px;">
										1
									</button>
								</span>
								<span>
									<button  style="border:none;border-radius: 50%;padding: 5px 12px;">
										2
									</button>
								</span>
								<span>
									<button  style="border:none;border-radius: 50%;padding: 5px 12px;">
										3
									</button>
								</span>
								<span>
									<button  style="border:none;border-radius: 50%;padding: 5px 7px;">
										<img src="gambar/hemhem.png" style="width: 20px;">
									</button>
								</span>
								
							</div>					
					</center>					
				</div> -->
<!-- 
				<div class="col-sm-12 mt-4 mb-4">
					<center>
						<div>
							<button class="" style="border:none;background-color:rgb(67,133,255);padding: 10px 40px;color: white;border-radius: 200px;">
								BOOKING
							</button>
						</div>
					</center>
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>
@endsection