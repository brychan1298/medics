@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>	
	<title></title>
</head>
<body data-spy="scroll" data-target="menu">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img src="img/profils.png" class="w-100" style="margin-top: 150px;">
			</div>
			<div class="col-sm-6">
			<div class="row">
					<div class="col-sm-12">
						<center><div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;color: black;">MY PROFILE </div></center>
					</div>
				</div>
			<div class="row">
					<div class="col-sm-6 col-12 mt-4">
						<label>Name</label>
						<input type="text" name="nama" placeholder="nama.." class="form-control ">
					</div>
					<div class="col-sm-6 col-12 mt-4">
						<label>Tanggal Lahir</label>
						<input type="text" name="tanggal_lahir" placeholder="tanggal lahir.." class="form-control ">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-12 mt-3">
						<label>Alamat</label>
						<input type="text" name="alamat" placeholder="alamat.." class="form-control ">
					</div>
					<div class="col-sm-6 col-12 mt-3">
						<label>No Handphone</label>
						<input type="text" name="no_hp" placeholder="no handphone.." class="form-control ">
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4 col-3"></div>
					<button class="primary btn btn-primary form-control col-sm-4 col-3 mt-4">EDIT PROFILE</button>
					<div class="col-sm-4"></div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection