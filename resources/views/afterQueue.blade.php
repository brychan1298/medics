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
			<div style="font-size: 24px;">You have registered in the <b>{{$hosname}} Hospital</b> Queue at the queue number :</div>
			<div style="font-size: 55px;">{{$lastids}}</div><br><br>
			<div style="font-size: 24px;">Please arrive at the hospital on <b>{{$datenow}}</b> before</div>
			<div style="font-size: 35px;">{{$lasttime}}</div>

			<br>
			<div class="mt-5">
				<a href="/hospital" class="btn btn-primary" style="padding:10px 25px;">BACK</a>
			</div>
			<div style="color: grey;">You can see further information at <a href="/historyQueue/{{Auth::user()->id}}" style="color: grey;"><u>Queue History</u></a></div>
		</center>
	</div>
</body>
</html>
@endsection