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
<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}


function bulan(){
	var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

	var myDays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

	var date = new Date();

	var day = date.getDate();

	var month = date.getMonth();

	var thisDay = date.getDay(),

	    thisDay = myDays[thisDay];

	var yy = date.getYear();

	var year = (yy < 1000) ? yy + 1900 : yy;

  	document.getElementById('tampilhari').innerHTML =thisDay + ', ' + day + ' ' + months[month] + ' ' + year;

	// document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
}

</script>
</head>
<body data-spy="scroll" data-target="menu" onload="startTime();bulan();">
	<!-- judul -->	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 30px;">RS. {{$hos->nama}}</div></center>
				<!-- JAM -->
				<label style="color: red;text-align: right;margin-left: 1000px;font-size: 30px;" id="txt"></label>
			</div>
		</div>
		<hr>
		<!-- tanggal -->
		<div id="tampilhari" style="color: grey;text-align: right;margin-left: 700px;font-size: 26px;"></div>
	</div>
	
	<!-- ANTRIAN DAN NAMA PASIEN -->
	<div class="container" style="margin-top: 30px; margin-bottom: 100px;border-radius: 30px; height: 300px">
		<div class="row" style="margin-top:0px;">
			<div class="col-sm-12" style="">
				<div class="row" style="">
					{!! $html !!}					
				</div>
			</div>
		</div>
	</div>

</body>
</html>