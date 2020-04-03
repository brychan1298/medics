@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>	
	<style type="text/css">
		.bar1{
			padding-right: 10px;
		}
	</style>
</head>
<body>
	<div style="font-size: 40px;margin-top: 170px;">
		<center>BUY HISTORY</center>
	</div>

	<div class="container" style="margin-bottom: -100px;">
		@foreach($history as $h)		
			<div class="row border">
				<div class="col-sm-8">
					<div><b>{{$h->tanggal}}</b></div>
					<div>{{$h->tbtransaksidetil->tbproduk->nama}} x{{$h->tbtransaksidetil->jumlah}}</div>
					<div>Total : Rp{{$h->total}},00</div>
					<p></p>
					<p>Destination Account : {{$h->destinationAcc}}</p>
				</div>
				<div class="col-sm-4">
					<div class="ml-5 mt-3">
						@if($h->status=="BELUM PROSES" && $h->img=="")
						<p>Status : NOT PAID YET</p>
						<p><a href="/proof/{{$h->id_transaksi}}" class="btn btn-primary pl-5 pr-5">CHECK</a></p>	
						@else
						<p>Status : PAID</p>						
						@endif
					</div>				
				</div>
			</div>
		@endforeach
	</div>
</body>
</html>
@endsection