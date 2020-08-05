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
				<center> <div style="margin-bottom: 0px;font-size: 50px;margin-top: 160px;">OUR PATIENT</div></center>
			</div>
		</div>
	</div>
<!-- SEARCH -->
	<div class="container mb-5 mt-4">	
		<div class="row">
			<div class="col-sm-12">
				<center>
					<input type="text" name="" placeholder="Search" class="" style="width: 75%;border-radius: 15px;padding: 10px;border: 1px solid lightgrey">
				</center>
			</div>					
		</div>
	</div>
	<!-- form -->	
	<div class="container" class="" style="margin-top: 30px;border:1px solid lightgrey;border-radius: 30px;">
		<div class="row mb-3 mt-3" >
			<div class="col-12">
				
				<table class="">
					@foreach($data as $d)
					<tr class="" style="">
						<td class="pl-4 pt-2 pb-2">
							<img src="gambar/images.png" class="img-fluid" style="width:60px;height: 60px;border-radius: 50px;margin:10px; margin-left: 20px;padding:5px;border:2px dashed #007bff"></td>
						<td class="pt-2 pb-2" style="font-weight: ;font-size: 18px; padding-left: 70px;">{{$d->nama}}</td>
						@if($d->date < $date && $d->status == 'BELUM')
						<td class="pt-2 pb-2" style="font-size: 16px; padding-left: 90px;color: red;"><b>LATE</b></td>
						@else
						@if($d->status == 'BELUM')
						<td class="pt-2 pb-2" style="font-size: 16px; padding-left: 90px;color: yellow;"><b>ON DOING</b></td>
						@else
						<td class="pt-2 pb-2" style="font-size: 16px; padding-left: 90px;color: green;"><b>DONE</b></td>
						@endif
						@endif						
						<td class="pt-2 pb-2" style="font-size: 18px; padding-left: 90px;">{{$d->date}} {{$d->appointment}}</td>
						<td class="pt-2 pb-2" style="font-size: 18px; padding-left: 90px;padding-right:30px;">{{$d->nohp}}</td>
						<td>
							<button class="pt-2 pb-2 btn btn-primary ml-5 pl-5 pr-5" type="button" data-toggle="modal" data-target="#{{$d->nama}}">DETAIL</button>
						</td>

						<!-- Modal Box -->
							<div class="modal fade" id="{{$d->nama}}">
					    		<div class="modal-dialog">					    					      
					      			<div class="modal-content" style="margin-top: 150px;">
					      				<div class="modal-header">					      		
					      					<h1 style="padding-left:115px;padding-top:10px;">PATIENT DATA</h1>
								          <button type="button" class="close" data-dismiss="modal">&times;</button>
								        </div>
					        			<div class="modal-body" style="">
					        				<div class="container">
					        					<div class="row">
					        						<div class="col-sm-6 mt-2">
					        							<b>Nama</b> <br> {{$d->nama}}
					        						</div>
					        						<div class="col-sm-6 mt-2">
					        							<b>No Hp</b> <br> {{$d->nohp}}
					        						</div>
					        						<div class="col-sm-6 mt-4">
					        							<b>Date</b> <br> {{$d->date}}
					        						</div>
					        						<div class="col-sm-6 mt-4">
					        							<b>Time</b> <br> {{$d->appointment}}
					        						</div>
					        						<div class="col-sm-6 mt-4">
					        							<b>Disease</b> <br> {{$d->disease}}
					        						</div>
					        						<div class="col-sm-6 mt-4">
					        							<b>Note</b> <br> {{$d->note}}
					        						</div>
					        						<div class="col-sm-6 mt-4">
					        							<b>Status</b> <br> 
					        							@if($d->date < $date && $d->status == 'BELUM')
														<span style="font-size: 18px;color: red;"><b>LATE</b></span>
														@else
															@if($d->status == 'BELUM')
														<div style="font-size: 18px;color: yellow;"><b>ON DOING</b></div>
															@else
														<div style="font-size: 18px;color: green;"><b>DONE</b></div>
															@endif
														@endif	
					        						</div>
					        					</div>
					        				</div>
					        			</div>
					      			</div>					      
					    		</div>
					  		</div>
					</tr>
					@endforeach
				</table>		
			</div>			
		</div>
	</div>	

				<div class="mt-5 pagination justify-content-center" style="margin-bottom: -200px;">
					{{$data->links()}}
				</div>		
<!-- 
	<div class="container" style="margin-top: 30px;border:1px solid; margin-bottom: 100px;border-radius: 30px;">
		<div class="row mb-3 mt-3" >
			<div class="col-12">
				<table>
					<tr class="mt-5">
						<td class="pl-4"><img src="gambar/images.png" class="img-fluid" style="width:60px;height: 60px;border-radius: 50px;margin:0px;"></td>
						<td style="font-weight: bold;font-size: 18px; padding-left: 90px;">Nana</td>
						<td style="font-size: 18px; padding-left: 90px;">done</td>
						<td style="font-size: 18px; padding-left: 90px;">15-06-2020 12:00</td>
						<td style="font-size: 18px; padding-left: 90px;">082152755499</td>
						<td><button style="background-color: #4385FF; color: white;border:0px;border-radius: 20px;padding: 14px 40px; margin-left: 90px;">SIMPAN</button></td>
					</tr>
				</table>
			</div>
		</div>
	</div> -->
</body>
</html>
<script type="text/javascript">
	
</script>
@endsection