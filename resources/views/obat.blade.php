@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="jquery-3.4.0.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

  <style type="text/css">
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
    width: 60%;
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
  .tengahin{
    margin-left: 10px;
  }
  @media(max-width: 1024px){
    .tengahin{
      text-align: center;
      margin-top: -20px;
      
    }
    .reshr{
      color: lightgrey;
      width: 475px;
    }
    .naik{
      margin-top: -40px;
    }
    .turun{
      margin-top: 50px;
    }
    .w-80{
      width: 90%;
    }
    .btn3{
      /*margin-left: 190px;*/
      
      width: 96%;
      margin-left: 5px;
      height: 50px;
      font-size: 16px;
      padding-top: 10px;
    }
    .text2{
      font-weight: bold;
      font-size: 24px;
      margin-left: 0px;  
      /*margin-left: 270px;*/
      margin-top: 20px;
      text-align: center;
    }
    .btn2{
      margin: 0px;
    }
    .text3{
      font-size: 18px;
      margin-left: 5px;
      /*margin-left: 190px;*/
      font-weight: bold;
    }
    .text4{
      font-size: 18px;
      margin-left: 205px;
    }
    .line2{
      border-bottom: 0.5px solid black;
      margin-left: 5px;
      /*margin-left: 190px;*/
      width: 98%;
    }
  }

  </style>
</head><body data-spy="scroll" data-target="menu">
  <div class="container-fluid" style="margin-top: 180px;">
    
    <div class="row d-none d-lg-block">
      <table class="table table-border col-12 text-center">
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
  <div class="d-none d-lg-block">
    <div class="row ">
      <div class="col-sm-6 col-12">
        <a href="/shop" class="btn btn-primary btn2">CONTINUE SHOPPING</a> 
      </div>
      <div class="col-sm-6 col-12">
        <p class="text2">CART TOTAL</p>
        <p class="line2"></p>
        <p><span class="text3">Subtotal</span><span class="text4">Rp{{$d}},00</span></p>
        <!--<p><span class="text3">Total</span><span class="text5">$100.00</span></p>-->
        <p><a href="/checkout/{{Auth::user()->id}}" class="btn btn-primary btn3">PROCEED TO CHECKOUT</a></p>
      </div>
    </div>
  </div>
  <div class="row d-block d-lg-none">
      <h1 class="tengahin mb-3">Shopping Cart</h1>
      <hr class="reshr">
      @foreach($cart as $c)
      <div class="row">
        <div class="col-4">
          <img src="../../gambar/{{$c->tbproduk->img}}" class="w-80 ml-4">
        </div>
        <div class="col-4 mt-4">
          <label style="font-size: 20px;font-weight:bold;">
            {{$c->tbproduk->nama}}
          </label>
          <label style="font-size: 18px;margin-left: 2px;">
            Rp{{$c->tbproduk->harga}},00
          </label>
          <div class="naik">
            <label>
              <button class="btn btn-primary" style="margin-top: -5px;margin-right: -5px;">-</button>
            </label>
            <label>
              <input type="text" name="" value="1" class="testing form-control" style="margin-top: 45px;">
            </label>
            <label>
              <button class="btn btn-primary" style="margin-top: -5px;margin-left: -5px;">+</button>
            </label>
          </div>
        </div>
        <div class="col-4 turun">
          <a href="/cartDel/{{$c->id}}/{{Auth::user()->id}}" class="btn btn-danger">remove</a>
          <label style="text-align:right;font-weight: bold;font-size: 18px; margin-top: 30px;">Rp{{($c->tbproduk->harga)*($c->jlh)}},00</label>
        </div>
        </div>
          <hr class="reshr"> 
      @endforeach
    </div>
    <div class="row d-lg-none d-block">
      <div class="col-sm-12">
        <p class="text2">CART TOTAL</p>
        <p class="line2"></p>
        <p><span class="text3">Subtotal</span><span class="text4">Rp{{$d}},00</span></p>
        <!--<p><span class="text3">Total</span><span class="text5">$100.00</span></p>-->
        <p><a href="/checkout/{{Auth::user()->id}}" class="btn btn-primary btn3" style="
      margin-top: 25px;">PROCEED TO CHECKOUT</a></p>

        <a href="/shop" class="btn btn-primary btn3" style="margin-top: 5px;margin-bottom: 30px;">CONTINUE SHOPPING</a> 
      </div>
    </div>
  </div>
</body>
</html>
@endsection