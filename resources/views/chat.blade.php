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
	</style>
</head>
<body>
	<div style="margin-top: 150px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<center><h3>The Other Doctors</h3></center>
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
							<div class="col-md-12 col-md-offset-3" style="width: 50%;height: 250px;overflow-y: scroll;">				
								@foreach($posts as $s)
									<article class="post panel panel-success" data-postid="{{$s->id}}">
										<div class="info panel-heading">
											{{$s->tbuser->name}} {{$s->date}}
										</div>
										<div class="panel-body" style="margin-left: 20px">
											{{$s->message}}
										</div>
									</article>
								@endforeach
							</div>
						</section>	

						<section class="row new-posts">
							<div class="col-md-12 col-md-offset-3">				
								<header><h3>What do you have to say?</h3></header>
								<form action="{{route('post.create')}}" method="post">
									<div class="form-group">
										<input class="form-control" name="message" id="new-post" placeholder="Enter your message">							
										</input>
									</div>
									<button type="submit" class="btn btn-primary">Send Message</button>
									<input type="hidden" value="{{ Session::token() }}" name="_token">
									<input type="hidden" value="{{ Auth::user()->id }}" name="id_user">
									<input type="hidden" value="{{ $iddokter }}" name="id_dokter">
								</form>
							</div>
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