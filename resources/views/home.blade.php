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
		#io{
			width:100%;
			height:127px;
			background-color:rgb(67,133,255);
		}
		.tyu{
			width:160px;
			height:100px;
			position:relative;
			top:10px;
			left:80px;
		}
		.ss1{
			color:white;
			font-weight:thick;
			font-size:20px;
			padding-top:48px;
		}
		.ss2{
			color:white;
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:100px;
			bottom:30px;
		}
		.ss3{
			color:white;
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:240px;
			bottom:60px;
		}
		.ss4{
			color:white;
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:350px;
			bottom:90px;
		}
		.ss5{
			color:white;
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:490px;
			bottom:120px;
		}
		.ss6{
			color:white;
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:640px;
			bottom:150px;
		}
		.ss7{
			color:white;
			font-weight:thick;
			height:40px;
			width:40px;
			position:relative;
			left:760px;
			bottom:185px;
		}
		#io1{
			width:100%;
			height:400px;
			background-color:white;
			margin-top: 150px;
		}
		.gg2{
			width:600px;
			height:380px;
			position:relative;
			top:15px;
		}
		.aa1{
			color:black;
			font-weight:thick;
			font-size:65px;
			position:relative;
			top:18px;
			left:120px;
		}
		.aa2{
			color:black;
			font-weight:thick;
			font-size:65px;
			position:relative;
			left:120px;
			bottom:8px;
		}
		.aa3{
			color:rgb(192,192,192);
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:120px;
			bottom:5px;
		}
		.aa4{
			color:rgb(192,192,192);
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:120px;
			bottom:10px;

		}
		.aa5{
			color:rgb(192,192,192);
			font-weight:thick;
			font-size:20px;
			position:relative;
			left:120px;
			bottom:15px;
		}
		.aa6{
			background-color:rgb(130,180,253);
			border-radius:25px;
			height:40px;
			width:120px;
			color:white;
			position:relative;
			left:120px;
			top:4px;
	}
	#ww1{
		width:100%;
		height:550px;
		background-color:white;
	}
	.oo1{
		width:350px;
		height:380px;
		position:relative;
		border:1px solid black;
		top:100px;
		right:20px;
		background-color:white;
	}
	.oo2{
		width:350px;
		height:380px;
		position:relative;
		border:1px solid black;
		top:100px;
		left:50px;
		background-color:white;
	}
	.oo3{
		width:350px;
		height:380px;
		position:relative;
		border:1px solid black;
		top:100px;
		left:10px;
		background-color:white;
	}
	.kk1{
		position:relative;
		left:120px;
		top:35px;
	}
	.kk2{
		font-size:20px;
		color:rgb(46,94,190);
		font-weight:bold;
		padding-top:60px;
		padding-left:100px;
	}
	.kk3{
		font-size:15px;
		color:black;
		font-weight:thick;
		padding-left:70px;
		padding-top:5px;
	}
	.kk4{
		font-size:15px;
		color:black;
		font-weight:thick;
		padding-left:80px;
	}
	.kk5{
		font-size:15px;
		color:black;
		font-weight:thick;
		padding-left:100px;
	}
	.kk6{
		font-size:15px;
		color:black;
		font-weight:thick;
		padding-left:120px;
	}
	.cc1{
		position:relative;
		left:100px;
		top:35px;
	}
	.cc2{
		position:relative;
		left:130px;
		top:35px;
	}
	.cc3{
		font-size:20px;
		color:rgb(46,94,190);
		font-weight:bold;
		padding-top:60px;
		padding-left:100px;
	}
	.cc4{
		font-size:20px;
		color:rgb(46,94,190);
		font-weight:bold;
		padding-top:60px;
		padding-left:130px;
	}
	#ww2{
		width:100%;
		height:550px;
		background-color:white;
	}
	.ss1{
		position:relative;
		right:30px;
	}
	.hh1{
		font-size:70px;
		font-weight:thick;
		color:black;
		font-family:sans-serif;
		padding-top:95px;
		position:relative;
		left:220px;
	}
	.hh2{
		font-size:70px;
		font-weight:thick;
		color:black;
		font-family:sans-serif;
		position:relative;
		left:130px;
		bottom:20px;
	}
	.hh3{
		font-size:20px;
		color:rgb(192,192,192);
		font-family:sans-serif;
		font-weight:thick;
		position:relative;
		left:110px;
	}
	.hh4{
		font-size:20px;
		color:rgb(192,192,192);
		font-family:sans-serif;
		font-weight:thick;
		position:relative;
		left:130px;
		bottom:5px;
	}
	.hh5{
		font-size:20px;
		color:rgb(192,192,192);
		font-family:sans-serif;
		font-weight:thick;
		position:relative;
		left:90px;
		bottom:10px;
	}
	.hh6{
		background-color:rgb(46,94,240);
			border-radius:25px;
			height:40px;
			width:140px;
			color:white;
			position:relative;
			left:170px;
	}
	.hh7{
		background-color:rgb(130,180,253);
			border-radius:25px;
			height:40px;
			width:140px;
			color:white;
			position:relative;
			left:180px;
	}
	#ww3{
		width:100%;
		height:250px;
		background-color:white;
	}
	.mm1{
		font-size:60px;
		color:black;
		font-weight:thick;
		padding-top:40px;
		padding-left:430px;
	}
	.mm2{
		position:relative;
		left:480px;
		height:80px;
		width:300px;
	}
	#ww4{
		width:100%;
		height:680px;
		background-color:white;
	}
	.bb1{
		width:350px;
		height:550px;
		background-color:white;
		position:relative;
		left:70px;
		top:10px;
		border-radius:15px;
		border:1px solid grey;
	}
	.bb2{
		width:350px;
		height:550px;
		background-color:white;
		position:relative;
		left:460px;
		bottom:540px;
		border-radius:15px;
		border:1px solid grey;
	}
	.bb3{
		width:350px;
		height:550px;
		background-color:white;
		position:relative;
		left:850px;
		bottom:1090px; 
		border-radius:15px;
		border:1px solid grey;
	}
	.rr1{
		position:relative;
		left:55px;
		top:25px;
		width:250px;
		height:360px;
	}
	.rr2{
		font-size:30px;
		color:rgb(46,94,190);
		position:relative;
		left:120px;
		top:35px;
		font-weight:bold;
	}
	.rr3{
		font-size:25px;
		color:rgb(192,192,192);
		position:relative;
		left:100px;
		font-weight:thick;
		top:40px;
	}
	#ww5{
		background-color:rgb(237,247,248);
		height:530px;
		width:100%;
	}
	.dd1{
		position:relative;
		left:30px;
		top:40px;
	}
	.dd2{
		position:relative;
		color:black;
		font-size:70px;
		font-weight:thick;
		padding-top:120px;
		font-family:sans-serif;
		left:30px;
	}
	.dd3{
		position:relative;
		color:black;
		font-size:70px;
		font-weight:thick;
		font-family: sans-serif;
		bottom:15px;
		left:220px;
	}
	.dd4{
		color:rgb(192,192,192);
		font-size:21px;
		font-weight:thick;
		font-family:sans-serif;
		position:relative;
		left:55px;
		bottom:5px;
	}
	.dd5{
		color:rgb(192,192,192);
		font-size:21px;
		font-weight:thick;
		font-family:sans-serif;
		position:relative;
		bottom:10px;
		left:75px;
	}
	.dd6{
		color:rgb(192,192,192);
		font-size:21px;
		font-weight:thick;
		font-family:sans-serif;
		position:relative;
		bottom:15px;
		left:33px;
	}
	.dd7{
		background-color:rgb(67,133,255);
			border-radius:25px;
			height:40px;
			width:140px;
			color:white;
			position:relative;
			left:300px;
	}
	#ww6{
		width:100%;
		height:410px;
		background-color:white;
	}
	.xx1{
		width:350px;
		height:330px;
		position:relative;
		background-color:white;
		left:80px;
		top:10px;
		border-radius:20px;
		border:1px solid grey;
	}
	.xx2{
		width:350px;
		height:330px;
		position:relative;
		background-color:white;
		bottom:320px;
		left:470px;
		border-radius:20px;
		border:1px solid grey;
	}
	.xx3{
		width:350px;
		height:330px;
		position:relative;
		background-color:white;
		left:850px;
		bottom:650px;
		border-radius:20px;
		border:1px solid grey;
	}
	.xx4{
		position:relative;
		top:20px;
		left:110px;
	}
	.xx5{
		position:relative;
		color:rgb(46,94,190);
		font-size:30px;
		font-weight:bold;
		font-family:sans-serif;
		left:123px;
		top:30px;
	}
	.xx6{
		position:relative;
		left:110px;
		top:25px;
	}
	.xx7{
		position:relative;
		color:rgb(192,192,192);
		font-weight:thick;
		font-family:sans-serif;
		top:30px;
		left:70px;
	}
	.xx8{
		position:relative;
		color:rgb(192,192,192);
		font-weight:thick;
		font-family:sans-serif;
		top:30px;
		left:60px;
	}
	.xx9{
		position:relative;
		color:rgb(192,192,192);
		font-weight:thick;
		font-family:sans-serif;
		top:30px;
		left:100px;
	}
	#ww7{
		background-color:rgb(67,133,255);
		width:100%;
		height:265px;
	}
	.nn1{
		position:relative;
		top:10px;
		left:70px;
	}
	.jj1{
		font-size:35px;
		color:white;
		font-weight:thick
		font-family:sans-serif;
		padding-top:25px;
	}
	.jj2{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
	}
	.jj3{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
	}
	.jj4{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
	}
	.jj5{
		font-size:35px;
		color:white;
		font-weight:thick
		font-family:sans-serif;
		padding-top:25px;
		padding-left:20px;
	}
	.jj6{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		padding-left:20px;
	}
	.jj7{
		font-size:20px;
		color:white;
		font-weight:thick;
		font-family:arial;
		padding-top:10px;
		padding-left:20px;
	}
	.jj8{
		font-size:35px;
		color:white;
		font-weight:thick
		font-family:sans-serif;
		padding-top:25px;
		padding-left:70px;
	}
	.jj9{
		position:relative;
		left:85px;
		top:5px;
	}




	</style>
