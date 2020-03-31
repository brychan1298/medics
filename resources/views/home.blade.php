@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="jquery-3.4.0.min.js"></script>
  <script src="jquery-ui.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" type="text/css">

  <style type="text/css">
    *{
      padding:0px;
      margin:0px;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
      <div class="row" style="width:100%;height:400px;background-color:white;margin-top: 150px;">
        <div class="col-sm-6">
          <div style="color:black;font-weight:thick;font-size:60px;position:relative;top:18px;margin-bottom:30px;left:120px;">
            Stay Healthy<br>
            Be Active.
          </div>
          <div style="color: grey;font-weight: thick;position: relative;left: 125px;bottom: 10px;font-size: 18px;">
            Medics is an application that we made for all of you.<br>
            this application can facilitate you in the health field.<br> use this application properly and responsibly.
          </div>
          <button style="background-color:rgb(130,180,253);border-radius:25px;height:40px;width:130px;color:white;position:relative;left:120px;top:4px;border: 0PX;">GET STARTED</button>
        </div>
        <div class="col-sm-6">
          <img class="gg2" src="img/home.png">
        </div>
      </div>
      <div class="row" style="width:100%;height:550px;background-color:white;">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
          <div style="width:350px;height:380px;position:relative;border:1px solid lightgrey;top:100px;right:20px;background-color:white;">
            <img style="width: 150px;position: relative;top: 50px;left: 100px;" src="gambar/docteri.png">
            <div style="font-size:20px;color:rgb(46,94,190);font-weight:bold;padding-top:60px;padding-left:100px;">FIND A DOCTOR</div>
            <div style="font-size:15px;color:black;font-weight:thick;padding-left:20px;padding-top:5px;text-align: center;padding-right: 20px;">
              with the "FIND A DOCTOR" feature we can find the closest doctor from our position, so that helps us in terms of consulting doctors and others.
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
          <div style="width:350px;height:380px;position:relative;border:1px solid lightgrey;top:100px;right:20px;background-color:white;">
            <img style="width: 150px;position: relative;top: 50px;left: 100px;" src="gambar/donor1.png">
            <div style="font-size:20px;color:rgb(46,94,190);font-weight:bold;padding-top:60px;text-align: center;">HOSPITAL QUEUE</div>
            <div style="font-size:15px;color:black;font-weight:thick;padding-left:20px;padding-top:5px;text-align: center;padding-right: 20px;">
              with the queue feature can make it easier for everyone if you want to book a queue first so you don't have to wait long for the queue
            </div>
          </div>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
          <div style="width:350px;height:380px;position:relative;border:1px solid lightgrey;top:100px;right:20px;background-color:white;">
            <img style="width: 150px;position: relative;top: 50px;left: 100px;" src="gambar/obati.png">
            <div style="font-size:20px;color:rgb(46,94,190);font-weight:bold;padding-top:60px;text-align: center;;">OUR SHOP</div>
            <div style="font-size:15px;color:black;font-weight:thick;padding-left:20px;padding-top:5px;text-align: center;padding-right: 20px;">
              in the application we can also buy goods / medicine so we don't have to bother going to the pharmacy so it is more practical
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="width:100%;height:550px;background-color:white;">
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <img style="position:relative;right:30px;color:white;font-weight:thick;font-size:20px;padding-top:48px;" src="gambar/ya.jpg">
        </div>
        <div class="col-sm-4">
          <div style="font-size:70px;font-weight:thick;color:black;font-family:sans-serif;padding-top:90px;text-align: right;">Are You<br>Interested?</div>
          <div style="color: grey;font-weight: thick;position: relative;bottom: 10px;font-size: 18px;text-align: right;">
            let's use this very useful application. help you in all difficulties and make you more instant in doing everything
          </div>
          <button style="background-color:rgb(46,94,240);border-radius:25px;height:40px;width:140px;color:white;position:relative;left:100px;border:0px;">LOGIN</button>
          <button style="background-color:rgb(130,180,253);border-radius:25px;height:40px;width:140px;color:white;position:relative;left:120px;border:0px;">REGISTER</button>
        </div>
        <div class="col-sm-1"></div>
      </div>
        <div class="mt-5">
    <center><div style="font-size: 50px;">OUR SPECIALIST</div><img src="gambar/pembatas.png" style="width: 160px;margin-bottom: 30px;"></center>
  </div>

  <div class="container d-none d-lg-block" style="margin-bottom: 100px;">
    <div class="row">
      <div class="col-sm-4">
        <center>
          <div style="font-size: 20px;border: 1px solid lightgrey ;border-radius: 15px;">
            <img src="img/doctor_1_carousel.jpg" class="w-100">
            <label style="padding: 20px; color:#2E5EBE;font-weight: bold;padding-bottom: 0px;">Dr.Steve</label>
            <p style="color: grey;font-size: 16px;padding-top: 0px;">Dentist</p>
          </div>
        </center>
      </div>
      <div class="col-sm-4">
        <center>
          <div style="font-size: 20px;border: 1px solid lightgrey ;border-radius: 15px;">
            <img src="img/doctor_2_carousel.jpg" class="w-100">
            <label style="padding: 20px; color:#2E5EBE;font-weight: bold;padding-bottom: 0px;">Dr.Hendy</label>
            <p style="color: grey;font-size: 16px;padding-top: 0px;">Dentist</p>
          </div>
        </center>
      </div>
      <div class="col-sm-4">
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
      <div class="row" style="background-color:rgb(237,247,248);height:530px;width:100%;">
        <div class="col-sm-7">
          <img class="dd1" src="img/dd9898616c7454ae62821cc57b3f608d.jpg">
        </div>
        <div class="col-sm-5">
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
      <div class="col-sm-4">
        <div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="img/doctor1.jpg" style="border-radius: 50px;width: 80px;"><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">Johan</div>
        <div class="mt-2">
          <center>
            I am very happy to use this application because it is very easy for me to buy drugs.
          </center>
        </div>
      </center></div>
      </div>
      <div class="col-sm-4">
        <div style="border: 1px solid lightgrey;padding: 40px;">
          <center><img src="img/doctor2.jpg" style="border-radius: 50px;width: 80px;"><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">Anna</div>
        <div class="mt-2">
          <center>
            this application is very useful for my family. very good. no regrets, download it.
          </center>
        </div>
      </center></div>
      </div>
      <div class="col-sm-4">
        <div style="border: 1px solid lightgrey;padding: 40px;"><center><img src="img/doctor1.jpg" style="border-radius: 50px;width: 80px;"><div style="text-align: center;color:#2E5EBE;font-size: 20px;font-weight: bold;margin-top: 20px;">Liebert</div>
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