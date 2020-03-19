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
	</style>
</head>
<body data-spy="scroll" data-target="menu">
	<!-- judul -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">CUSTOMER</div></center>
			</div>
		</div>
	</div>
	<div class="row">				
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px; height: 600px;">
		<div class="row" style="margin-top:0px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12">									
				<table  class="table-border border-0 table col-lg-12" style="border-bottom: 1px solid #707070;margin: 5px;">
					<tr class="border-0">
						<div class="col-sm-12">
							<img src="img/doctor1.jpg" class="rounded-circle mt-4 mb-4" style="width: 50px;height: 50px;">
							<label class="font-weight-bold ml-2 mt-4" style="font-size: 20px;">JONO</label>
							<label class="font" style="font-size: 18px; margin-left: 800px;" >21 November 2019</label>
						</div>
					</tr>
					<tr class="">
						<td><img src="img/obat1.png" style="width: 100px;height: 150px;"></td>
						<center>	
						<td class="" style="padding-top: 70px;">Head Imune</td>	
						<td class="" style="padding-top: 70px;">Rp.30.000,00</td>	
						<td class="" style="padding-top: 70px;">1 Item</td>	
						<td class="" style="padding-top: 70px;">Rp.30.000,00</td>	
						</center>
					</tr>
					<tr class="">
						<td><img src="img/obat2.png" style="width: 100px;height: 150px;"></td>
						<center>	
						<td class="" style="padding-top: 70px;">Sore Medication</td>	
						<td class="" style="padding-top: 70px;">Rp.30.000,00</td>	
						<td class="" style="padding-top: 70px;">1 Item</td>	
						<td class="" style="padding-top: 70px;">Rp.30.000,00</td>	
						</center>
					</tr>
					<tr>	
						<td></td>
						<td></td>
						<td></td>
						<td></td>

						<td class="" style="padding-top: 70px;margin-left: 600px;" >Total : Rp.60.000,00</td>	

					</tr>
				</table>
			</div>
		</div>
	</div>	
</body>
</html>
@endsection