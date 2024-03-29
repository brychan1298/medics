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
			<div class="bots col-12 col-sm-12">
				@foreach($history as $h)		
					<div class="row m-2 border mt-4 pt-4 pb-3 pl-2" style="border-radius: 15px;">
						<div class="col-sm-9 col-6">
							<div><b>{{$h->tanggal}}</b></div>
							<div>{{$h->tbtransaksidetil->tbproduk->nama}} x{{$h->tbtransaksidetil->jumlah}}</div>
							<div>Total : Rp{{$h->total}},00</div>
							<div>Delivery : <b>{{$h->kirim}}</b></div>
							<p></p>
							<p>Destination Account : <b>{{$h->destinationAcc}}</b></p>
						</div>
						<div class="col-sm-3 col-6">
							<div class="ml-5 mt-3">
								@if($h->status=="BELUM PROSES" && $h->img=="")
								<p class="text-primary"><b>Status : NOT PAID YET</b></p>
								<p style=""><a href="/proof/{{$h->id_transaksi}}" class="btn btn-primary pl-4 pr-4 mr-1" style="float: right;">CHECK</a></p>
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
			
		</div>
	</div>
</body>
</html>
@endsection