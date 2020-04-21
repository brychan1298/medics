@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>		
	<title></title>
	<style type="text/css">
		.bar1{
			padding-right: 10px;
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div class="container" style="margin-top: 200px;border:1px solid grey; margin-bottom: 100px;border-radius: 15px;">
		<div class="row">
			<div class="col-sm-12">
				<div>
					@if(isset($profs))
						<center>
							<div style="margin-bottom: 50px;font-size: 50px;margin-top: 20px;">Patient Details</div>
						</center>
						<div style="width: 100%;margin-bottom: 50px;">
							<a href="/thisMe/{{$iddokter}}/{{$idhospital}}/{{Auth::user()->id}}" style="margin-left: 85%;font-size: 23px;">Is This You?</a>
						</div>
						<form action="/insertpatient" method="GET">
							<input type="hidden" name="dokter" value="{{$docter->nama}}">
							<input type="hidden" name="spesialist" value="{{$docter->spesialisasi}}">
							<input type="hidden" name="id_hospital" value="{{$idhospital}}">
							<div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Date</b><br><input type="date" name="date" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Phone Number</b><br><input type="text" value="{{$profs->no_hp}}" name="nohp" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
								</div>
							</div>
							<div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Patient Name</b><br><input type="text" value="{{$profs->nama}}" name="nama" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Disease</b><br><textarea name="disease" style="width: 100%;resize: none;height: 150px;border-radius: 10px;border: 1px solid grey;"></textarea></div>
									<!-- <div class="col-sm-6"><b>Address</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div> -->
								</div>
							</div>
							<!-- <div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Date of Birth</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Disease</b><br><textarea style="width: 100%;resize: none;height: 150px;border-radius: 10px;border: 1px solid grey;"></textarea></div>
								</div>
							</div> -->
							<div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6"><button class="btn btn-primary" style="color: white;margin-left: 420px;padding: 10px;" type="submit">Queue Up</button></div>
								</div>
							</div>
						</form>
					@else
						<center>
							<div style="margin-bottom: 50px;font-size: 50px;margin-top: 20px;">Patient Details</div>
						</center>
						<div style="width: 100%;margin-bottom: 50px;">
							<a href="/thisMe/{{$iddokter}}/{{$idhospital}}/{{Auth::user()->id}}" style="margin-left: 85%;font-size: 23px;">Is This You?</a>
						</div>
						<form action="/insertpatient" method="GET">
							<input type="hidden" name="dokter" value="{{$docter->nama}}">
							<input type="hidden" name="spesialist" value="{{$docter->spesialisasi}}">
							<input type="hidden" name="id_hospital" value="{{$idhospital}}">
							<div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Date</b><br><input type="date" name="date" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Phone Number</b><br><input type="text" name="nohp" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
								</div>
							</div>
							<div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Patient Name</b><br><input type="text" name="nama" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Disease</b><br><textarea name="disease" style="width: 100%;resize: none;height: 150px;border-radius: 10px;border: 1px solid grey;"></textarea></div>
									<!-- <div class="col-sm-6"><b>Address</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div> -->
								</div>
							</div>
							<!-- <div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Date of Birth</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Disease</b><br><textarea style="width: 100%;resize: none;height: 150px;border-radius: 10px;border: 1px solid grey;"></textarea></div>
								</div>
							</div> -->
							<div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6"><button class="btn btn-primary" style="color: white;margin-left: 420px;padding: 10px;" type="submit">Queue Up</button></div>
								</div>
							</div>
						</form>
					@endif
				</div>				
			</div>
		</div>
	</div>
</body>
</html>
@endsection