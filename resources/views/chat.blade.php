@extends('master')
@section('konten')
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
	<style type="text/css">
		.gam{
			border-radius: 50%;
		}
		.scrollbar {
		margin-left: 30px;
		float: left;
		height: 300px;
		width: 65px;
		background: #fff;
		overflow-y: scroll;
		margin-bottom: 25px;
		}
		.force-overflow {
		min-height: 450px;
		}

		.scrollbar-primary::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-primary::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #4285F4; }

		.scrollbar-primary {
		scrollbar-color: #4285F4 #F5F5F5;
		}

		.scrollbar-danger::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #F5F5F5;
		border-radius: 10px; }

		.scrollbar-danger::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-danger::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #ff3547; }

		.scrollbar-danger {
		scrollbar-color: #ff3547 #F5F5F5;
		}

		.scrollbar-warning::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #F5F5F5;
		border-radius: 10px; }

		.scrollbar-warning::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-warning::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #FF8800; }

		.scrollbar-warning {
		scrollbar-color: #FF8800 #F5F5F5;
		}

		.scrollbar-success::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #F5F5F5;
		border-radius: 10px; }

		.scrollbar-success::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-success::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #00C851; }

		.scrollbar-success {
		scrollbar-color: #00C851 #F5F5F5;
		}

		.scrollbar-info::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #F5F5F5;
		border-radius: 10px; }

		.scrollbar-info::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-info::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #33b5e5; }

		.scrollbar-info {
		scrollbar-color: #33b5e5 #F5F5F5;
		}

		.scrollbar-default::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #F5F5F5;
		border-radius: 10px; }

		.scrollbar-default::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-default::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #2BBBAD; }

		.scrollbar-default {
		scrollbar-color: #2BBBAD #F5F5F5;
		}

		.scrollbar-secondary::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #F5F5F5;
		border-radius: 10px; }

		.scrollbar-secondary::-webkit-scrollbar {
		width: 12px;
		background-color: #F5F5F5; }

		.scrollbar-secondary::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
		background-color: #aa66cc; }

		.scrollbar-secondary {
		scrollbar-color: #aa66cc #F5F5F5;
		}		
	</style>
</head>
<body>
	<div style="margin-top: 150px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<center><h2 class="mb-4">THE OTHER DOCTORS</h2></center>
					@foreach($doctor as $d)
						<div class="col-sm-12 mt-3">
							<div style="border: 1px solid grey;border-radius: 15px; padding: 10px;">
								<div style="margin: 10px;">	
									<div class="row">
										<span class="col-3"><img src="../../gambar/{{$d->gambar}}" class ="w-100 gam"></span>
											<span class="col-6">										
												<div style="" class="nam nam2">
												<div style="color: blue;font-size:16px;font-weight:bold;">{{$d->nama}}</div>
												<div style="color: grey;">{{$d->spesialisasi}}</div>
												<div style="color: blue;">FREE</div>
												</div>						
											</span>	
											<span class="col-3">
												<div>
													<a href="/dashboard/{{$d->id}}/{{Auth::user()->id}}" class="btn btn-primary" style="color: white; font-size: 12px;border: 0px; font-weight: bold;padding: 5px 25px 5px 25px;margin-top: 35px;margin-bottom: 10px;">							
																CHAT
													</a>
												</div>		
											</span>
										</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>

				<div class="col-sm-6">
					<div class="ml-5">						
						<section class="row posts">
							<div class="scrollbar scrollbar-primary col-md-12 col-md-offset-3" style="width: 500px;height: 400px;overflow-y: scroll; border:1px solid lightgrey;padding: 15px;padding-left: 0px;border-radius: 15px;">				
								@foreach($posts as $s)
								@if($s->froms == 'dokter')
								<div class="force-overflow">
									<article class="post panel panel-success" data-postid="{{$s->id}}">
										<div class="info panel-heading" style="padding-top: 10px;">
											<label style="font-size: 16px;margin-left: 30px;font-weight: semibold;">{{$s->tbdokter->nama}} - {{$s->date}}</label> 
											<!-- <label style="float: right;font-size: 15px;margin-right: 15px;">{{$s->date}}</label> -->
										</div>
										<div class="panel-body form-control" style="margin-left: 30px; margin-right:  30px; display: inline-block;margin-top: 5px;width: auto;">
											{{$s->message}}
										</div>
									</article>
								@else
								<div class="force-overflow">
									<article class="post panel panel-success" style="text-align: right;" data-postid="{{$s->id}}">
										<div class="info panel-heading" style="padding-top: 10px;">
											<label style="font-size: 16px;margin-left: 30px;font-weight: semibold;">{{$s->tbuser->name}} - {{$s->date}}</label> 
											<!-- <label style="float: right;font-size: 15px;margin-right: 15px;">{{$s->date}}</label> -->
										</div>
										<div class="panel-body form-control" style="margin-left: 30px; margin-top: 0px;text-align: right;display: inline-block;width: auto;">
											{{$s->message}}
										</div>
									</article>
								@endif
								@endforeach	
								</div>
							</div>
						</section>	
								
						<section class="" style="">
								<form action="{{route('post.create')}}" method="post" class="row new-posts ml-3" style="margin-top: 0px;margin-top: -100px;">
									<div class="col-10">
										<div class="ml-3 form-group">
											<input class="form-control" name="message" id="new-post" placeholder="Enter your message">							
											</input>
										</div>
									</div>
									<div class="col-2" style="margin-left: -10px;">
										<button type="submit" class="btn btn-primary">Send</button>
										<input type="hidden" value="{{ Session::token() }}" name="_token">
										<input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
										<input type="hidden" value="{{ $iddokter }}" name="id_dokter">
									</div>
								</form>	
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>	


	<script type="text/javascript">
		var token = '{{ Session::token() }}';
	</script>
</body>
</html>
@endsection