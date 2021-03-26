<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dux supply | Dashboard </title>
    <link rel="icon" href="{{ URL::asset('/img/Logo.png') }}" type="image/x-icon" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini  dark-mode">

    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

                @if(auth()->user()->role_id === 1)
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="/admin" class="nav-link">Admin</a>
                    </li>


                @endif

            </ul>

            <!-- SEARCH FORM -->
            {{--         <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search"
                        aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
 --}}
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('/img/default.png')}}" class="user-image img-circle elevation-2"
                            alt="User Image">
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-gradient-danger">
                            <img src="{{asset('/img/default.png')}}" class="img-circle elevation-2" alt="User Image">

                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since {{substr(Auth::user()->created_at,0,-9)}}</small>
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a class="float-right btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-danger elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/img/Logo.png" alt="Dux Supply logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Dux Supply</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-boxes"></i>
                                <p>
                                    Dux Supply | stock
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">

                                    <a href="/stock"
                                        class="nav-link @if(Route::currentRouteName() === 'stock')active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Stock Overview</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/outsourced"
                                        class="nav-link @if(Route::currentRouteName() === 'outsourced')active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Outsourced</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/investors"
                                        class="nav-link @if(Route::currentRouteName() === 'investor')active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Investors</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/sold"

                                        class="nav-link @if(Route::currentRouteName() === 'sold') active @endif">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sold</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{now()->year}} <a href="https://dux.supply">dux.supply</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 0.0.1
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @livewireScripts
    <!-- jQuery -->
    <script src="{{asset('js/app.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    @if ($message = Session::get('success'))
    <script>
        Swal.fire({
        position: 'center',
        icon: 'success',
        title: '{{Session::get('success')}}',
        showConfirmButton: true,

      })
    </script>
    {{Session::forget('success')}}
    @endif
    @stack('scripts')
</body>

</html>
