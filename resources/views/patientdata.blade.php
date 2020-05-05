@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
@if(session()->get('Error'))
	<div class="alert alert-success" style="margin-top: 160px;font-size: 27px;">
		<b><center>Sorry, the queue is full on that date</center></b>
	</div>
@endif
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
	<div class="container" style="margin-top: 160px;border:1px solid lightgrey; margin-bottom: 100px;border-radius: 20px;">
		<div class="row">
			<div class="col-sm-12">
				<div>
					@if(isset($profs))
						<center>
							<div style="margin-top:40px;font-size: 45px;">PATIENT DETAILS</div>
						</center>
						<div style="width: 100%;margin-bottom: 30px;">
							<a href="/thisMe/{{$iddokter}}/{{$idhospital}}/{{Auth::user()->id}}" style="margin-left: 85%;font-size: 22px;">Is This You?</a>
						</div>
						<form action="/insertpatient/{{Auth::user()->id}}" method="GET">
							<input type="hidden" name="dokter" value="{{$docter->nama}}">
							<input type="hidden" name="spesialist" value="{{$docter->spesialisasi}}">
							<input type="hidden" name="id_hospital" value="{{$idhospital}}">
							<div class="container mb-4">
								<div class="row">
									<div class="col-sm-6" style="font-size: 16px;">Patient Name<br><input type="text" value="{{$profs->nama}}" name="nama" class="form-control" style="padding-left: 15px;border-radius: 10px;border: 1px solid lightgrey;margin-top: 10px;"></div>
									<div class="col-sm-6" style="font-size: 16px;">Phone Number<br><input type="text" value="{{$profs->no_hp}}" name="nohp" class="form-control" style="padding-left: 15px;border-radius: 10px;border: 1px solid lightgrey;margin-top: 10px;"></div>
								</div>
							</div>
							<div class="container mb-4">
								<div class="row">
									<div class="col-sm-6 mt-1" style="font-size: 16px;">Disease<br><textarea name="disease" class="mt-2" style="padding-left:15px;width: 100%;resize: none;height: 130px;border-radius: 10px;border: 1px solid lightgrey;"></textarea></div>
									<div class="col-sm-6" style="font-size: 16px;">Date<br><input type="date" name="date" class="form-control" style="padding-left: 15px;border-radius: 10px;border: 1px solid lightgrey;margin-top: 10px;"></div>
									<!-- <div class="col-sm-6"><b>Address</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div> -->
								</div>
							</div>
							<!-- <div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Date of Birth</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Disease</b><br><textarea style="width: 100%;resize: none;height: 150px;border-radius: 10px;border: 1px solid grey;"></textarea></div>
								</div>
							</div> -->
							<div class="container" style="margin-top: -70px;">
								<div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6 mb-5"><button class="btn btn-primary" style="color: white;margin-left: 420px;padding: 10px;" type="submit">Queue Up</button></div>
								</div>
							</div>
						</form>
					@else
						<center>
							<div style="margin-top:40px;font-size: 45px;">PATIENT DETAILS</div>
						</center>
						<div style="width: 100%;margin-bottom: 30px;">
							<a href="/thisMe/{{$iddokter}}/{{$idhospital}}/{{Auth::user()->id}}" style="margin-left: 85%;font-size: 22px;">Is This You?</a>
						</div>
						<form action="/insertpatient/{{Auth::user()->id}}" method="GET">
							<input type="hidden" name="dokter" value="{{$docter->nama}}">
							<input type="hidden" name="spesialist" value="{{$docter->spesialisasi}}">
							<input type="hidden" name="id_hospital" value="{{$idhospital}}">
							<input type="hidden" name="iddokter" value="{{$iddokter}}">
							<div class="container mb-4">
								<div class="row">
									<div class="col-sm-6" style="font-size: 16px;">Patient Name<br><input type="text" name="nama" class="form-control" style="padding-left: 15px;border-radius: 10px;border: 1px solid lightgrey;margin-top: 10px;"></div>
									<div class="col-sm-6" style="font-size: 16px;">Phone Number<br><input type="text" name="nohp" class="form-control" style="padding-left: 15px;border-radius: 10px;border: 1px solid lightgrey;margin-top: 10px;"></div>
								</div>
							</div>
							<div class="container mb-4">
								<div class="row">
									<div class="col-sm-6 mt-1">Disease<br><textarea name="disease" class="mt-2" style="padding-left:15px;width: 100%;resize: none;height: 130px;border-radius: 10px;border: 1px solid lightgrey;"></textarea></div>
									<div class="col-sm-6" style="font-size: 16px;">Date<br><input type="date" name="date" class="form-control" style="padding-left: 15px;border-radius: 10px;border: 1px solid lightgrey;margin-top: 10px;"></div>
									<!-- <div class="col-sm-6"><b>Address</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div> -->
								</div>
							</div>
							<!-- <div class="container mb-5">
								<div class="row">
									<div class="col-sm-6"><b>Date of Birth</b><br><input type="text" name="" style="width: 100%;height: 50px;border-radius: 10px;border: 1px solid grey;"></div>
									<div class="col-sm-6"><b>Disease</b><br><textarea style="width: 100%;resize: none;height: 150px;border-radius: 10px;border: 1px solid grey;"></textarea></div>
								</div>
							</div> -->
							<div class="container mb-4" style="margin-top: -70px;">
								<div class="row">
									<div class="col-sm-6"></div>
									<div class="col-sm-6 mb-5"><button class="btn btn-primary" style="color: white;margin-left: 420px;padding: 10px;" type="submit">Queue Up</button></div>
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