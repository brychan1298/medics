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
		@media(max-width: 1024px){
      	.fs{
      		margin-top: -150px;
      	}
    }
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="../../img/undraw_doctors_hwty.png" class="w-100" style="margin-top: 150px;">
			</div>
			<div class="col-sm-6">
			<div class="row">
					<div class="col-sm-12 fs">
						<center><div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;color: black;">MY PROFILE </div></center>
					</div>
				</div>
				<form action="/editprofile/{{$id}}" method="get">
					<div class="row">
						<div class="col-sm-6 col-12 mt-4">
							<label>Name</label>
							<input type="text" name="nama" value="{{$profile->nama}}" placeholder="nama.." class="form-control ">
						</div>
						<div class="col-sm-6 col-12 mt-4">
							<label>Tanggal Lahir</label>
							<input type="date" name="tanggal_lahir" value="{{$profile->tanggal_lahir}}" placeholder="tanggal lahir.." class="form-control ">
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 col-12 mt-3">
							<label>Alamat</label>
							<input type="text" name="alamat" value="{{$profile->alamat}}" placeholder="alamat.." class="form-control ">
						</div>
						<div class="col-sm-6 col-12 mt-3">
							<label>No Handphone</label>
							<input type="text" name="no_hp" value="{{$profile->no_hp}}" placeholder="no handphone.." class="form-control ">
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-sm-4 col-2"></div>
						<button type="submit" class="primary btn btn-primary form-control col-sm-4 col-8 mt-4"><center>EDIT PROFILE</center></button>
						<div class="col-sm-4 col-2"></div>
					</div>
				</form>
				
			</div>
		</div>
	</div>
</body>
</html>
@endsection