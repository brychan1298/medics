@extends('masterd')
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
		body{
			margin: 0;padding: 0;
		}
		.disables {
	        pointer-events: none;
	        cursor: default;
	        opacity: 40%;
	    }
	    @media(max-width: 1024px){
	    	.fs2{
	    		margin-top: 0px;
	    	}
	    	.fs3{
	    		font-size: 24px;
	    		color: grey;
	    	}
	    	.border1{
	    		border-radius: 15px;
	    		border: 1px solid lightgrey;

	    	}
	    	.border2{
	    		border: 1px solid lightgrey;
	    		padding: 15px;
	    		font-size: 22px;
	    		width: 70px;
	    		height: 70px;
	    	}
	    	.fs4{
	    		margin-top: 10px;
	    		font-size: 24px;
	    		color: black;
	    	}
	    	.messe{
	    		padding: 15px;
	    		text-align: left;
	    		width: 452px;
	    		height: 150px;
	    		border:1px solid lightgrey;
	    		border-radius: 0px 0px 15px 15px;
	    		border-right: 0px;
	    		border-left: 0px;
	    		border-bottom: 0px;
	    		margin-left: -15px;
	    	}
	    	.but1{
	    		border:0px;
	    		padding: 20px;
	    		font-size: 18px;
	    		width: 560px;
	    		margin-left: -20px;
	    		text-align: center;
	    	}
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	@if(isset($patients))
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 mt-5">
				<center><img src="../../gambar/aqueue.png" class="w-100 mt-5"></center>
			</div>
			<div class="col-12 mt-5">
				<div class="text-sm-right text-center fs fs2" style="">PATIENT NOW</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="mt-5 col-10 border1 center mb-5">
				<center>
					<p class="text-sm-right text-center fs3 mt-5">
						Number
					</p>
					<div class="border2">
						{{$patients->id}}
					</div>
					<p class="text-sm-right text-center fs4">
						<b>
							{{$patients->nama}}
						</b>
					</p>
					<p class="text-sm-right text-center fs3">
						{{$patients->appointment}}
					</p>
					<p class="text-sm-right text-center fs4 mb-5">
						{{$patients->disease}}
					</p>
				</center>
			</div>
			<div class="col-1"></div>
		</div>
		<form action="/queuenote/{{$patients->id}}/{{$iddokter}}" method="get">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10 border1 mb-5">
						<div class="text-sm-right text-center fs4 pb-3 pt-3">
							NOTE
						</div>
						<input type="text" name="note" style="width:109% " placeholder="Write your note here.." class="form-control messe">
				</div>
				<div class="col-1"></div>
			</div>
			<button type="submit" style="width: 110%" class="btn btn-primary container but1">DONE</button>
		</form>
	</div>
	@else
	<div class="container mt-5">
		<div class="row">
			<div class="col-12 mt-5">
				<center><img src="../../gambar/aqueue.png" class="w-100 mt-5"></center>
			</div>
			<div class="col-12 mt-5">
				<div class="text-sm-right text-center fs fs2" style="">PATIENT NOW</div>
			</div>			
		</div>
		<div class="row">
			<div class="col-1"></div>
			<div class="mt-5 col-10 border1 center mb-5">
				<center>
					<p class="text-sm-right text-center fs3 mt-5">
						Number
					</p>
					<div class="border2">
						
					</div>
					<p class="text-sm-right text-center fs4">
						<b>
							
						</b>
					</p>
					<p class="text-sm-right text-center fs3">
						
					</p>
					<p class="text-sm-right text-center fs4 mb-5">
						
					</p>
				</center>
			</div>
			<div class="col-1"></div>
		</div>
		<form action="" method="get">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10 border1 mb-5">
						<div class="text-sm-right text-center fs4 pb-3 pt-3">
							NOTE
						</div>
						<input type="text" name="note" style="width:109% " placeholder="Write your note here.." class="form-control messe">
				</div>
				<div class="col-1"></div>
			</div>
			<button type="submit" style="width: 110%" class="btn btn-primary container but1 disables">DONE</button>
		</form>
	</div>
	@endif
</body>
</html>
@endsection