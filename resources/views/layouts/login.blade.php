<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dux.supply Admin Login</title>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body class="hold-transition login-page">
@yield('content')


<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
