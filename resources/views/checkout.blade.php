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
    <style type="text/css">
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
    #box1{
      width:700px;
    height:670px;
    position:relative;
    border:1px solid black;
    top:100px;
    right:20px;
    background-color:white;
    margin-left: 100px;
    margin-top: -90px;
    }  
    #box2{
      width:500px;
    height:350px;
    position:relative;
    border:1px solid black;
    background-color:white;
    margin-top: 10px;
    margin-left: 20px;
  }
    .text1{
      margin-left: 86px;
      margin-top: 60px;
      font-size: 20px;
      font-weight: bold;
    }
    .text2{
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
      margin-left: 38px;
    }
    .text3{
      font-size: 20px;
      font-weight: bold;
      margin-top: 60px;
      margin-left: 600px;
    }
    .text4{
      font-size: 20px;
      font-weight: bold;
      margin-top: -45px;
      margin-left: 380px;
    }
    .text5{
      font-size: 18px;
      margin-left: 38px;
    }
    .text6{
      font-size: 18px;
      margin-top: -43px;
      margin-left: 380px;
    }
      .kotak1{
        width:600px;
      height:50px;
      position:relative;
      border:1px solid black;
      background-color:white;
      margin-left: 40px;
      border-radius: 20px;
      padding: 10px;
      }
    .kotak2{
      width:280px;
    height:50px;
    position:relative;
    border:1px solid black;
    background-color:white;
    margin-left: 40px;
    border-radius: 20px;
    padding: 10px;
    }
    .kotak3{
      width:280px;
    height:50px;
    position:relative;
    border:1px solid black;
    background-color:white;
    margin-left: 40px;
    border-radius: 20px;
    padding: 10px;
    }
    .kotak4{
      width:600px;
    height:150px;
    position:relative;
    border:1px solid black;
    background-color:white;
    margin-left: 40px;
    border-radius: 20px;
    padding-bottom: 110px;
    padding-left: 10px;
    }
    .kotak5{
     width:420px;
    height:50px;
    position:relative;
    border:1px solid black;
    background-color:white;
    margin-left: 40px;
    border-radius: 20px;
    padding: 10px;
    border-color:rgb(67,133,255);
    color: blue;
    margin-top: 70px;
    }
    .kotak6{
     width:420px;
    height:50px;
    position:relative;
    border:1px solid black;
    background-color:white;
    margin-left: 40px;
    border-radius: 20px;
    padding: 10px;
    border-color: rgb(67,133,255);
    color: blue;
    margin-top: 10px;
    }
    .g1{
      border-bottom: 2px solid black;
      width: 430px;
      margin-left: 38px;
    }
    .btn1{
      color: white;
      text-align: center;
      background-color: rgb(67,133,255);
      width: 400px;
      height: 50px;
      margin-left: 50px;
    }
    #ww7{
		background-color:rgb(67,133,255);
		width:1350px;
		height:265px;
		margin-top: 200px;
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
</head>
<body>
	</div>
    <div class="container-fluid" style="margin-top: 200px;">
        <span class="text1">Biling Details</span>
        <span class="text3">Your Order</span>
        <div class="row">
              <div class="col-sm-7">
            <div id="box1">
            <div>
              <p class="text2">Country</p>
              <input id="ph1" type="text" name="" class="kotak1" placeholder="Country" />
              <p class="text2">Name</p>
              <input type="text" name="" class="kotak2" placeholder="First Name"/><input type="text" name="" class="kotak3" placeholder="Last Name"/>
              <p class="text2">Email</p>
              <input type="Email" name="" class="kotak1" placeholder="Email"/>
              <p class="text2">Address</p>
              <input type="text" name="" class="kotak1" placeholder="Address"/>
              <p class="text2">Notes</p>
              <input type="text" name="" class="kotak4" placeholder="Write Your Notes Here..." />
            </div>
              </div>
            </div>
            <div class="col-sm-2">
              <div id="box2">
                <div>
                  <p class="text2">
                    Products
                  </p>                  
                  <p class="text4">
                    Total
                  </p>
                  @foreach($cart as $c)
                  <p class="g1"></p>
                      <p class="text5">{{$c->tbproduk->nama}} x {{$c->jlh}}</p>
                      <p class="text6">Rp{{($c->tbproduk->harga)*($c->jlh)}},00</p>                  
                  @endforeach
                  <p class="g1"></p>
                  <p style="font-size: 18px; margin-left: 38px; font-weight: bold;">Total</p>
                  <p style="font-size: 18px; margin-top: -43px; margin-left: 380px; font-weight: bold;">Rp{{$d}},00</p>
                  <button class="btn1">PLACE ORDER</button>
                </div>
              </div>
            </div>
        </div>
      </div>
</body>
</html>
@endsection