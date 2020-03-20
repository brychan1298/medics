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
				<center><div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">OUR DOCTORS </div></center>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="/tambahdokter" class="btn btn-primary" >Add Doctor</a>
			</div>
		</div>
	</div>

	<div class="row">				
				<div class="col-sm-12">
					<form action="/doctorSearch" method="GET">
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
				<table  class="table-border table col-lg-12" style="border-bottom: 1px solid #707070;margin: 5px;">
					<tr>
						<th>Name</th>
						<th>Phone Number</th>						
						<th>Email</th>						
						<th>Specialist</th>						
						<th>Address</th>						
						<th>Country</th>						
						<th>Date</th>
						<th colspan="2">Action</th>
											
					</tr>
					@foreach($adoctor as $aa)
						<tr>
							<td>{{ $aa->nama}}</td>
							<td>{{ $aa->nohp}}</td>
							<td>{{ $aa->email}}</td>
							<td>{{ $aa->spesialisasi}}</td>
							<td>{{ $aa->alamat}}</td>
							<td>{{ $aa->kota}}</td>
							<td>{{ $aa->tgl_mulai_kerja}}</td>
							<td><a href="/doctor/edit/{{ $aa->id }}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;" >EDIT</a></td>
							<td><a href="/doctor/delete/{{ $aa->id }}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;" >DELETE</a></td>
						</tr>
					@endforeach
				</table>
				<div class="mt-5 pagination justify-content-center">
					{{$adoctor->links()}}
				</div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection