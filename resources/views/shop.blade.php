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
				width: 150px;
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

	<div id="shop1" style="font-size: 40px;">
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
		<div class="row" style="margin-bottom:35px;">
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat1.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat5.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat6.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
		</div>
	</div>

		<div class="container">
		<div class="row" style="margin-bottom:35px;">
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat1.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat5.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat6.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
		</div>
	</div>

		<div class="container">
		<div class="row" style="margin-bottom:35px;">
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat1.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat5.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
					<center>ADD TO CART</center>
				</div>
			</div>
			<div class="col-sm-4 col-6">
				<center>
					<div style="border:1px solid;border-radius: 25px 25px 0px 0px;border-bottom: 1px solid blue;">
						<div style="background-color: #ADC5DD;border-radius: 50%; border:1px solid #ADC5DD;width: 180px;height: 180px;margin-top: 80px;z-index: 0;">
						</div>
							<img src="img/obat6.png" class="img1" style="width: 230px;margin-bottom: 0px;z-index: 1;margin-top: -250px;">
							<p style="text-align: center;color:#2E5EBE;font-size: 20px;margin-top: -30px;font-weight: bold;">Sore Medication</p>
							<p style="text-align: center;font-size: 18px;margin-top: -10px;">$50.00</p>
					</div>
				</center>
				<div style="color: white;background-color: #2E5EBE;border:0px;border-radius: 0px 0px 25px 25px; padding:15px;font-weight: bold;">
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