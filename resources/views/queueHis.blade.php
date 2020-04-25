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
			padding-right: 10px;
		}
	</style>
</head>
<body>
	<div style="font-size: 40px;margin-top: 170px;margin-bottom: 30px;">
		<center>QUEUE HISTORY</center>
	</div>

	<div class="container" style="margin-bottom: -100px;">
		@foreach($list as $h)		
			<div class="row border mt-4 pt-4 pb-4 pl-3" style="border-radius: 15px;">
				<div class="col-sm-8">
					<div style="font-weight: ;color: darkgrey;">{{$h->date}}</div>
					<div style="font-weight:bold;font-size: 17px;margin-top: 2px;">{{$h->nama}}</div>
					<div></div>
					<div><i>Rs. {{$h->tbhospital->nama}} - {{$h->tbhospital->alamat}}</i></div>
					<div><b>(Dr.{{$h->dokter}})</b></div>
					<div>Time : {{$h->appointment}}</div>
				</div>
				<div class="col-sm-4">
					<div class="ml-5 mt-3">
						@if($h->status=="BELUM")
						@if($h->date < $date )
							<p><b>Status :</b> <div class="text-danger" style="font-size: 18px;"><b>LATE/FORFEITED</b></div></p>
						@else
							<p><b>Status :</b> <div class="text-warning" style="font-size: 18px;"><b>ON DOING</b></div></p>
						@endif						
						<!-- <p><a href="" class="btn btn-primary pl-5 pr-5">CHECK</a></p>	 -->
						@else
						<p>Status : <div class="text-primary" style=";font-size: 18px;"><b>DONE</b></div></p>						
						@endif
					</div>				
				</div>
			</div>
		@endforeach
	</div>
</body>
</html>
@endsection