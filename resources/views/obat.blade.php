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
</head>
<style>
	.navbar{
		width:100%;
      height:127px;
      background-color:rgb(67,133,255);
	}
	.ss2{
		color: white;
		margin-left: -20px;
		font-size: 20px;
	}
	.line1{
		border-bottom: 1.5px solid black;
	}
	.btn1{
		background-color: rgb(67,133,255);
		border: none;
		color: white;
		width: 30px;
		height: 32px;
	}
	.text1{
		border-bottom: 0.5px solid black;
		border-top: 0.5px solid black;
		font-size: 20px;
	}
	.btn2{
		margin-top: 20px;
		border-radius: 3px;
		margin-left: 55px;
		font-size: 18px;
		width: 400px;
		height: 50px;
		padding-top: 10px;

	}
	.btn3{
		margin-left: 170px;
		width: 400px;
		height: 50px;
		margin-top: 30px;
		font-size: 18px;
		padding-top: 10px;
	}
	.text2{
		font-weight: bold;
		font-size: 28px;
		margin-left: 300px;
		margin-top: 20px;
	}
	.text3{
		font-size: 18px;
		margin-left: 170px;
		font-weight: bold;
	}
	.text4{
		font-size: 20px;
		margin-left: 220px;
	}
	.text5{
		font-size: 20px;
		margin-left: 295px;
	}
	.line2{
		border-bottom: 0.5px solid black;
		margin-left: 170px;
		width: 400px;
	}
	.testing{
		width: 40px;
	}
</style>
<body>
	<div class="container-fluid" style="margin-top: 180px;">
		<div class="row">
			<table class="table table-border col-12 text-center ">
  				<tr>
	  				<th>Image</th>
	  				<th>Product</th>
	  				<th>Price</th>
	  				<th>Qty</th>
	  				<th>Total</th>
	  				<th>Remove</th>
  				</tr>
  				@foreach($cart as $c)
	  				<tr>
		  				<td><img src="../../gambar/{{$c->tbproduk->img}}" class="w-25"></td>
		  				<td class="text-center" style="font-size: 18px;padding-top: 60px;">{{$c->tbproduk->nama}}</td>
		  				<td class="text-center" style="font-size: 18px;padding-top: 60px;">Rp{{$c->tbproduk->harga}},00</td>
	  					<td>
	  						<label>
	  							<button class="btn btn-primary" style="margin-top: -5px;margin-right: -5px;">-</button>
	  						</label>
	  						<label>
	  							<input type="text" name="" value="1" class="testing form-control" style="margin-top: 45px;">
	  						</label>
	  						<label>
	  							<button class="btn btn-primary" style="margin-top: -5px;margin-left: -5px;">+</button>
	  						</label>
	  					</td>
	  				<td class="text-center" style="font-size: 18px;padding-top: 60px;">Rp{{($c->tbproduk->harga)*($c->jlh)}},00</td>
	  				<td class="text-center" style="font-size: 18px;padding-top: 60px;"><a href="/cartDel/{{$c->id}}/{{Auth::user()->id}}" class="btn btn-primary">x</a></td>
	  				</tr>
  				@endforeach
			</table>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<a href="/shop" class="btn btn-primary btn2">CONTINUE SHOPPING</a> 
			</div>
			<div class="col-sm-6">
				<p class="text2">CART TOTAL</p>
				<p class="line2"></p>
				<p><span class="text3">Subtotal</span><span class="text4">Rp{{$d}},00</span></p>
				<!--<p><span class="text3">Total</span><span class="text5">$100.00</span></p>-->
				<p><a href="/checkout/{{Auth::user()->id}}" class="btn btn-primary btn3">PROCEED TO CHECKOUT</a></p>
			</div>
		</div>
	</div>
</body>
</html>
@endsection