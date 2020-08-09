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
		.bot{
			margin-bottom: -100px;
		}
		@media(max-width: 1024px){
		.bots{
			margin-bottom: 70px;
		}
		}

	</style>
</head>
<body>
	<div style="font-size: 40px;margin-top: 170px;margin-bottom: 50px;">
		<center>BUY HISTORY</center>
	</div>

	<div class="container" class="bot">
		<div class="row">
			<div class="col-1"></div>
			<div class="bots col-12">
				@foreach($history as $h)		
					<div class="row border mt-4 pt-4 pb-3 pl-3" style="border-radius: 15px;">
						<div class="col-sm-9 col-8">
							<div><b>{{$h->tanggal}}</b></div>
							<div>{{$h->tbtransaksidetil->tbproduk->nama}} x{{$h->tbtransaksidetil->jumlah}}</div>
							<div>Total : Rp{{$h->total}},00</div>
							<p></p>
							<p>Destination Account : {{$h->destinationAcc}}</p>
						</div>
						<div class="col-sm-3 col-4">
							<div class="ml-5 mt-3">
								@if($h->status=="BELUM PROSES" && $h->img=="")
								<p class="text-primary"><b>Status : NOT PAID YET</b></p>
								<p><a href="/proof/{{$h->id_transaksi}}" class="btn btn-primary pl-4 pr-4 mr-5" style="float: right;">CHECK</a></p>
								@else
								@if($h->status=="BELUM PROSES" && $h->img!="")
								<p class="text-warning"><b>Status : Not Confirm Yet</b></p>
								@else
								<p class="text-success"><b>Status : ON PROCCESS</b></p>
								@endif
								@endif
							</div>				
						</div>
					</div>
				@endforeach
			</div>
			<div class="col-1"></div>
			
		</div>
	</div>
</body>
</html>
@endsection