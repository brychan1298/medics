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

		.containers {
		  position: relative;
		  width: 100%;
		}
		.image {
		  opacity: 1;
		  display: block;
		  width: 100%;
		  height: auto;
		  transition: .5s ease;
		  backface-visibility: hidden;
		}

		.middle {
		  transition: .5s ease;
		  opacity: 0;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  text-align: center;
		}

		.containers:hover .image {
		  opacity: 0.4;
		}

		.containers:hover .middle {
		  opacity: 1;
		}

		.text {
		  background-color: #4CAF50;
		  color: white;
		  font-size: 16px;
		  padding: 16px 32px;
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div style="margin-top: 180px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					 <center><img src="../../gambar/{{$hospital->img}}" style="" class="w-100"></center>
				</div>
				<div class="col-sm-6 mt-5 col-12 text-center">
					<div class="ml-sm-5 pl-sm-5">
						<div style="font-size: 38px;margin-top: 40px;font-size: 48px;">Rs. {{$hospital->nama}}</div>
						<div style="font-size: 30px;">{{$hospital->kota}}, {{$hospital->provinsi}}</div>
						<div style="font-size: 26px;">{{$hospital->alamat}}</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div style="margin-top: 90px;">
		<div class="container mt-sm-5">
			<div class="row">
				<div class="col-sm-12">
					<center>
						<div style="font-size: 28px;">
							Choose a Doctor:
						</div>						
					</center>
				</div>
			</div>
			<div class="row">				
				<div class="col-sm-12 mt-3 mb-2">
					<center>
					<span >
						<input type="text" name="" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; width: 65%; padding-top: 10px;padding-bottom: 9px;padding-left: 15px;">
					</span>
					<span style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
						<img src="../../gambar/searchicon.png" style="width: 30px;">
					</span>
				</center>
				</div>
			</div>


			<div class="row mb-5">
				@foreach($chosedok as $c)
				<div class="col-sm-4 mt-sm-0 col-6 mt-5 btn">
					<a href="/booking/{{$c->tbdokter->id}}/{{$id}}" class="dd">
						<div style="border:2px solid #707070;border-radius: 15px;padding: 40px 10px;" class="mt-3 containers">
							<div class="image">
								<center>							
									<img src="../../gambar/{{$c->tbdokter->gambar}}" class="w-50 mb-2" style="border-radius: 50%;">
									<div style="color: black;font-size: 18px;" class="mt-3">
										<b>Dr. {{$c->tbdokter->nama}}</b></div>
									<div style="color: #017bff;font-size: 18px;">{{$c->tbdokter->spesialisasi}}<br>Specialist</div>
								</center>
							</div>							
							<div class="middle">
								<a href="/booking/{{$c->tbdokter->id}}/{{$id}}" class="btn btn-primary">Select Doctor</a>
							</div>
						</div>						
					</a>
				</div>
				@endforeach
			</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection