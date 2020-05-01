@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<title></title>
	<style type="text/css">	
		.bar1{
			padding-right: 15px;
			color: white;
		}
		.fs{
			font-size: 40px;margin-top: 100px
		}
	    @media(max-width: 1024px){
	    	.fs2{
	    		margin-top: 0px;
	    	}
	    	.fs3{
	    		color: grey;
	    	}
	    	.border1{
	    		border-radius: 15px;
	    		border: 1px solid lightgrey;

	    	}
	    	.fs4{
	    		margin-top: 10px;
	    		font-size: 18px;
	    		color: black;
	    		font-weight: bold;
	    	}
	    	
	    	.gam{
				border-radius: 50%;
			}
			.w1{
				width:70px;
				height: 70px; 
			}
			.bt2{
				margin-left: 60px;
			}
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 mt-5">
				<center><img src="../../gambar/chats.png" class="w-100 mt-5"></center>
			</div>
			<div class="col-12 mt-3">
				<div class="text-sm-right text-center fs fs2 mb-4" style="">Chat With Patient</div>
			</div>			
		</div>
		<div class="row mb-4">
			@foreach($data as $d)
			<div class="col-1"></div>
			<div class="col-10 border1 mb-2">
				<div class="row">
					<div class="col-3">
						<img src="../../gambar/banks.jpg" class ="w1 gam mt-3 mb-3">
					</div>
					<div class="col-4">
						<div class="fs4 mt-3">{{$d->tbuser->name}}</div>
						<div class="fs3">NEED YOUR HELP</div>
					</div>	
					<div class="col-5">						
						<a href="/doctorDashboard/{{$d->tbuser->id}}/{{$iddokter}}" class="btn btn-primary bt2 mt-5">	
							CHAT
						</a>
					</div>	
				</div>
			</div>	
			<div class="col-1"></div>
			@endforeach
		</div>
	</div>
	</body>
</html>
@endsection