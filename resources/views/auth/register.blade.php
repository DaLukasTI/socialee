<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Socialee | Registration Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="hold-transition register-page" style="background-color: #518989;">
<div class="register-box">
    <div class="card card-outline">
        <div class="card-header text-center" style="background-color: #70BEBE;">
            <div class="image">
                <img src="{{asset('img/logo.png')}}" alt="Logo">
            </div>
        </div>
        <div class="card-body">
            <p class="login-box-msg" style="color: white;">Register a new membership</p>

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required
                           autocomplete="name" placeholder="{{ __('Name') }}" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #70BEBE;">
                            <span class="fas fa-user" style="color: white;"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #70BEBE;">
                            <span class="fas fa-envelope" style="color: white;"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                           placeholder="{{ __('Password') }}" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #70BEBE;">
                            <span class="fas fa-lock" style="color: white;"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input id="password-confirm" type="password" class="form-control" placeholder="{{ __('Confirm Password') }}" name="password_confirmation"
                           required autocomplete="new-password">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #70BEBE;">
                            <span class="fas fa-lock" style="color: white;"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col">
                        <button type="submit" class="btn btn-block" style="background-color: #70BEBE; color: white;">{{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <a href="/login" class="text-center" style="color: #70BEBE;">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script src="{{asset('js/app.js')}}"></script>
</body>
</html>

