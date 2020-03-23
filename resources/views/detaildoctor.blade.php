@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>		
	<title>Detail Doctor</title>
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
				<div class="col-sm-12">
					<center>
						<div style="font-size: 30px;">DETAILS</div>
					</center>
				</div>			
				<div class="col-sm-6 mt-3">
					<div style="border:1px solid;border-radius: 20px;padding: 20px;margin-right: 100px;">
						<div class="row">
							<div class="col-sm-4">
								<img src="gambar/doctor2.jpg" style="width: 100px;border-radius: 50%;">
							</div>
							<div class="col-sm-8">
								<div style="font-size: 25px;margin-top: 18px;">Dr.Susan</div>
								<div>Surgery Specialist</div>
							</div>
						</div>
					</div>					
				</div>

				<div class="col-sm-2"></div>

				<div class="col-sm-4 mt-3">

					<center>
						<div style="border:1px solid grey;border-radius: 20px;">
								<div style="background-color:rgb(67,133,255);padding: 10px;border-radius: 20px 20px 0px 0px; ">
									<div class="row">
										<div class="col-sm-6 text-white" style="font-weight: bold;">
											TIME
										</div>
										<div class="col-sm-6 text-white" style="font-weight: bold;">
											HOSPITAL
										</div>
									</div>
								</div>
								<div class="mt-3">
									<div class="row">
										<div class="col-sm-6">
											09:00 - 12:00
										</div>
										<div class="col-sm-6">
											RS.Mentari
										</div>
									</div>
								</div>
								<div class="mt-3">
									<div class="row">
										<div class="col-sm-6">
											13:00 - 15:30
										</div>
										<div class="col-sm-6">
											RS.Rembulan
										</div>
									</div>
								</div>
								<div class="mt-3">
									<div class="row">
										<div class="col-sm-6">
											16:00 - 17:30
										</div>
										<div class="col-sm-6">
											RS.Bintang
										</div>
									</div>
								</div>
								<div class="mt-3 mb-3">
									<div class="row">
										<div class="col-sm-6">
											18:00 - 20:00
										</div>
										<div class="col-sm-6">
											RS.Matahari
										</div>
									</div>
								</div>
						</div>						
					</center>					
				</div>
			</div>
		</div>
	</div>


	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-12">
				<center>
					<div>
						<button style="border:none;background-color:rgb(67,133,255);padding: 10px 50px;color: white;border-radius: 200px;">
								BOOKING
							</button>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>
</html>
@endsection