<!DOCTYPE html>
<html>
<head>
    <title>login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .login{
            font-family: roboto;margin-left: 230px; margin-top: 120px;
        }
    @media screen and (max-width: 1080px){
            #shop1{
                margin-top: 170px;
            }
            .bbb{
                width: 100px;
                height: 100px;
                margin-top: 20px;
            }
            .img1{
                width: 100px;
                text-align: center;
                margin-bottom: -110px;
            }
            .resG1{
                margin-top: 30px;
            }
            .is{
                padding-right: 100px;
            }
            .login{
                margin-left: 0px;
                text-align: center;
                margin-top: 20px;
            }
        }
    </style>
</head>
<body class="page-top">
{{ Auth::user() }}
<div class="container">
     <h1><a href="/"><img src="../../../img/apasi.png" style="width: 120px;"></a></h1>
    <div class="row justify-content-center">
        <div class="col-6 d-lg-block d-none">
            <img src="gambar/undraw_doctor_kw5l.png" class="" style="margin-left:0px;width: 600px;height: 450px;margin-top: 80px;margin-right: -50px;">
            </div>   
        <div class="col-sm-6 mt-sm-5 mt-0 col-12">            
                <!--<div class="card-header">{{ __('Login') }}</div>-->
                <h2 style="" class="login">LOGIN</h2>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            <br>
                            <b>Don't have an account?</b> <i><a href="/register">Register</a></i>
                                <!--@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif-->
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
    </div>
</div>
</body>
</html>
