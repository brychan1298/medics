@extends('admin.master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>	
	<title></title>
	<style type="text/css">
		.bar1{
			padding-right: 10px;
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">

	<!-- judul -->

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">OUR HOSPITAL </div></center>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="/tambahhospital" class="btn btn-primary" style=" color: white;border:0px;border-radius: 15px;padding: 10px 30px;font-weight: semibold">Add Hospital</a>
			</div>
		</div>
	</div>

	<div class="row">				
		<div class="col-sm-12" style="padding-top: 20px;">
			<form action="/hospitalSearch" method="GET">
				<center>
					<span >
						<input type="text" name="cari" value="{{ old('cari') }}" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; padding-right: 550px; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span>
						<button type="submit" style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
								<img src="gambar/searchicon.png" style="width: 30px;">
						</button>
					</span>
				</center>	
			</form>
		</div>
	</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px; height: 300px">
		<div class="row" style="margin-top:0px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12">									
				<table  class="table-border col-lg-12" style="border-bottom: 1px solid #707070;margin: 5px;">
					<tr style="border-bottom: 1px solid grey;text-align: center;">
						<th style="padding-bottom: 25px;padding-top: 25px;">Name</th>
						<th style="padding-bottom: 25px;padding-top: 25px;">Provinsi</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;">No HP</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;">Alamat</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;">Kabupaten</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;" colspan="2" style="text-align: center;">Action</th>						
					</tr>
					
					@foreach($ahospital as $aa)
						<tr style="border-bottom: 1px solid grey;text-align: center;">
							<td style="padding-bottom: 25px;padding-top: 25px;">{{$aa->nama}}</td>
							<td style="padding-bottom: 25px;padding-top: 25px;">{{$aa->provinsi}}</td>
							<td style="padding-bottom: 25px;padding-top: 25px;">{{$aa->nohp}}</td>
							<td style="padding-bottom: 25px;padding-top: 25px;">{{$aa->alamat}}</td>
							<td style="padding-bottom: 25px;padding-top: 25px;">{{$aa->kota}}</td>
							<td style="padding-bottom: 25px;padding-top: 25px;"><a href="/hospital/edit/{{ $aa->id }}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;" >EDIT</a></td>
							<td style="padding-bottom: 25px;padding-top: 25px;"><a href="/hospital/delete/{{ $aa->id }}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;" >DELETE</a></td>
						</tr>
					@endforeach
				</table>
				<div class="mt-5 pagination justify-content-center">
					{{$ahospital->links()}}
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection