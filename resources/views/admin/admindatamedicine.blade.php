<!DOCTYPE html>
@extends('admin.master')
@section('konten')
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
				<center> <div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">OUR MEDICINE </div></center>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<a href="/tambahmedicine" class="btn btn-primary" >Add Medicine</a>
			</div>
		</div>
	</div>

	<div class="row">				
				<div class="col-sm-12">
					<center>
					<span >
						<input type="text" name="" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; padding-right: 550px; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
						<img src="gambar/searchicon.png" style="width: 30px;">
					</span>
				</center>
				</div>
			</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px; margin-bottom: 100px;border-radius: 30px; height: 300px">
		<div class="row" style="margin-top:0px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12" style="">
				<div class="row" style="">

				@foreach($amedicine as $aa)
				<div class="col-sm-4">
					
						<div style="border:1px solid #707070;border-radius: 15px;padding: 20px;">
							<div style="color:#1492E6;font-size: 14px; position: absolute;" >{{$aa->kategori}}</div>
							<div style="color:#707070;font-size: 14px; position: absolute; margin-left:230px; " >{{$aa->tgl_expired}}</div>
							<center>								
								<img src="img/{{$aa->img}}" class="w-50" >
								<div style="color: #2E5EBE;font-weight: bold; font-size: 20px;">{{$aa->nama}}</div>
								<div style="color: black;font-size: 18px;">Rp{{$aa->harga}},00</div>
								<div style="color: #707070;font-size: 14px;">sisa stock {{$aa->jumlah_stok}}</div>
								<p style="color: black;font-size: 15px;margin-bottom: 30px;">{{$aa->kegunaan}}</p>
								<a href="/medicine/edit/{{ $aa->id }}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 18px 40px;" >EDIT OBAT</a>
							</center>
						</div>
					
				</div>
				@endforeach
				<div class="col-sm-12 mt-5">
					<center>
							<div>
								<span>								
									<button  style="border:none;border-radius: 50%;padding: 5px 7px;transform: rotate(180deg);">
										<img src="gambar/HEMHEM.png" style="width: 20px;">
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
										<img src="gambar/HEMHEM.png" style="width: 20px;">
									</button>
								</span>
								
							</div>					
					</center>					
				</div>
				</div>

			</div>
		</div>
	</div>
</body>
</html>
@endsection