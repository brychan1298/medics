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
	<div style="font-size: 50px;margin-top: 170px;">
		<center>PROOF OF PAYMENT</center>
	</div>

	<div class="mt-5" style="margin-bottom: -100px;">
		<center>
			<form action="/uploadProof/{{$id}}" method="GET">
				<div style="border:1px solid lightgrey;padding: 40px 20px 40px 20px;width: 400px;border-radius: 15px;">
						<input type="file" id="myFile" name="img" class="text-center" accept="image/*"><br>
					
					<div class="w-100" style="padding: 15px;">
						<img src="../../gambar/bukti.png" id="myImg" class="w-100">
					</div>
					<div>
						<button class="btn btn-primary form-control" type="submit">Send</button>
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