</head>
<body>
	<div class="container-fluid">
			<div class="row" id="io1">
				<div class="col-sm-6">
					<div class="aa1">Stay Healthy</div>
					<div class="aa2">Be Active.</div>
					<div class="aa3">Lorem ipsum dolor sit amet, consectetur</div>
					<div class="aa4">adipiscing elit, sed do euismod tempor</div>
					<div class="aa5">incididunt ut labore et dolore magna aliqua.</div>
					<button class="aa6">GET STARTED</button>
				</div>
				<div class="col-sm-6">
					<img class="gg2" src="dokter.png">
				</div>
			</div>
			<div class="row" id="ww1">
				<div class="col-sm-1"></div>
				<div class="col-sm-3">
					<div class="oo1">
						<img class="kk1" src="gambar/mamak.png">
						<div class="kk2">FIND A DOCTOR</div>
						<div class="kk3">Usu habeo equidem sanctus no.</div>
						<div class="kk4">Suas summo id sed, erat errant</div>
						<div class="kk5">oporteat cu pri, In eum</div>
						<div class="kk6">omnes molestie</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="oo2">
						<img class="cc1" src="rumahsakit.png">
						<div class="cc3">HOSPITAL QUEUE</div>
						<div class="kk3">Usu habeo equidem sanctus no.</div>
						<div class="kk4">Suas summo id sed, erat errant</div>
						<div class="kk5">oporteat cu pri, In eum</div>
						<div class="kk6">omnes molestie</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="oo3">
						<img class="cc2" src="obat.png">
						<div class="cc4">OUR SHOP</div>
						<div class="kk3">Usu habeo equidem sanctus no.</div>
						<div class="kk4">Suas summo id sed, erat errant</div>
						<div class="kk5">oporteat cu pri, In eum</div>
						<div class="kk6">omnes molestie</div>
					</div> 
				</div>
				<div class="col-sm-1"></div> 
			</div>
			<div class="row" id="ww2">
				<div class="col-sm-1"></div>
				<div class="col-sm-6">
					<img class="ss1" src="orangngomong.png">
				</div>
				<div class="col-sm-4">
					<div class="hh1">Are You</div>
					<div class="hh2">Interested?</div>
					<div class="hh3">Lorem ipsum dolor sit amet, consectetur</div>
					<div class="hh4">adipiscing elit, sed do euismod tempor</div>
					<div class="hh5">incididunt ut labore et dolore magna aliqua.</div>
					<button class="hh6">LOGIN</button>
					<button class="hh7">REGISTER</button>
				</div>
				<div class="col-sm-1"></div>
			</div>
			<div class="row" id="ww3">
				<div class="col-sm-12">
					<div class="mm1">OUR SPECIALIST</div>
					<img class="mm2" src="plaster.png">
				</div>
			</div>
			<div class="row" id="ww4">
				<div class="col-sm-12">
					<div class="bb1">
						<img class="rr1" src="robert.png">
						<div class="rr2">Dr. Steve</div>
						<div class="rr3">Clinic Manager</div>
					</div>
					<div class="bb2">
						<img class="rr1" src="nig.png">
						<div class="rr2">Dr. Hendy</div>
						<div class="rr3">Surgical Specialist</div>
					</div>
					<div class="bb3">
						<img class="rr1" src="duncan.png">
						<div class="rr2">Dr. George</div>
						<div class="rr3">Dental Hygienist</div>
					</div>
				</div>
			</div>
			<div class="row" id="ww5">
				<div class="col-sm-7">
					<img class="dd1" src="dokterpria.png">
				</div>
				<div class="col-sm-5">
					<div class="dd2">Health is Our</div>
					<div class="dd3">Priority</div>
					<div class="dd4">Lorem ipsum dolor sit amet, consectetur</div>
					<div class="dd5">adipiscing elit, sed do euismod tempor</div>
					<div class="dd6">incididunt ut labore et dolore magna aliqua.</div>
					<button class="dd7">ABOUT US</button>
				</div>
			</div>
			<div class="row" id="ww3">
				<div class="col-sm-12">
					<div class="mm1">TESTIMONIALS</div>
					<img class="mm2" src="plaster.png">
				</div>
			</div>
			<div class="row" id="ww6">
				<div class="col-sm-12">
					<div class="xx1">
						<img class="xx4" src="bapak.png">
						<div class="xx5">Johan</div>
						<img class="xx6" src="bintang.png">
						<div class="xx7">Lorem ipsum dolor sit amet,</div>
						<div class="xx8">consectetur adipiscing elit, sed</div>
						<div class="xx9">do eiusmod tempo.</div>
					</div>
					<div class="xx2">
						<img class="xx4" src="nenek.png">
						<div class="xx5">Anna</div>
						<img class="xx6" src="bintang.png">
						<div class="xx7">Lorem ipsum dolor sit amet,</div>
						<div class="xx8">consectetur adipiscing elit, sed</div>
						<div class="xx9">do eiusmod tempo.</div>
					</div>
					<div class="xx3">
						<img class="xx4" src="bapak.png">
						<div class="xx5">Liebert</div>
						<img class="xx6" src="bintang.png">
						<div class="xx7">Lorem ipsum dolor sit amet,</div>
						<div class="xx8">consectetur adipiscing elit, sed</div>
						<div class="xx9">do eiusmod tempo.</div>
					</div>
				</div>
			</div>
		</div>

</body>
</html>
@endsection