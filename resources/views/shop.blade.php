@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>		
	<title></title>
	<style type="text/css">
		.bar1{
			padding-right: 10px;
		}
		#shop1{
			margin-top: 100px;font-size: 35px;
		}
		@media screen and (max-width: 1080px){
			#shop1{
				margin-top: 170px;
			}
			.img1{
				width: 170px;
				text-align: center;
			}
			.resG1{
				margin-top: 30px;
			}
		}
		
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	
	<div class="d-none d-lg-block">
		<img src="img/lolsssss.jpg" style="width: 100%;">
	</div>

	<div id="shop1">
		<center>SHOP</center>
	</div>

	<div>
		<img src="img/calendar.png" style="width: 40px;margin-left: 80%;margin-bottom: 100px;">
	</div>

	<div class="container mb-5">	
		<div class="row">			
			<div class="col-sm-12">
				<center>
					<input type="text" name="" style="border:1px solid grey;border-radius: 20px;width: 75%;padding: 10px;" placeholder="Search">
				</center>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-6">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat1.png" class="img1">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>
			
			<div class="col-sm-4 col-6">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat6.png" class="img1">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>

			<div class="col-sm-4 col-6  resG1" style="margin-bottom: 50px;">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat5.png" class="img1">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>


			<div class="col-sm-4 col-6 resG1">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat1.png" class="img1">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>
			
			<div class="col-sm-4 d-none d-lg-block">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat6.png">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>

			<div class="col-sm-4 d-none d-lg-block" style="margin-bottom: 50px;">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat5.png">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>


			<div class="col-sm-4 d-none d-lg-block">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat5.png">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>
			
			<div class="col-sm-4 d-none d-lg-block" style="margin-bottom: 100px;">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat1.png">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>

			<div class="col-sm-4 d-none d-lg-block">
				<div style="border:1px solid;border-radius: 25px 25px 0px 0px;">
					<img src="img/obat6.png">
				</div>
				<div style="color: white;background-color: blue;border-radius: 0px 0px 25px 25px; padding:15px;">
					<center>ADD TO CART</center>
				</div>
			</div>

		</div>
	</div>

	<div class="container">		
	<div class="row mt-5 mb-5">
				<div class="col-sm-12">
					<center>
							<div>
								<span>								
									<button  style="border:none;border-radius: 50%;padding: 5px 7px;transform: rotate(180deg);">
										<img src="gambar/hemhem.png" style="width: 20px;">
									</button>
								</span>								
								<span>
									<button  style="background-color:rgb(67,133,255);border:none;border-radius: 50%;padding: 5px 12px;">
										1
									</button>
								</span>
								<span>
									<button  style="border:none;border-radius: 50%;padding: 5px 12px;">
										2
									</button>
								</span>
								<span>
									<button  style="border:none;border-radius: 50%;padding: 5px 12px;">
										3
									</button>
								</span>
								<span>
									<button  style="border:none;border-radius: 50%;padding: 5px 7px;">
										<img src="gambar/hemhem.png" style="width: 20px;">
									</button>
								</span>	
							</div>					
					</center>					
				</div>
			</div>
			</div>
</body>
</html>
@endsection