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
      @media(max-width: 1024px){
        .haha{
          margin-top: 20px;
          margin-bottom: 30px;
        }
      }
  </style>
</head>
<body>
	</div>
    <div class="container-fluid" style="margin-top: 200px;">
        <form action="/bayar/{{Auth::user()->id}}" method="GET">
        <div class="row">
              <div class="col-sm-1"></div>
              <div class="col-sm-5">
                <div class="" style="border: 1px solid lightgrey;padding: 30px;border-radius: 10px;">
                  <h3 class="text-center">Billing Your Details Order</h3>
                  <br>
                  <input type="hidden" name="iduser" value="{{Auth::user()->id}}">
                  <label>City</label><br>
                    <input type="text" name="city" class="form-control mb-2" placeholder="City" />
                  <label>Name</label><br>
                    <input type="text" name="name" class="form-control mb-2" placeholder="Name"/>
                  <label>Email</label><br>
                    <input type="Email" name="email" class="form-control mb-2" placeholder="Email"/>
                  <label>Address</label><br>
                    <input type="text" name="address" class="form-control mb-2" placeholder="Address"/>
                  <label>Delivery</label><br>                    
                    <select name="kirim" class="form-control mb-2">
                      <option>JNE</option>
                      <option>J&T</option>
                      <option>TiKi</option>
                    </select>
                  <label>Notes</label><br>
                    <input type="text" name="notes" class="form-control mb-2" placeholder="Write Your Notes Here..." />
                </div>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-4">
              <div class="haha" style="border: 1px solid lightgrey;padding: 30px;border-radius: 10px;">
                  <h3 class="text-center">Product</h3>
                  <hr>
                  <p style="font-size: 16px;font-weight:;">Your Product</p>
                  <hr>
                  @foreach($cart as $c)
                  <p class="g1">
                      <label class="">{{$c->tbproduk->nama}} x {{$c->jlh}}</label>
                      <label class="" style="float: right;">@currency(($c->tbproduk->harga)*($c->jlh)),00</label> </p>                 
                  @endforeach
                  <hr>
                  <label class="">Delivery Fee</label>
                  <label class="" style="float: right;">Rp 20.000,00</label> 
                  <hr>
                  <label style="font-weight: bold;">Total</label>
                  <label style="float: right;font-weight: bold;">Rp {{$d}},00</label>
                  <p>
                    <button type="submit" class="btn btn-primary form-control mt-4">PLACE ORDER</button>
                  </p>
              </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        </form>
      </div>
</body>
</html>
@endsection