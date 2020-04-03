@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>	
	<style type="text/css">
		.bar1{
			padding-right: 10px;
		}
	</style>
</head>
<body>
	<div style="font-size: 40px;margin-top: 170px;">
		<center>PROOF OF PAYMENT</center>
	</div>

	<div class="mt-5" style="margin-bottom: -100px;">
		<center>
			<form action="/uploadProof/{{$id}}" method="GET">
				<div class="col-sm-4">
						<input type="file" id="myFile" name="img" accept="image/*"><br>
				</div>
				<div style="border:1px solid grey;padding: 20px 0px 20px 0px;width: 300px;border-radius: 15px;">
					
					<div style="border:1px solid grey;width: 250px;border-radius: 5px;">
						<img src="../../gambar/bukti.png" id="myImg" style="width: 200px;">
					</div>
					<div>
						<button class="btn" type="submit" style="background-color:rgb(67,133,255);width: 250px;margin-top: 17px;padding: 5px 0px;color: white;">Send</button>
					</div>
				</div>
			</form>
		</center>
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