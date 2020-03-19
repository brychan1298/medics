@extends('admin.master')
@section('konten')
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
<body data-spy="scroll" data-target="menu">
	
<!-- judul -->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 160px;">NEW HOSPITAL </div></center>
			</div>
		</div>
	</div>
	<!-- form -->
	<div class="container" style="margin-top: 30px;border:1px solid;border-radius: 30px;">
		<div class="row" style="margin-top:40px;">
			<!-- <div class="col-sm-12">
				<center> <div style="margin-bottom: 40px;font-size: 50px;margin-top: 40px;">	NEW DOCTORS </div></center>
			</div> -->
			<div class="col-sm-12">
				<div>
					<form method="post" action="/hospital/update">										
					{{ csrf_field() }}
					<input type="hidden" name="id" value="{{$ahospital->id}}">
					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">Provinsi<br><input type="text" name="provinsi" value="{{$ahospital->provinsi}}" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Hospital Name <br><input type="text" name="nama" value="{{$ahospital->nama}}" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">
								<input type="file" id="myFile" name="img" accept="image/*"><br><img src="../../gambar/addphoto.png" id="myImg" style="margin-right:20px;width: 240px;height: 240px;position: absolute;">
							</div>
						</div>
					</div>
					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-4">No Handphone<br><input type="text" name="nohp" value="{{$ahospital->nohp}}" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							<div class="col-sm-4">Kota<br><input type="text" name="kota" value="{{$ahospital->kota}}" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;">
							</div>
							<div class="col-sm-4" style=""></div>
						</div>
					</div>

					<div class="container mb-4">
						<div class="row">
							<div class="col-sm-8">Alamat<br><input type="text" name="alamat" value="{{$ahospital->alamat}}" style="width: 100%; height: 45px; border-radius: 15px; border:1px solid #707070; padding-left:10px;"></div>
							
						</div>
					</div>

					<div class="container mb-5">
						<div class="row">
							<div class="col-sm-4"><button style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 18px 50px;">SIMPAN</button></div>
							<div class="col-sm-4"></div>
							<div class="col-sm-4"></div>
						</div>
					</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#myImg').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#myFile").change(function(){
    readURL(this);
});
</script>
@endsection