@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	<title>Hospital</title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
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
				<div class="col-sm-6 mt-4 col-12 text-sm-right text-center">
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
							<a href="" style="text-decoration: underline;">Hospital</a> | <a href="/doctorqueue">Doctor</a>
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
					<center>
					<span >
						<input class="mw-100" alt="Max-width 100%" type="text" name="" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; width: 75%; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
						<img src="gambar/searchicon.png" style="width: 30px;">
					</span>
				</center>
				</div>
			</div>


			<div class="row">
				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<center>								
								<img src="gambar/hospital2.png" class="w-100">
								<div style="color: black;">RS.Mentari</div>
								<div style="color: black;">Jl.Kemerdekaan No.561</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<center>								
								<img src="gambar/hospital3.png" style="width: 91.2%;">
								<div style="color: black;">RS.Rembulan</div>
								<div style="color: black;">Jl.Kebangsaan No.561</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5 d-none d-lg-block">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<center>								
								<img src="gambar/hospital2.png" class="w-100">
								<div style="color: black;">RS.Mentari</div>
								<div style="color: black;">Jl.Kemerdekaan No.561</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<center>								
								<img src="gambar/hospital2.png" class="w-100">
								<div style="color: black;">RS.Mentari</div>
								<div style="color: black;">Jl.Kemerdekaan No.561</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5 ">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<center>								
								<img src="gambar/hospital3.png" style="width: 91.2%;">
								<div style="color: black;">RS.Rembulan</div>
								<div style="color: black;">Jl.Kebangsaan No.561</div>
							</center>
						</div>
					</a>
				</div>

				<div class="col-sm-4 col-6 mt-5  d-none d-lg-block">
					<a href="">
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<center>								
								<img src="gambar/hospital2.png" class="w-100">
								<div style="color: black;">RS.Mentari</div>
								<div style="color: black;">Jl.Kemerdekaan No.561</div>
							</center>
						</div>
					</a>
				</div>
			</div>


			
				
			



			<div class="row mt-5 mb-5">
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
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection