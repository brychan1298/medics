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
<body data-spy="scroll" data-target="menu" onload="getDates()">
	<!-- judul -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 20px;font-size: 50px;margin-top: 160px;">OUR CUSTOMER </div></center>
			</div>
		</div>	
		<div class="row">
		    <div>
		    	<form action="/showcustomer" method="GET">
			    	<span>
			    		<input type="date" name="tanggal" id="dates" class="form-control " style="">
			    	</span>
			    	<span>
			    		<button type="submit" class="btn btn-primary" style="float: left; position: absolute;margin: 0px; margin-top: -38px;margin-left: 192px;">SHOW</button>
			    	</span>		    	
		    	</form>
		    </div>
		</div>
	</div>
		
	<!--<div class="row">				
				<div class="col-sm-12">
					<center>
					<span >
						<input type="text" name="" placeholder="Search" style="border:1px solid grey;border-radius: 15px 0px 0px 15px; padding-right: 550px; padding-top: 10px;padding-bottom: 9px;padding-left: 10px;">
					</span>
					<span style="background-color: #6672EC;padding: 12px;border-radius: 0px 15px 15px 0px; margin-left: -5px;">
						<img src="gambar/searchicon.png" style="width: 30px;">
					</span>
				</center>
				</div>
			</div> -->
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px;">
		<div class="row" style="margin-top:0px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> --> 
			<div class="col-sm-12">									
				<table  class="table-border col-lg-12" style="border-bottom: 1px solid #707070;margin: 5px;">
					
					<tr style="border-bottom: 1px solid grey;text-align: center;">
						<th style="padding-bottom: 25px;padding-top: 25px;">Name</th>
						<th style="padding-bottom: 25px;padding-top: 25px;">Date</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;">Item</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;">Total</th>						
						<th style="padding-bottom: 25px;padding-top: 25px;">Action</th>				
					</tr>
					@foreach($acustomer as $ac)
					<tr style="border-bottom: 1px solid grey;text-align: center;">
						<td style="padding-bottom: 25px;padding-top: 25px;">{{$ac->tbuser->name}}</td>
						<td style="padding-bottom: 25px;padding-top: 25px;">{{$ac->tanggal}}</td>
						<td style="padding-bottom: 25px;padding-top: 25px;">{{$ac->tbtransaksidetil->jumlah}}</td>
						<td style="padding-bottom: 25px;padding-top: 25px;">{{$ac->total}}</td>
						<td style="padding-bottom: 25px;padding-top: 25px;"><a href="/customer/detil/{{$ac->id_transaksi}}" class="btn btn-primary">DETAILS</a></td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
function getDates(){
    var d = new Date();
	var month = d.getMonth();
	var month_actual = month + 1;

	if (month_actual < 10) {
	  month_actual = "0"+month_actual; 
	  }

	var day_val = d.getDate();
	if (day_val < 10) {
	  day_val = "0"+day_val; 
	  }

	document.getElementById("dates").value = d.getFullYear()+"-"+ month_actual +"-"+day_val;
}
</script>
@endsection