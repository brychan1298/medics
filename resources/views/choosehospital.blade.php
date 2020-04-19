@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Choose Hospital</title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}

		@media(max-width: 1024px){
			
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div style="margin-top: 130px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 ">
					<center><img src="../../gambar/asset 16.png" style="width: 400px; margin-top: 40px;"></center>
				</div>
			</div>
		</div>
	</div>
	<div style="margin-top: 90px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-center">
					<center><div style="font-size: 30px; margin-bottom: 20px;">CHOOSE A HOSPITAL</div></center>
				</div>
			</div>
			<div class="row">
				@foreach($chosehos as $c)
				<div class="col-sm-6 mt-4 mb-5">
					<div style="border:1px solid #707070;border-radius: 20px;padding: 20px;">
						<center>
							<div class="row">
								<div class="col-sm-4 col-2">
									<img src="../../gambar/{{$c->tbhospital->img}}" style="width:156px;" class="ml-5 gambar1">
								</div>
								<div class="col-sm-8 col-10" style="text-align: right;">
									<div style="font-size: 28px;">{{$c->tbhospital->nama}}</div>
									<div style="font-size: 13px;color:#707070 ">{{$c->tbhospital->alamat}}</div>
									<div>
										<button style="border:none;background-color: rgb(67,133,255);padding: 5px 20px;border-radius: 10px;margin-top: 20px;color: white; font-weight:bold;">CHOOSE</button>
									</div>
								</div>
							</div>	
						</center>
					</div>					
				</div>
				@endforeach
				<!-- <div class="col-sm-6 mt-4">
					<div style="border:1px solid #707070;border-radius: 20px;padding: 20px;">
						<center>
							<div class="row">
								<div class="col-sm-4 col-2">
									<img src="gambar/Hospital.png" style="width: 150px;" id="gmb1" class="ml-5">
								</div>
								<div class="col-sm-8 col-10" style="text-align: right;">
									<div style="font-size: 28px;">RS.Mentari</div>
									<div style="font-size: 13px;color:#707070 ">Jl.Kemerdekaan No.561</div>
									<div>
										<button style="border:none;background-color: rgb(67,133,255);padding: 5px 20px;border-radius: 10px;margin-top: 20px;color: white; font-weight:bold;">CHOOSE</button>
									</div>
								</div>
							</div>	
						</center>
					</div>					
				</div>

				<div class="col-sm-6 mt-4">
					<div style="border:1px solid #707070;border-radius: 20px;padding: 20px;">
						<center>
							<div class="row">
								<div class="col-sm-4 col-2">
									<img src="gambar/Hospital2.png" style="width:156px;" class="ml-5">
								</div>
								<div class="col-sm-8 col-10" style="text-align: right;">
									<div style="font-size: 28px;">RS.Rembulan</div>
									<div style="font-size: 13px;color:#707070 ">Jl.Kemerdekaan No.561</div>
									<div>
										<button style="border:none;background-color: rgb(67,133,255);padding: 5px 20px;border-radius: 10px;margin-top: 20px;color: white; font-weight:bold;">CHOOSE</button>
									</div>
								</div>
							</div>	
						</center>
					</div>					
				</div>

				<div class="col-sm-6 mt-4">
					<div style="border:1px solid #707070;border-radius: 20px;padding: 20px;">
						<center>
							<div class="row">
								<div class="col-sm-4 col-2">
									<img src="gambar/Hospital.png" style="width: 150px;" class="ml-5 gambar1">
								</div>
								<div class="col-sm-8 col-10" style="text-align: right;">
									<div style="font-size: 28px;">RS.Mentari</div>
									<div style="font-size: 13px;color:#707070 ">Jl.Kemerdekaan No.561</div>
									<div>
										<button style="border:none;background-color: rgb(67,133,255);padding: 5px 20px;border-radius: 10px;margin-top: 20px;color: white; font-weight:bold;">CHOOSE</button>
									</div>
								</div>
							</div>	
						</center>
					</div>					
				</div>

				<div class="col-sm-6 mt-4 mb-5">
					<div style="border:1px solid #707070;border-radius: 20px;padding: 20px;">
						<center>
							<div class="row">
								<div class="col-sm-4 col-2">
									<img src="gambar/Hospital2.png" style="width:156px;" class="ml-5 gambar1">
								</div>
								<div class="col-sm-8 col-10" style="text-align: right;">
									<div style="font-size: 28px;">RS.Rembulan</div>
									<div style="font-size: 13px;color:#707070 ">Jl.Kemerdekaan No.561</div>
									<div>
										<button style="border:none;background-color: rgb(67,133,255);padding: 5px 20px;border-radius: 10px;margin-top: 20px;color: white; font-weight:bold;">CHOOSE</button>
									</div>
								</div>
							</div>	
						</center>
					</div>					
				</div> -->
			</div>
		</div>
	</div>
</body>
</html>
@endsection