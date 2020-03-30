@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
	</style>
</head>
<body>
	<div class="container" style="padding-top:200px;">
		<div class="row">
			<div class="col-sm-6">
				<img src="gambar/doctorcall.png" class="w-100">
			</div>
			<div class="col-sm-6" style="padding-top: 50px;">
					<div style="font-size: 40px; text-align: right;">Consult a Doctor</div>
					<div style="text-align: right;">everything becomes easier with your features. let's meet your doctor.</div>
			</div>
		</div>
	</div>

	<div style="background-color: lightblue;margin-top: 100px;">
		<div class="container" style="padding-bottom: 50px;">
			<div class="row">
				<div class="col-sm-6">
					<div style="font-size: 45px;margin-top: 50px;">Make an Appoinment Online</div>
					<div style="text-align: left;">
						we can also arrange the time to consult the doctor we want.<br> so that we can manage our time properly.<br> with this feature everything becomes instant and gets better.
					</div>
				</div>
				<div class="col-sm-6">
					<div style="float: right;margin-top: 50px;"><img src="gambar/doctor2.png" style="width: 300px;"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">	
		<div class="row">
			<div class="col-sm-12">
				<center><img src="gambar/doctor3.png" style="width: 750px;"></center>
			</div>
			<div class="col-sm-12">
				<center>
					<input type="text" name="" placeholder="Search..." style="border:1px solid lightgrey;border-radius: 10px;width: 800px;padding-left:15px;height: 40px;margin-top: -5px;">
				</center>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			@foreach($doctor as $d)
				<div class="col-sm-6">
					<div style="border: 1px solid grey;border-radius: 15px; padding: 10px;">
						<div style="margin: 10px;">	
							<span><img src="../../gambar/{{$d->gambar}}" style="width: 80px;border-radius: 50%;padding-right: 12px;"></span>
							<span>
								<div style="float: right;">
									<button style="background-color: blue;color: white; font-size: 12px;border: 0px; font-weight: bold;padding: 5px 25px 5px 25px;margin-top: 35px;margin-bottom: 10px;">							
										CHAT
									</button>
								</div>						
								<div style="float: right;margin-right: 210px;">
									<div style="color: blue;font-size:16px;font-weight:bold;">{{$d->name}}</div>
									<div style="color: grey;">{{$d->spesialisasi}}</div>
									<div style="color: blue;">FREE</div>
								</div>						
							</span>					
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>

		<div class="container">		
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

	<div style="margin-top: 80px;">
		<center>
			<div style="font-size: 40px;">WHY CHAT FEATURE</div>
			<div><img src="gambar/pembatas.png" style="width: 160px;margin-bottom: 30px;"></div>
		</center>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div style="border: 1px solid lightgrey;padding: 30px;border-radius: 15px;">
					<center>
						<div style="text-align: center;color:#2E5EBE;font-size: 20px;margin-bottom: 15PX;font-weight: semibold;">MORE EFFECTIVE</div>
						<img src="gambar/Asset 18.png" style="width: 200px;margin-bottom: 20px;">
							<div class="mt-2">
								<center>
									with this feature everything will feel easy, so it is more effective when using this application.
								</center>
							</div>
					</center>
				</div>
			</div>
			<div class="col-sm-4">
				<div style="border: 1px solid lightgrey;padding: 30px;border-radius: 15px;">
					<center>
						<div style="text-align: center;color:#2E5EBE;font-size: 20px;margin-bottom: 15PX;font-weight: semibold;">QUICK REPLY</div>
						<img src="gambar/Asset 15.png" style="width: 200px;margin-bottom: 20px;">
							<div class="mt-2">
								<center>
									of course we will get a faster response when using this application. we can contact doctors with various expertise.
								</center>
							</div>
					</center>
				</div>
			</div>
			<div class="col-sm-4">
				<div style="border: 1px solid lightgrey;padding: 30px;border-radius: 15px;">
					<center>
						<div style="text-align: center;color:#2E5EBE;font-size: 20px;margin-bottom: 15PX;font-weight: semibold;">FRIENDLY $ HELPER</div>
						<img src="gambar/Asset 20.png" style="width: 200px;margin-bottom: 20px;">
							<div class="mt-2">
								<center>
									the response needed we of course want to get a response quickly, so with our features we can all get it.
								</center>
							</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection