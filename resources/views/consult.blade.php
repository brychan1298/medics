@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
		.fs{
			font-size: 40px;
		}
		.is2{
			border:1px solid grey;
			border-radius: 15px 0px 0px 15px; 
			padding-right: 550px; 
			padding-top: 10px;
			padding-bottom: 9px;
			padding-left: 10px;
		}
		.gam{
			border-radius: 50%;
		}
		.nam{
			float: right;margin-right: 180px;
		}
	    @media(max-width: 1024px){
	    	.naik{
	    		margin-top: -330px;
	    		font-size: 40px;
	    		margin-bottom: 50px;
	    	}
	    	.turun{
	    		margin-top: 50px;
	    	}
	    	.is{
	    		padding-right: 150px;
	    	}
	    	.nam2{
	    		margin-top: -100px;
	    	}
	    }
	</style>
</head>
<body>
	<div class="container" style="padding-top:200px;">
		<div class="row">
			<div class="col-sm-6">
				<img src="gambar/doctorcall.png" class="w-100 turun">
			</div>
			<div class="col-sm-6" style="padding-top: 50px;">
					<div class="text-sm-right text-center naik fs">Consult a Doctor</div>
					<div class="d-none d-lg-block text-sm-right">everything becomes easier with your features. let's meet your doctor.</div>
			</div>
		</div>
	</div>

	<div style="background-color: lightblue;margin-top: 100px;" class="d-lg-block d-none">
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
				<center><img src="gambar/doctor3.png" class="w-75"></center>
			</div>
			<div class="col-sm-12">
				<form action="/consultSearch" method="GET">
					<center>
						<span >
							<input type="text" name="cari" value="{{ old('cari') }}" class="is is2" placeholder="Search" style="">
						</span>
						<span style="margin-top: -10px;">
							<button type="submit" style="background-color: #6672EC;padding: 9px;border-radius: 0px 10px 10px 0px; margin-left: -5px;border:none;margin-bottom:-10px;">
								<img src="gambar/searchicon.png" style="width: 30px;">
							</button>
						</span>
					</center>	
				</form>
			</div>
		</div>
	</div>

	<div class="container mt-5">
		<div class="row">
			@foreach($doctor as $d)
				<div class="col-sm-6 mt-3">
					<div style="border: 1px solid grey;border-radius: 15px; padding: 10px;">
						<div style="margin: 10px;">	
							<div class="row">
								<span class="col-3"><img src="../../gambar/{{$d->gambar}}" class ="w-100 gam"></span>
									<span class="col-6">										
										<div style="" class="nam nam2">
										<div style="color: blue;font-size:16px;font-weight:bold;">{{$d->nama}}</div>
										<div style="color: grey;">{{$d->spesialisasi}}</div>
										<div style="color: blue;">FREE</div>
										</div>						
									</span>	
									<span class="col-3">
										<div>
											<a href="/dashboard/{{$d->id}}/{{Auth::user()->id}}" class="btn btn-primary" style="color: white; font-size: 12px;border: 0px; font-weight: bold;padding: 5px 25px 5px 25px;margin-top: 35px;margin-bottom: 10px;">							
														CHAT
											</a>
										</div>		
									</span>
								</div>
							</div>
						</div>
					</div>
			@endforeach
		</div>
		<div class="mt-5 pagination justify-content-center">
			{{$doctor->links()}}
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
			<div class="col-sm-4 col-12 mt-3 mb-5">
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
			<div class="col-sm-4 col-12 mt-3 mb-5">
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
			<div class="col-sm-4 col-12 mt-3 mb-5">
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