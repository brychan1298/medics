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
    *{
      padding:0px;
      margin:0px;
    }

    .row2{
      width:100%;height:550px;background-color:white;
    }

    .mars{
      margin-top: 50px;
    }

    .are{
      font-size:70px;
      color:black;
      font-family:sans-serif;
      text-align: right;
      margin-top: 60px;
    }

    .but2{
      margin-left: 120px;
    }

    @media(max-width: 1024px){
      .mar{
        margin-top: 200px;
        text-align: center;
        margin-left: 50px;
      }
      .hehe{
        margin-top: 30px;
        margin-left: 50px;

      }
      .mtop{
        margin-top: 900px;
      }
      .mtop2{
        margin-top: 1000px;
      }
      .are1{
        margin-top:-10px;
        text-align: center;
        font-size: 60px;
      }
      .button2{
        margin-left: 0px;
        padding-left: 3 0px;
        margin-bottom: 150px;

      }
    }
  </style>
</head>
<body data-spy="scroll" data-target="menu">
  <div class="container-fluid">
      <div class="row" style="width:100%;height:300px;background-color:white;margin-top: 150px;">
        <div class="col-sm-6 mt-4 col-12 text-sm-left text-center">
          <div style="color:black;font-size:50px;">
            Stay Healthy<br>
            Be Active.
          </div>
          <div style="color: grey;">
            Medics is an application that we made for all of you.<br>
            this application can facilitate you in the health field.<br> use this application properly and responsibly.
          </div>
          <button style="background-color:rgb(130,180,253);border-radius:25px;height:40px;width:130px;color:white;border: 0px" class="mt-3">GET STARTED</button>
        </div>
        <div class="col-sm-6 col-12">
          <img class="w-100" src="img/home.png" class="col-sm-12">
        </div>
      </div>
      <div class="row" style="width:100%;height:550px;background-color:white;margin-top: 150px;">
        <!-- <div class="col-sm-1"></div> -->
        <div class="col-sm-4 col-12 mar">
          <div style="width:350px;height:380px;border:1px solid lightgrey;background-color:white;">
            <center>
              <img style="width: 150px;margin-top: 30px;" src="gambar/docteri.png" class="">
            </center>
            <div style="font-size:20px;color:rgb(46,94,190);font-weight:bold;padding-top:20px; text-align: center;">FIND A DOCTOR</div>
            <div style="font-size:15px;color:black;font-weight:thick;padding-left:20px;padding-top:5px;text-align: center;padding-right: 20px;">
              with the "FIND A DOCTOR" feature we can find the closest doctor from our position, so that helps us in terms of consulting doctors and others.
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-1"></div> -->
        <div class="col-sm-4 col-12 hehe">
          <div style="width:350px;height:380px;border:1px solid lightgrey;background-color:white;">
            <center>
              <img style="width: 150px;margin-top: 30px;" src="gambar/donor1.png" class="">
            </center>
            <div style="font-size:20px;color:rgb(46,94,190);font-weight:bold;padding-top:20px;text-align: center;">HOSPITAL QUEUE</div>
            <div style="font-size:15px;color:black;font-weight:thick;padding-left:20px;padding-top:5px;text-align: center;padding-right: 20px;">
              with the queue feature can make it easier for everyone if you want to book a queue first so you don't have to wait long for the queue
            </div>
          </div>
        </div>
        <!-- <div class="col-sm-1"></div> -->
        <div class="col-sm-4 col-12 hehe">
          <div style="width:350px;height:380px;border:1px solid lightgrey;background-color:white;">
            <center>
              <img style="width: 150px;margin-top: 30px;" src="gambar/obati.png" class="">
            </center>
            <div style="font-size:20px;color:rgb(46,94,190);font-weight:bold;padding-top:20px;text-align: center;">OUR SHOP</div>
            <div style="font-size:15px;color:black;font-weight:thick;padding-left:20px;padding-top:5px;text-align: center;padding-right: 20px;">
              in the application we can also buy goods / medicine so we don't have to bother going to the pharmacy so it is more practical
            </div>
          </div>
        </div>
      </div>
      <div class="row row2">
        <div class="col-sm-1"></div>
        <div class="col-sm-6 col-12">
          <img style="" src="gambar/ya.jpg" class="w-100 mtop">
        </div>
        <div class="col-sm-4 col-12 text-sm-left text-center">
          <div style="" class="are are1">Are You<br>Interested?</div>
          <div style="color: grey;font-size: 18px;text-align: right;" class="d-none d-lg-block">
            let's use this very useful application. help you in all difficulties and make you more instant in doing everything
          </div>
          <div class="mt-2 but2 button2">
            <button style="background-color:rgb(46,94,240);border-radius:25px;height:40px;width:140px;color:white;border:0px;">LOGIN</button>
            <button style="background-color:rgb(130,180,253);border-radius:25px;height:40px;width:140px;color:white;border:0px;">REGISTER</button>
          </div>
        </div>
        <div class="col-sm-1"></div>
      </div>
        <div class="mtop2">
    <center><div style="font-size: 50px;margin-top: 100px;">OUR SPECIALIST</div><img src="gambar/pembatas.png" style="width: 160px;margin-bottom: 20px;"></center>
  </div>

  <div class="container" style="margin-bottom: 100px;">
    <div class="row">
      <div class="col-sm-4 col-12 mt-5">
        <center>
          <div style="font-size: 20px;border: 1px solid lightgrey ;border-radius: 15px;">
            <img src="img/doctor_1_carousel.jpg" class="w-100">
            <label style="padding: 20px; color:#2E5EBE;font-weight: bold;padding-bottom: 0px;">Dr.Steve</label>
            <p style="color: grey;font-size: 16px;padding-top: 0px;">Dentist</p>
          </div>
        </center>
      </div>
      <div class="col-sm-4 col-12 mt-5">
        <center>
          <div style="font-size: 20px;border: 1px solid lightgrey ;border-radius: 15px;">
            <img src="img/doctor_2_carousel.jpg" class="w-100">
            <label style="padding: 20px; color:#2E5EBE;font-weight: bold;padding-bottom: 0px;">Dr.Hendy</label>
            <p style="color: grey;font-size: 16px;padding-top: 0px;">Dentist</p>
          </div>
        </center>
      </div>
      <div class="col-sm-4 col-12 mt-5">
        <center>
          <div style="font-size: 20px;border: 1px solid lightgrey ;border-radius: 15px;">
            <img src="img/doctor_3_carousel.jpg" class="w-100">
            <label style="padding: 20px; color:#2E5EBE;font-weight: bold;padding-bottom: 0px;">Dr.George</label>
            <p style="color: grey;font-size: 16px;padding-top: 0px;">Dentist</p>     
         </div>
       </center>
      </div>
    </div>
  </div>
      <div class="row" style="background-color:rgb(237,247,248);">
        <div class="col-sm-7">
          <img class="dd1 w-100" src="img/dd9898616c7454ae62821cc57b3f608d.jpg">
        </div>
        <div class="col-sm-5 d-none d-lg-block">
          <div style="font-size:60px;font-weight:thick;color:black;font-family:sans-serif;padding-top:90px;text-align: right;margin-right: 80px;margin-bottom: 20px;">
            Health is Our<br>
            Priority
        </div>
        <div style="color: grey;font-weight: thick;position: relative;bottom: 10px;font-size: 18px;text-align: right;margin-bottom: 20px;margin-top: 10px;margin-right:80px;">
            let's use this very useful application. help you in all difficulties and make you more instant in doing everything
          </div>
          <button style="background-color:rgb(46,94,240);border-radius:25px;height:40px;width:140px;color:white;position:relative;left:29 0px;border:0px;margin-left: 300px;">ABOUT US</button>
        </div>
      </div>

  <div>
    <center><div style="font-size: 40px;" class="mt-5">TESTIMONIALS</div></center>
    <center><img src="gambar/pembatas.png" style="width: 160px;"></center>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-4 mt-5">
        <div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="img/doctor1.jpg" style="border-radius: 50px;width: 80px;" class=""><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">Johan</div>
        <div class="mt-2">
          <center>
            I am very happy to use this application because it is very easy for me to buy drugs.
          </center>
        </div>
      </center></div>
      </div>
      <div class="col-12 col-sm-4 mt-5">
        <div style="border: 1px solid lightgrey;padding: 40px;">
          <center><img src="img/doctor2.jpg" style="border-radius: 50px;width: 80px;" class=""><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">Anna</div>
        <div class="mt-2">
          <center>
            this application is very useful for my family. very good. no regrets, download it.
          </center>
        </div>
      </center></div>
      </div>
      <div class="col-12 col-sm-4 mt-5 mb-5 ">
        <div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="img/doctor1.jpg" style="border-radius: 50px;width: 80px;" class=""><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">Liebert</div>
        <div class="mt-2">
          <center>
            i like this app, because very easy to use. I was able to consult a doctor easily.
          </center>
        </div>
        </center></div>
      </div>
    </div>
  </div>
</body>
</html>
@endsection