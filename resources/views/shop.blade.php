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
		#shop1{
			margin-top: 100px;font-size: 35px;
		}
		@media screen and (max-width: 1080px){
			#shop1{
				margin-top: 170px;
			}
			.img1{
				width: 150px;
				text-align: center;
			}
			.resG1{
				margin-top: 30px;
			}
		}
		
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	
	<div class="d-none d-lg-block">
		<img src="img/lolsssss.jpg" style="width: 100%;">
	</div>

	<div id="shop1" style="font-size: 40px;">
		<center>SHOP</center>
	</div>

	<div style="margin-left: 80%;">
		@guest
		<a href="/login"><img src="img/calendar.png" style="width: 40px;margin-bottom: 100px;"></a>
		@else
		<a href="/buyHis/{{Auth::user()->id}}"><img src="img/calendar.png" style="width: 40px;margin-bottom: 100px;"></a>
		@endguest
	</div>

	<div class="row">				
		<div class="col-sm-12" style="padding-top: 20px;">
			<form action="/shopSearch" method="GET">
				<center>
					<span >
						<input type="text" name="cari" value="{{ old('cari') }}" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; padding-right: 550px; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span>
						<button type="submit" style="background-color: #6672EC;padding: 12px;border-radius: 0px 10px 10px 0px; margin-left: -5px;border:none;">
								<img src="gambar/searchicon.png" style="width: 30px;">
						</button>
					</span>
				</center>	
			</form>
		</div>
	</div>

	<div class="container">
		<div class="row">
			@foreach($shop as $s)
				<div class="col-sm-4 col-6 mt-5">
					<center>
						<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
							<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
							</div>
								<img src=".../../gambar/{{$s->img}}" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
								<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">{{$s->nama}}</p>
								<p style="text-align: center;font-size: 18px;margin-top: -10px;">Rp{{$s->harga}},00</p>
						</div>
					</center>
					<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
						<center>
							<form action="/addCart" method="GET">
								<input type="hidden" name="idproduk" value="{{$s->id}}">								
								@guest
								<a href="/login" class="btn" style="color: white;">ADD TO CART</a>
								@else
								<input type="hidden" name="iduser" value="{{ Auth::user()->id }}">
								<button  type="submit" class="btn" style="color: white;">ADD TO CART</button>
								@endguest								
							</form>
						</center>

					</div>
				</div>
			@endforeach
		</div>
		<div class="mt-5 pagination justify-content-center">
			{{$shop->links()}}
		</div>	
	</div>
</body>
</html>
@endsection