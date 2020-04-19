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
	<div class="" style="margin-top: 200px;margin-bottom: -100px;">
		<center>							
				<p>Send Payment to</p>
				<p style="font-size: 40px;"><b>{{$destination}}</b></p>
				<p>at the nearest ATM</p>
				<div>
					<a href="/proof/{{$id_transaksi}}" class="btn btn-primary" style="background-color:rgb(67,133,255);width: 250px;margin-top: 17px;padding: 5px 0px;color: white;">Confirm Payment</a>
				</div>			
		</center>
	</div>
</body>
</html>
@endsection