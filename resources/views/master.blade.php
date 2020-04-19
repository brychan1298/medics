<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	
  	<script src="{{ asset('js/app.js') }}" defer></script>
  	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<title></title>
	<style type="text/css">
		.bar1{
			padding-right: 15px;
		}
		body{
			overflow-x: hidden;
			width: 100%;
		}
	</style>	
</head>
<body data-spy="scroll" data-target="menu">
	<nav style="background-color: rgb(67,133,255);" class="navbar navbar-dark navbar-expand-md fixed-top">
		<h1><img src="../../img/apasi.png" style="width: 120px;"></h1>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item bar1">
					<a href="/" class="nav-link text-white">Home</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/aboutus" class="nav-link text-white">About Us</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/shop" class="nav-link text-white">Shop</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/doctor" class="nav-link text-white">Doctors</a>					
				</li>
				<li class="nav-item bar1">
					<a href="/hospital" class="nav-link text-white">Hospital</a>					
				</li>
						@guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                	<a class="dropdown-item" href="">
                                		Profile
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                                </div>
                            </li>
                        @endguest
				<li class="nav-item bar1">
					@guest
					<a href="/login" class="nav-link text-white">
						<img src="../../gambar/ADDT.png" style="width: 30px;">
					</a>
					@else
					<a href="/cart/{{Auth::user()->id}}" class="nav-link text-white">
						<img src="../../gambar/ADDT.png" style="width: 30px;">
					</a>
					@endguest
				</li>		
			</ul>
		</div>
	</nav>

	<div>
		@yield('konten')
	</div>	

	<div class="row d-none d-lg-block" style="background-color: rgb(67,133,255); padding-top: 20px;padding-bottom: 20px;margin-top: 250px;">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<img class="nn1" src="../../img/asuransi.jpg" style="width: 100px;margin-left: 150px;">
				</div>
				<div class="col-sm-2">
					<div class="jj1">Extra Links</div>
					<div class="jj2">About Us</div>
					<div class="jj3">Doctors</div>
					<div class="jj4">Shop</div>
				</div>
				<div class="col-sm-2">
					<div class="jj5">Contact us</div>
					<div class="jj6">(628)-502-111</div>
					<div class="jj7">brychan@gmail.com</div>
				</div>
				<div class="col-sm-4">
					<div class="jj8">Social Media</div>
					
				</div>
			</div>
		</div>				
	</div>
</body>
</html>