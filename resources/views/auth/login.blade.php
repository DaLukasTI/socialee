<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Socialee</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-color: #518989;">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline">
        <div class="card-header text-center" style="background-color: #70BEBE;">
            <div class="image">
                <img src="{{asset('img/logo.png')}}" alt="Logo">
            </div>
        </div>
        <div class="card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #70BEBE;">
                            <span class="fas fa-envelope" style="color: white;"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text" style="background-color: #70BEBE;">
                            <span class="fas fa-lock" style="color: white;"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-block" style="background-color:#70BEBE; color: white;">{{ __('Log In') }} </button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <p class="mb-1">
                <a href="forgot-password.html" style="color: #70BEBE;">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="/register" class="text-center" style="color: #70BEBE;">Register a new membership</a>
            </p>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->

<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
