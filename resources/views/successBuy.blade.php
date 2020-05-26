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
	<div style="font-size: 40px;margin-top: 170px;margin-bottom: 50px;">
		<center></center>
	</div>

	<div class="container" style="margin-bottom: -100px;">
		<center>
			<div style="font-size: 24px;"><img src="../img/tick.png" style="width: 120px;"></div>
			<div style="font-size: 44px;color: grey;">Thank You <b>{{Auth::user()->name}}</b></div><br>
			
			<div style="font-size: 28px;">Your Payment has been received and will be checked</div>
			<div style="color: grey;font-size: 20px;margin-top: 10px;">Please wait for the confirmation</div>

			<br>
			<div class="mt-5">
				<a href="/shop" class="btn btn-primary" style="padding:10px 25px;">BACK</a>
			</div>
		</center>
	</div>
</body>
</html>
@endsection