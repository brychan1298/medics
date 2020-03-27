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

	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px; height: 300px">
		<div class="row" style="margin-top:0px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12">									
				<table  class="table-border table col-lg-12" style="border-bottom: 0px solid #707070;margin: 5px;">
					<tr style="font-size: 25px;">
						<th colspan="3" style="padding-left: 70px;">{{$acustomer->tbprofile->nama}}</th>
						<th colspan="2" style="float: right;"><span id="dates">{{$acustomer->tanggal}}</span></th>
					</tr>
					@foreach($acustomers as $ac)
					<tr>
						<td style="padding-top: -50px;"><img src="../../gambar/{{$ac->tbproduk->img}}" style="width: 70px;"></td>	
						<td class="pt-5">{{$ac->tbproduk->nama}}</td>
						<td class="pt-5">Rp.{{$ac->tbproduk->harga}},00</td>
						<td class="pt-5">{{$ac->jumlah}}</td>
						<td class="pt-5">Rp.{{($ac->jumlah)*($ac->tbproduk->harga)}},00</td>
					</tr>
					@endforeach
					<tr style="font-size: 22px;">
						<td colspan="5" style="text-align: right;padding-right: 112px;font-weight: bold;">SUBTOTAL : Rp.{{$acustomer->total}},00</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</body>
</html>
<script>
$(document).ready(function () {
  $('.dates').datetimepicker({
    format: 'MMMM/DD/YYYY',
    locale: 'Id'
  });
</script>
@endsection