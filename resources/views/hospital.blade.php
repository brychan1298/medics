@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
  	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	<title>Hospital</title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
		.is2{
			border:1px solid grey;
			border-radius: 15px 0px 0px 15px; 
			padding-right: 550px; 
			padding-top: 10px;
			padding-bottom: 9px;
			padding-left: 10px;
		}
		.lpis{
			width: 20%;
			margin: 0px;
			animation:slide 2s ease-in-out .5s infinite alternate;
		}
		.lpis:hover{
			background-color: rgb(67,133,255);
			color: white;
			border:none;
			animation: slide
		}
		@keyframes slide{
			0% {

			left: 0;

			top: 0;

			}

			50% {

			left: 244px;

			top: 100px;

			}

			100% {

			left: 488px;

			top: 0px;

			}
		}
		.flip-card {
		  background-color: transparent;
		  width: 315px;
		  height: 315px;
		  perspective: 1000px;
		}

		.flip-card-inner {
		  position: relative;
		  width: 100%;
		  height: 100%;
		  text-align: center;
		  transition: transform 0.6s;
		  transform-style: preserve-3d;
		  
		}

		.flip-card:hover .flip-card-inner {
		  transform: rotateY(180deg);
		}

		.flip-card-front, .flip-card-back {
		  position: absolute;
		  width: 100%;
		  height: 100%;
		  -webkit-backface-visibility: hidden;
		  backface-visibility: hidden;
		}

		.flip-card-front {
		  
		  color: black;
		}

		.flip-card-back {
		  background-color: white;
		  color: white;
		  transform: rotateY(180deg);
		  border:1px solid #707070;
		  border-radius: 15px;
		  padding: 40px;
		}
	    @media(max-width: 1024px){
	    	.is{
	    		padding-right: 100px;
	    	}
	    	.reshis{
	    		
	    	}
	    	.lpis{
			padding-right: 0px;
			padding-left: 0px;
			width:80%;
			margin: 0px;
			text-align: center;
			}
		}
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<div style="margin-top: 130px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-12">
					 <center><img src="gambar/hospital.png" class="w-75"></center>
				</div>
				<div class="col-sm-6 mt-4 col-12 text-sm-right text-center">
					<div>
						<div style="font-size: 45px;">Hospital Queue</div>
						<div style="color: #8B8B8B">Hospital Queues help you to book queues at the hospital so that you no longer need to come directly to the hospital</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div>
		<div class="container mt-5">
			
			<div class="row">
				<div class="col-sm-10 col-8"></div>
				<div class="col-sm-2 col-4 mt-5 reshis">
					<center>	
						<img src="gambar/calendar.png" class="w-25"> 
					@guest
						<div style="color: #2680EB;" class="mt-2">
							<a href="/login">Queue History</a>
						</div>
					@else
						<div style="color: #2680EB;" class="mt-2">
							<a href="/historyQueue/{{Auth::user()->id}}">Queue History</a>
						</div>
					@endguest
					</center>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 mt-5">
					<form action="/UhosSearch" method="GET">
						<center>
							<span >
								<input type="text" name="cari" value="{{ old('cari') }}" class="is is2" placeholder="Search">
							</span>
							<span>
								<button type="submit" style="background-color: #6672EC;padding-top: 11px;padding-bottom: 8px;padding-left: 10px;padding-right: 10px;border-radius: 0px 10px 10px 0px; margin-left: -5px;border:none;">
									<img src="gambar/searchicon.png" style="width: 30px;">
								</button>
							</span>
						</center>	
					</form>
				</div>
			</div>
			<div class="row mt-5">
				<div class="col-12 d-lg-block d-none">
					<center>
					<span style="font-size: 20px;color: black;" class="col-sm-6">						
							<a href="" class="lpis btn btn-primary text-whitr border-primary">Hospital</a>
						</span>
						<span style="font-size: 20px;color: black;" class="col-sm-6">
							<a href="/doctorqueue" class="lpis btn border-dark">Doctor</a>
						</span>
					</center>
				</div>		
				<div style="font-size: 20px;color: black;" class="col-sm-6 col-6 d-lg-none d-sm-block">
						<center>	
						<a href="" class="lpis btn btn-primary text-whitr border-primary">Hospital</a>
						</center>
					</div>
					<div style="font-size: 20px;color: black;" class="col-sm-6 col-6 d-lg-none d-sm-block">
						<center>	
						<a href="/doctorqueue" class="lpis btlpis btn border-dark">Doctor</a>
						</center>
					</div>				
			</div>


			<div class="row" id="app1">

				@foreach( $hospitals as $h )
					@guest
					<div class="col-sm-4 col-12 mt-4">
						<center>
						<a href="/login" class="">
							<!-- <div style="border:1px solid #707070;border-radius: 15px;padding: 40px;">
								<center>								
									<img src="../../gambar/{{$h->img}}" class="w-100 mb-3">
									<div style="color: black;font-weight: bold;" class="mt-3">Rs. {{$h->nama}}</div>
									<div style="color: black;">{{$h->alamat}}</div>
								</center>
							</div> -->
							<div class="flip-card">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      	<div style="border:2px solid #707070;border-radius: 15px;padding: 40px;">
										<center>								
											<img src="../../gambar/{{$h->img}}" class="w-100 mb-3">
											<div style="color: black;font-weight: bold;" class="mt-3">Rs. {{$h->nama}}</div>
											<div style="color: black;">{{$h->alamat}}</div>
										</center>
									</div>
							    </div>
							    <div class="flip-card-back">
							      <div style="color: black;font-weight: bold;" class="mt-3"><h2>Rs. {{$h->nama}}</h2></div>
									<div style="color: black;">{{$h->alamat}}</div>
									<a href="/login" class="btn btn-primary mt-5">Queue Up</a>
							    </div>
							  </div>
							</div>
						</a>
					</div>
					</center>			
					@else
					<div class="col-sm-4 col-12 mt-4 nav-link text-black">
						<center>
						<a href="/choosedoctor/{{$h->id}}" class="">
							<div class="flip-card">
							  <div class="flip-card-inner">
							    <div class="flip-card-front">
							      	<div style="border:2px solid #707070;border-radius: 15px;padding: 40px;">
										<center>								
											<img src="../../gambar/{{$h->img}}" class="w-100 mb-3">
											<div style="color: black;font-weight: bold;" class="mt-3">Rs. {{$h->nama}}</div>
											<div style="color: black;">{{$h->alamat}}</div>
										</center>
									</div>
							    </div>
							    <div class="flip-card-back">
							      <div style="color: black;font-weight: bold;" class="mt-3"><h2>Rs. {{$h->nama}}</h2></div>
									<div style="color: black;">{{$h->alamat}}</div>
									<a href="/choosedoctor/{{$h->id}}" class="btn btn-primary mt-5">Queue Up</a>
							    </div>
							  </div>
							</div>
						</a>
						</center>
					</div>
					@endguest
				@endforeach				
			</div>

			<div class="mt-5 pagination justify-content-center">
				{{$hospitals->links()}}
			</div>	
		</div>
	</div>	
</body>
</html>
<script type="text/javascript">
	new Vue({
		el: "#app1",
		data:{
			message:'aaaa',
			show:true
		}
	})
</script>
@endsection

