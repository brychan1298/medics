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
	<a href="">b</a>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 30px;">RS. MENTARI PAGI</div></center>
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
					<div class="col-sm-4">
						<!-- nomor antri -->
						<label style="font-size: 14px; margin-left: 3px">NUMBER</label>
						<div style="border: 1px solid grey;width: 60px; height: 60px">
							<center>
								<label style="font-size: 35px;color: black;">10</label>
							</center>
						</div>
						<div style="font-size: 25px;margin-left: 70px;margin-top:-50px;">Johan</div>
					<div>
						<!-- INI NAMA DOCTER KONSULNYA -->
						<div style="border:1px solid #707070;border-radius: 15px 15px 0px 0px;padding: 15px; margin-top: 35px;background-color:#1492E6;border:1px solid #1492E6;	 ">
							<img src="img/doctor1.jpg" style="border-radius: 50px;width: 60px; height: 60px;">
							<div style="color: white;font-size: 26px;position:absolute;margin-left: 80px; margin-top: -50px;font-family:  ">Dr Johan</div>
						</div>
						<!-- INI DATA PASIEN ANTRIAN -->
						<tbody style="border-radius:0px 0px 15px 15px;">
							<table class="table table-stripped" style="margin-top:-0px;border:1px solid grey;color: black;font-size: 18px;">
								<tr>
									<th>
										No
									</th>
									<th>	
										Nama
									</th>
									<th>
										Time
									</th>
								</tr>

								<!-- COBA ORANG -->
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
							</table>
						</tbody>		
					</div>
				</div>

				<div class="col-sm-4">
						<!-- nomor antri -->
						<label style="font-size: 14px; margin-left: 3px">NUMBER</label>
						<div style="border: 1px solid grey;width: 60px; height: 60px">
							<center>
								<label style="font-size: 35px;color: black;">10</label>
							</center>
						</div>
						<div style="font-size: 25px;margin-left: 70px;margin-top:-50px;">Johan</div>
						<div>
						<!-- INI NAMA DOCTER KONSULNYA -->
						<div style="border:1px solid #707070;border-radius: 15px 15px 0px 0px;padding: 15px; margin-top: 35px;background-color:#1492E6;border:1px solid #1492E6;	 ">
							<img src="img/doctor1.jpg" style="border-radius: 50px;width: 60px; height: 60px;">
							<div style="color: white;font-size: 26px;position:absolute;margin-left: 80px; margin-top: -50px;font-family:  ">Dr Johan</div>
						</div>
						<!-- INI DATA PASIEN ANTRIAN -->
						<tbody style="border-radius:0px 0px 15px 15px;">
							<table class="table table-stripped" style="margin-top:-0px;border:1px solid grey;color: black;font-size: 18px;">
								<tr>
									<th>
										No
									</th>
									<th>	
										Nama
									</th>
									<th>
										Time
									</th>
								</tr>

								<!-- COBA ORANG -->
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
							</table>
						</tbody>		
					</div>
				</div>

				<div class="col-sm-4">
						<!-- nomor antri -->
						<label style="font-size: 14px; margin-left: 3px">NUMBER</label>
						<div style="border: 1px solid grey;width: 60px; height: 60px">
							<center>
								<label style="font-size: 35px;color: black;">10</label>
							</center>
						</div>
						<div style="font-size: 25px;margin-left: 70px;margin-top:-50px;">Johan</div>
					<div>
						<!-- INI NAMA DOCTER KONSULNYA -->
						<div style="border:1px solid #707070;border-radius: 15px 15px 0px 0px;padding: 15px; margin-top: 35px;background-color:#1492E6;border:1px solid #1492E6;	 ">
							<img src="img/doctor1.jpg" style="border-radius: 50px;width: 60px; height: 60px;">
							<div style="color: white;font-size: 26px;position:absolute;margin-left: 80px; margin-top: -50px;font-family:  ">Dr Johan</div>
						</div>
						<!-- INI DATA PASIEN ANTRIAN -->
						<tbody style="border-radius:0px 0px 15px 15px;">
							<table class="table table-stripped" style="margin-top:-0px;border:1px solid grey;color: black;font-size: 18px;">
								<tr>
									<th>
										No
									</th>
									<th>	
										Nama
									</th>
									<th>
										Time
									</th>
								</tr>

								<!-- COBA ORANG -->
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
								<tr style="border-radius: 0px 0px 15px 15px;">
									<td>10</td>
									<td>Johan</td>
									<td>10.00</td>
								</tr>
							</table>
						</tbody>		
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>

</body>
</html>