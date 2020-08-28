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
	    		color: blue;
	    		margin-left: -80px;
	    		font-weight: bold;
	    		font-size: 18px;
	    		margin-top: 30px;
	    	}
	    	.border1{
	    		border: 1px solid lightgrey;

	    	}
	    	.fs4{
	    		margin-top: 10px;
	    		font-size: 22px;
	    		color: black;
	    		font-weight: bold;
	    	}
	    	
	    	.gam{
				border-radius: 50%;				
			}
			.w1{
				width:60px;
				height:60px; 				
			}
			.bt2{
				margin-left: 60px;
			}
			.w2{
				width: 55px;
				height: 38px;
				rotate:180deg;
			}
			.w3{
				width: 50px;
				height: 50px;
			}
			.border2{
				/*margin-left: 30px;
				width: auto;*/
				/*margin-left: 30px; */
				/*margin-right:  10px; */
				display: inline-block;
				margin-top: 5px;
				width: auto;
				border: 1px solid lightgrey;
				border-radius: 10px;
			}
			.border3{
				/*margin-left: 30px; */
				/*margin-right:  30px; */
				width: auto;
				height: auto;
				display: inline-block;
				margin-top: 5px;
				border: 1px solid lightgrey;
				border-radius: 10px;
				text-align: right;
			}
			.turun{
				margin-top: 300px;
				margin-bottom: 20px;
				
			}
			.besar{
				height: 110px;
				border-radius: 10px;
			}
			.mars{
				margin-left: -15px;
			}
			.w4{
				width: 30px;
				height: 30px;
			}
			.rot{
				transform: rotate(180deg);
			}
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div class="container">
		<div class="row">
			<div class="col-12 border1 mb-2">
				<div class="row">
					<div class="col-1 mt-2">
						<a href="/chatdoctor/{{$iddokter}}">
							<img src="../../gambar/left.PNG" class ="w2 gam mt-3 mb-3 rot">
						</a>
					</div>
					<div class="col-4 ml-4">
						<img src="../../gambar/banks.jpg" class ="w1 gam mt-3 mb-3">
					</div>
					<div class="col-6">
						<div class="fs3 text-sm-left">{{$user->name}}</div>
					</div>
				</div>
			</div>
		</div>
		@foreach($posts as $s)
		@if($s->froms == 'user')
		<div class="row force-overflow">
			<div class="col-2">	
				<img src="../../gambar/banks.jpg" class ="w3 gam mt-3 mb-3">
			</div>
			<div class="col-8 border2 pt-1 form-control">
				{{$s->message}}
			</div>
			<div class="col-2"></div>
		</div>
		@else
		<div class="row force-overflow" style="text-align: right;">
			<div class="col-2">	
				
			</div>
			<div class="col-8 border2 pt-1 form-control">
				{{$s->message}}
			</div>
			<div class="col-2">
				<img src="../../gambar/{{$s->tbdokter->gambar}}" class ="w3 gam mt-3 mb-3">
			</div>
		</div>
		@endif
		@endforeach
		<!-- <div class="row mt-1">
			<div class="col-2">
			</div>
			<div class="col-8 border3 pt-1 text-sm-right form-control">
				heloooooooooooo
			</div>
			<div class="col-1">	
				<img src="../../gambar/doctor1.jpg" class ="w3 gam mt-3 mb-3">
			</div>
		</div> -->
		
			<form action="/saveChatDoctor" method="get" class="row new-posts ml-3 turun" style="">
				<div class="col-10">
					<input class="form-control besar" name="message" placeholder="Type your text..."></input>
					<input type="hidden" name="id_user" value="{{$user->id}}">
					<input type="hidden" name="id_dokter" value="{{$iddokter}}">
				</div>
				<div class="col-2">
					<button type="submit" style="border: none">
						<img src="../../gambar/kirim.png" class ="w4 mt-1 mars">				
					</button>
				</div>
			</form>
	</div>
	</body>
</html>