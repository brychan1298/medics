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
		.lpis{
			width: 20%;
			margin: 0px;
			
		}
		.lpis:hover{
			background-color: rgb(67,133,255);
			color: white;
			border:none;
			animation: slide
		}
		.koko:hover{
			border-color: rgb(67,133,255);
			background-color: rgb(67,133,255);
		}
		.is2{
			border:1px solid grey;
			border-radius: 15px 0px 0px 15px; 
			padding-right: 550px; 
			padding-top: 10px;
			padding-bottom: 9px;
			padding-left: 10px;
		}
		.flip-card {
		  background-color: transparent;
		  width: 315px;
		  height: 315px;
		  perspective: 1000px;
		}

		.flip-card-inner {
		  position: relative;
		  width: 100%;
		  height: 100%;
		  text-align: center;
		  transition: transform 0.6s;
		  transform-style: preserve-3d;
		  
		}

		.flip-card:hover .flip-card-inner {
		  transform: rotateY(180deg);
		}

		.flip-card-front, .flip-card-back {
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  -webkit-backface-visibility: hidden;
		  backface-visibility: hidden;
		}

		.flip-card-front {
		  
		  color: black;
		}

		.flip-card-back {
		  background-color: white;
		  color: white;
		  transform: rotateY(180deg);
		  border:1px solid #707070;
		  border-radius: 15px;
		  padding: 40px;
		}
	    @media(max-width: 1024px){
	    	.lpis{
				padding-right: 0px;
				padding-left: 0px;
				width:80%;
				margin: 0px;
				text-align: center;
			}
			.is{
				padding-right: 100px;
			}
			
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
				<div class="col-sm-10 col-8"></div>
				<div class="col-sm-2 col-4 mt-5">	
					<center>
						<img src="gambar/calendar.png" class="w-25"> 
						<div style="color: #2680EB;" class="mt-2">
							Queue History
						</div>
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mt-5">
					<form action="/UdocSearch" method="GET">
						<center>
							<span >
								<input type="text" name="cari" value="{{ old('cari') }}" placeholder="Search" class="is is2">
							</span>
							<span>
								<button type="submit" style="background-color: #6672EC;padding-top: 11px;padding-bottom: 7px;padding-left: 10px;padding-right: 10px;border-radius: 0px 10px 10px 0px; margin-left: -5px;border:none;">
									<img src="gambar/searchicon.png" style="width: 30px;">
								</button>
							</span>
						</center>	
					</form>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 d-lg-block d-none">
					<center>
					<span style="font-size: 20px;color: black;" class="col-sm-6">						
							<a href="/hospital" class="lpis btn border-dark" >Hospital</a>
						</span>
						<span style="font-size: 20px;color: black;" class="col-sm-6">
							<a href="" class="lpis btn btn-primary text-whitr border-primary">Doctor</a>
						</span>
					</center>
				</div>		
				<div style="font-size: 20px;color: black;" class="col-sm-6 col-6 d-lg-none d-sm-block">
						<center>	
						<a href="/hospital" class="lpis btlpis btn border-dark">Hospital</a>
						</center>
					</div>
					<div style="font-size: 20px;color: black;" class="col-sm-6 col-6 d-lg-none d-sm-block">
						<center>	
						<a href="" class="lpis btn btn-primary text-whitr border-primary">Doctor</a>
						</center>
					</div>				
			</div>



			<div class="row">
				@foreach($doctor2 as $d)
					@guest
					<div class="col-sm-4 col-6 mt-5">
						<a href="/login" class="koko">
							<div class="flip-card">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      <div style="border:2px solid #707070;border-radius: 15px;width: 100%;height: 310px;padding: 0px 10px;padding-top: 35px;">
									<center>								
										<img src="../../gambar/{{$d->gambar}}" class="w-50" style="border-radius: 50%;">
										<div style="color: black;font-weight: bold;font-size: 18px;margin-top: 20px;">{{$d->nama}}</div>
										<div style="color: black;">{{$d->spesialisasi}} Spesialist</div>
									</center>
								</div>
							    </div>
							    <div class="flip-card-back">
							      <h1><div style="color: black;font-weight: bold;font-size: 18px;margin-top: 20px;">{{$d->nama}}</div></h1> 
							      <div style="color: black;margin-bottom: 20px;">{{$d->spesialisasi}} Spesialist</div> <img src="../../gambar/{{$d->gambar}}" class="w-25" style="border-radius: 50%;"><br>
							      <a href="/login" class="btn btn-primary mt-5">Select Doctor</a>
							    </div>
							  </div>
							</div>
						</a>
					</div>	
					@else
					<div class="col-sm-4 col-6 mt-5">
						<a href="/detaildoctor/{{$d->id}}" class="koko">
							<!-- <div style="border:2px solid #707070;border-radius: 15px;width: 100%;height: 340px;padding: 0px 10px;padding-top: 35px;">
								<center>								
									<img src="../../gambar/{{$d->gambar}}" class="w-50" style="border-radius: 50%;">
									<div style="color: black;font-weight: bold;font-size: 18px;margin-top: 20px;">{{$d->nama}}</div>
									<div style="color: black;">{{$d->spesialisasi}} Spesialist</div>
								</center>
							</div> -->

							<div class="flip-card">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      <div style="border:2px solid #707070;border-radius: 15px;width: 100%;height: 310px;padding: 0px 10px;padding-top: 35px;">
									<center>								
										<img src="../../gambar/{{$d->gambar}}" class="w-50" style="border-radius: 50%;">
										<div style="color: black;font-weight: bold;font-size: 18px;margin-top: 20px;">{{$d->nama}}</div>
										<div style="color: black;">{{$d->spesialisasi}} Spesialist</div>
									</center>
								</div>
							    </div>
							    <div class="flip-card-back">
							      <h1><div style="color: black;font-weight: bold;font-size: 18px;margin-top: 20px;">{{$d->nama}}</div></h1> 
							      <div style="color: black;margin-bottom: 20px;">{{$d->spesialisasi}} Spesialist</div> <img src="../../gambar/{{$d->gambar}}" class="w-25" style="border-radius: 50%;"><br>
							      <a href="/detaildoctor/{{$d->id}}" class="btn btn-primary mt-5">Select Doctor</a>
							    </div>
							  </div>
							</div>
						</a>
					</div>

					@endguest
				@endforeach
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