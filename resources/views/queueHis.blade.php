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
			<div class="row border mt-3">
				<div class="col-sm-8">
					<div><b>{{$h->date}}</b></div>
					<div>{{$h->nama}}</div>
					<div></div>
					<p><i>Rs. {{$h->tbhospital->nama}} - {{$h->tbhospital->alamat}}<br>(Dr.{{$h->dokter}})</i></p>
					<p>Time : {{$h->appointment}}</p>
				</div>
				<div class="col-sm-4">
					<div class="ml-5 mt-3">
						@if($h->status=="BELUM")
						@if($h->date < $date )
							<p><b>Status :</b> <div style="color: red;font-size: 20px;"><b>LATE/FORFEITED</b></div></p>
						@else
							<p><b>Status :</b> <div style="color: yellow;font-size: 20px;"><b>ON DOING</b></div></p>
						@endif						
						<!-- <p><a href="" class="btn btn-primary pl-5 pr-5">CHECK</a></p>	 -->
						@else
						<p>Status : <div style="color: green;font-size: 20px;"><b>DONE</b></div></p>						
						@endif
					</div>				
				</div>
			</div>
		@endforeach
	</div>
</body>
</html>
@endsection