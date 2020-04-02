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
	table {
  		border-collapse: collapse;
	}

	table,th {
  		border: 1px solid grey;
  		margin-left: 70px;
  		margin-top: 50px;
  		text-align: center;
  		width: 1200px;
  		height: 50px;
	}
	table,td{
		border: 1px solid grey;
  		margin-left: 70px;
  		margin-top: 50px;
  		text-align: center;
  		width: 1200px;
  		height: 120px;
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
		background-color: rgb(67,133,255);
		border: none;
		color: white;
		width: 200px;
		height: 60px;
		font-size: 20px;
		margin-top: 20px;
		border-radius: 3px;
		margin-left: 55px;

	}
	.btn3{
		background-color: rgb(67,133,255);
		border:none;
		color: white;
		border-radius: 3px;
		margin-left: 160px;
		width: 430px;
		height: 50px;
		margin-top: 30px;
		font-size: 20px;
	}
	.text2{
		font-weight: bold;
		font-size: 45px;
		margin-left: 300px;
		margin-top: 20px;
	}
	.text3{
		font-size: 20px;
		margin-left: 170px;
		font-weight: bold;
	}
	.text4{
		font-size: 20px;
		margin-left: 260px;
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
	#ww7{
		background-color:rgb(67,133,255);
		width:1350px;
		height:265px;
		margin-top: 100px;
	}
	.nn1{
		position:relative;
		margin-top: 30px;
		margin-left: 50px;
		width: 200px;
	}
	.jj1{
		font-size:35px;
		color:white;
		font-weight:thick
		font-family:sans-serif;
		padding-top:25px;
		margin-left: -80px;
	}
	.jj2{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		margin-left: -80px;
	}
	.jj3{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		margin-left: -80px;
	}
	.jj4{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		margin-left: -80px;
	}
	.jj5{
		font-size:35px;
		color:white;
		font-weight:thick
		font-family:sans-serif;
		padding-top:25px;
		padding-left:20px;
		margin-left: -80px;
	}
	.jj6{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		padding-left:20px;
		margin-left: -80px;
	}
	.jj7{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		padding-left:20px;
		margin-left: -80px;
	}
	.jj8{
		font-size:35px;
		color:white;
		font-weight:thick
		font-family:sans-serif;
		padding-top:25px;
		padding-left:70px;
		margin-left: -80px;
	}
	.jj9{
		width: 200px;
		margin-left: -10px;
	}
</style>
<body>
	<div class="container-fluid" style="margin-top: 200px;">
		<div class="row">
			<table>
  				<tr class="line1">
	  				<th>Image</th>
	  				<th>Product</th>
	  				<th>Price</th>
	  				<th>Qty</th>
	  				<th>Total</th>
	  				<th>Remove</th>
  				</tr>
  				@foreach($cart as $c)
	  				<tr>
		  				<td><img src="../../gambar/{{$c->tbproduk->img}}" class="w-50" style="margin: 10px;"></td>
		  				<td>{{$c->tbproduk->nama}}</td>
		  				<td>Rp{{$c->tbproduk->harga}},00</td>
	  					<td>
	  						<span>
	  							<button class="btn1">-</button></span><span class="text1">   1   </span><span><button class="btn1">+</button>
	  						</span>
	  					</td>
	  				<td>Rp{{($c->tbproduk->harga)*($c->jlh)}},00</td>
	  				<td><a href="/cartDel/{{$c->id}}/{{Auth::user()->id}}" class="btn btn-primary">x</a></td>
	  				</tr>
  				@endforeach
			</table>
		</div>
		<div class="row">
			<div class="col-sm-6">
				<a href="/shop" class="btn btn-primary btn2">Continue Shopping</a> 

			</div>
			<div class="col-sm-6">
				<p class="text2">CART TOTAL</p>
				<p class="line2"></p>
				<p><span class="text3">Subtotal</span><span class="text4">$100.00</span></p>
				<p><span class="text3">Total</span><span class="text5">$100.00</span></p>
				<p><button class="btn3">PROCEED TO CHECKOUT</button></p>
			</div>
		</div>
	</div>
</body>
</html>
@endsection