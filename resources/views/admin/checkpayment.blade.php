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
	    #disables {
	        pointer-events: none;
	        cursor: default;
	    }
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<!-- judul -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">CEK PAYMENT </div></center>
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
			<div class="col-sm-12" style="border:1px solid;">									
				<table  class="table col-lg-12" style="border-bottom: 1px solid #707070;margin: 5px;">
					<tr style="border-bottom: 1px solid grey;text-align: center;">
						<th style="padding-top: 40px;padding-bottom: 20px;">Name</th>
						<th style="padding-top: 40px;padding-bottom: 20px;">Date</th>						
						<th style="padding-top: 40px;padding-bottom: 20px;">Total</th>						
						<th style="padding-top: 40px;padding-bottom: 20px;">Proof</th>						
						<th  style="padding-top: 40px;padding-bottom: 20px;text-align: center;">Check</th>				
					</tr>
					@foreach($transaksi as $aa)
					<tr style="border-bottom: 1px solid grey;text-align: center;">
						<td style="padding-top: 40px;padding-bottom: 20px;">{{ $aa->tbuser->name }}</td>
						<td style="padding-top: 40px;padding-bottom: 20px;">{{ $aa->tanggal }}</td>
						<td style="padding-top: 40px;padding-bottom: 20px;">Rp {{ $aa->total }},00</td>
						<td style="padding-top: 20px;padding-bottom: 20px;"><img src="../../img/{{$aa->img}}" style="width: 60px;" type="button" data-toggle="modal" data-target="#myModal">
							<div class="modal fade" id="myModal">
					    		<div class="modal-dialog">					    					      
					      			<div class="modal-content">
					      				<div class="modal-header">					      		
					      					<h1 style="padding-left:160px;padding-top: 10px;">DETAIL</h1>
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								        </div>
					        			<div class="modal-body" style="text-align: center;">
					          				<p><img src="../../img/{{$aa->img}}"></p>
					        			</div>
					      			</div>					      
					    		</div>
					  		</div>
						</td>
							<td style="padding-top:40px;padding-bottom: 20px;">
								<center>
									@if($aa->status=="BELUM PROSES")
										<a href="/cekproses/update/{{ $aa->id_transaksi }}" value="{{$aa->id_transaksi}}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;">PROSES
										</a>
									@else
										<a href="/cekproses/update/{{ $aa->id_transaksi }}" id="disables" value="{{$aa->id_transaksi}}" style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 10px 30px;opacity: 40%;">PROSES
										</a>
									@endif
									
								</center>
							</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</body>
</html>
@endsection