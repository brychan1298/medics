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
				<table  class="table-border col-lg-12" style="border-bottom: 0px solid #707070;margin: 5px;">
					<tr style="border-bottom: 1px solid lightgrey">
						<td colspan="2" style="padding-left: 40px;font-size: 22px;font-weight: bold; font-family: Trebuchet MS; padding-top: 20px;padding-bottom: 20px;">{{$acustomer->tbprofile->nama}}</td>
						<td colspan="3" style="text-align: right;padding-top: 20px;padding-bottom: 20px; font-family: Trebuchet MS;font-size: 20px;font-weight: thin;"><span id="dates" style="padding-right: 30px;text-align: right;">{{$acustomer->tanggal}}</span></td>
					</tr>
					@foreach($acustomers as $ac)
					<tr style="padding: 0px;">
						<td style="padding-top: 20px;padding-left: 10px;padding-bottom: 20px;"><img src="../../gambar/{{$ac->tbproduk->img}}" style="width: 80px;"></td>	
						<td class="">{{$ac->tbproduk->nama}}</td>
						<td class="">Rp.{{$ac->tbproduk->harga}},00</td>
						<td class="">{{$ac->jumlah}}Item</td>
						<td class="" style="text-align: right;padding-right: 30px;">Rp.{{($ac->jumlah)*($ac->tbproduk->harga)}},00</td>
					</tr>
					@endforeach
					<tr style="font-size: 22px;">
						<td colspan="5" style="text-align: right;padding-right: 30px;font-size: 18px;font-weight: semibold;padding-top: 20px;border-top: 1px solid lightgrey;">Subtotal : Rp.{{$acustomer->total}},00</td>
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