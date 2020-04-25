@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">	
		.bar1{
			padding-right: 15px;
			color: white;
		}
		.fs{
			font-size: 40px;margin-top: 100px
		}
	    @media(max-width: 1024px){
	    	.fs2{
	    		margin-top: 0px;
	    	}
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div class="container mt-5">
		<div class="row">
			<div class="col-sm-6">
				<center><img src="gambar/hem.webp" class="w-100 mt-5"></center>
			</div>
			<div class="col-sm-6 mt-5">
				<div class="text-sm-right text-center fs fs2" style="">About Medics</div>
				<div class="mt-3 mb-3 text-sm-right text-center">Medics is an application that we made<br> to facilitate us in consulting, buying drugs, in the health sector.</div>
				<div class="text-sm-right text-center">we created this application<br> so that all people can use our application. so that it is more instant, <br> practical and easy in all matters in the field of health</div>
			</div>
		</div>
	</div>

	<div class="mt-5">
		<center><div style="font-size: 40px;">OUR FOUNDERS</div><img src="gambar/pembatas.png" style="width: 160px;margin-bottom: 30px;"></center>
	</div>
	<div class="container d-none d-lg-block" style="margin-bottom: 100px;">
		<div class="row">
			<div class="col-sm-4">
				<img src="gambar/flume.jpg" class="w-100">
				<center><div style="font-size: 20px;border: 1px solid black ;border-radius: 0px 0px 15px 15px;padding: 20px; color:#2E5EBE;font-weight: bold;">Brychan Artanto</div></center>
			</div>
			<div class="col-sm-4">
				<img src="gambar/banks.jpg" class="w-100">
				<center><div style="font-size: 20px;border: 1px solid black ;border-radius: 0px 0px 15px 15px;padding: 20px; color:#2E5EBE;font-weight: bold;">Indra Wijaya</div></center>
			</div>
			<div class="col-sm-4">
				<img src="gambar/chet_faker_2.jpg" class="w-100">
				<center><div style="font-size: 20px;border: 1px solid black ;border-radius: 0px 0px 15px 15px;padding: 20px; color:#2E5EBE;font-weight: bold;">Wilson Pratama</div></center>
			</div>
		</div>
	</div>

	<div id="demo" class="carousel slide d-block d-lg-none" data-ride="carousel">

	  <!-- Indicators -->
	  <ul class="carousel-indicators">
	    <li data-target="#demo" data-slide-to="0" class="active"></li>
	    <li data-target="#demo" data-slide-to="1"></li>
	    <li data-target="#demo" data-slide-to="2"></li>
	  </ul>

	  <!-- The slideshow -->
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <div class="col-sm-4">
				<img src="gambar/banks.jpg" class="w-100">
				<center><div style="font-size: 20px;border: 1px solid;border-radius: 0px 0px 15px 15px;padding: 20px; color:#2E5EBE;font-weight: bold;">Liana Marlins</div></center>
			</div>
	    </div>
	    <div class="carousel-item">
	      <div class="col-sm-4">
				<img src="gambar/flume.jpg" class="w-100">
				<center><div style="font-size: 20px;border: 1px solid;border-radius: 0px 0px 15px 15px;padding: 20px; color:#2E5EBE;font-weight: bold;">Steve Marlins</div></center>
			</div>
	    </div>
	    <div class="carousel-item">
	      <div class="col-sm-4">
				<img src="gambar/chet_faker_2.jpg" class="w-100">
				<center><div style="font-size: 20px;border: 1px solid;border-radius: 0px 0px 15px 15px;padding: 20px; color:#2E5EBE;font-weight: bold;">Mark Marlins</div></center>
			</div>
	    </div>
	  </div>

	  <!-- Left and right controls -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev">
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next">
	    <span class="carousel-control-next-icon"></span>
	  </a>

	</div>


	<div class="container mt-5">
		<div class="row" style="margin-bottom: 100px;">
			<div class="col-sm-6">
				<div class="col-sm-12 col-12">
					<div style="border: 1px solid grey;margin-right: 280px;padding: 5px;">
						<p style="text-align: center;color:#2E5EBE;font-size: 18px;font-weight: bold;margin-top: 20px;">OUR VISION</p>
						<p style="text-align: center;padding: 0px;margin-top: 0px;">Our vision is to make an application that has many benefits for everyone</p>
					</div>
				</div>
				<div class="col-sm-12 col-12">
					<div style="margin-left: 280px;border: 1px solid grey;padding: 5px;">
						<p style="text-align: center;color:#2E5EBE;font-size: 18px;font-weight: bold;margin-top: 20px;">OUR MISSION</p>
						<p style="text-align: center;padding: 0px;margin-top: 0px;">our mission is to make people happy and make it easier for everyone</p>
					</div>
				</div>
				<div class="col-sm-12 col-12">
					<div style="border: 1px solid grey;margin-right: 280px;padding: 5px;">
						<p style="text-align: center;color:#2E5EBE;font-size: 18px;font-weight: bold;margin-top: 20px;">OUR VALUES</p>
						<p style="text-align: center;padding: 0px;margin-top: 0px;">Our values is to form an application that can benefit everyone</p>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<img src="../../gambar/jantung.jpg">
			</div>
		</div>
	</div>

	<div>
		<center><div style="font-size: 40px;" class="mt-5">WHY CHOOSE MEDICS</div></center>
		<center><img src="gambar/pembatas.png" style="width: 160px;"></center>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-12 mt-5 ">
				<div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="gambar/Asset 13.png" style="width: 200px;"><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">FIND DOCTORS</div>
				<div class="mt-2">
					<center>
						with this feature we can find a doctor in the position closest to us. so that we can consult or see a doctor at a particular hospital.
					</center>
				</div>
			</center></div>
			</div>
			<div class="col-sm-4 col-12 mt-5 ">
				<div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="gambar/Asset 15.png" style="width: 200px;"><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">SUPPORTING VIA CHAT</div>
				<div class="mt-2">
					<center>
						this feature is an instant booking feature. this feature can make it easier for us to queue in the queue at the hospital, making it easier for us all.
					</center>
				</div>
			</center></div>
			</div>
			<div class="col-sm-4 col-12 mt-5 mb-5">
				<div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="gambar/Asset 20.png" style="width: 200px;"><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">INSTANT BOOKING</div>
				<div class="mt-2">
					<center>
						with this feature we can find a doctor in the position closest to us. so that we can consult or see a doctor at a particular hospital
					</center>
				</div>
				</center></div>
			</div>
		</div>
	</div>
</body>
</html>
@endsection