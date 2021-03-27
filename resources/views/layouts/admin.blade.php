<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Socialee</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed " >
<div class="wrapper" >

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center" style="background-color: #70BEBE!important;">
        <img class="animation__wobble" src="/img/logo.png" alt="AdminLTELogo" width="80">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white">
        <!-- Left navbar links -->

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="float-right btn btn-block btn-info" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();" style="background-color: #70BEBE; border-color: white;">
                    {{ __('Logout') }}
                </a>




            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link text-center border-0" style="background-color: #70BEBE;">
            <img src="img/logo.png" alt="Logo" style="width:60px;">
        </a>

        <!-- Sidebar -->
        <div class="sidebar" style="background-color:#70BEBE;">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex border-0">
                <div class="image">
                    <img src="{{asset('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block" style="color: white;">{{Auth::user()->name}}</a>

                </div>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <!-- SidebarSearch Form -->


            <!-- Sidebar Menu -->
            <nav class="mt-2" >
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open" >

                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/home" class="nav-link" style="color: white;">
                                    <p >Dashboard</p>
                                    <i class="fas fa-columns nav-icon float-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/post" class="nav-link" style="color: white;">
                                    <p>New Post</p>
                                    <i class="fas fa-plus-circle nav-icon float-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/addpost" class="nav-link" style="color: white;">
                                    <p>Add Post</p>
                                    <i class="fas fa-plus-circle nav-icon float-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/timeline" class="nav-link" style="color: white;">
                                    <p>Timeline</p>
                                    <i class="fas fa-stream nav-icon float-right"></i>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/settings" class="nav-link" style="color: white;">
                                    <p>Settings</p>
                                    <i class="fas fa-cog nav-icon float-right"></i>
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
    <div class="content-wrapper"style="background: white">

        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->


    <footer class="main-footer">
        <strong>Copyright &copy; {{now()->year}} <a href="https://adminlte.io">Socialee</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.1.0
        </div>
    </footer>
</div>

@livewireScripts
<script src="{{ asset( mix('js/app.js')) }}" defer></script>
</body>
</html>
