<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Point of Sales ‒ CV. Adi Mitra Perdana') }}</title> --}}

    {{-- Fonts --}}
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    {{-- Styles --}}
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    {{-- Favicon --}}
    <link href="{{ asset('img/AMP-Favicon.png') }}" rel="icon" type="image/png">

    {{-- Title --}}
    <title>@yield('title')</title>

    @stack('css')
</head>
<body id="page-top">

{{-- Page Wrapper --}}
<div id="wrapper">
    {{-- Sidebar --}}
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        {{-- Sidebar - Brand --}}
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src="{{ asset('img/AMP-white.png') }}" alt="AMP-white-logo" width="50">
            </div>
            {{-- <div class="sidebar-brand-text mx-3">CV. Adi Mitra Perdana</div> --}}
        </a>

        {{-- Divider --}}
        <hr class="sidebar-divider my-0">

        {{-- Nav Item - Dashboard --}}
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        {{-- Divider --}}
        <hr class="sidebar-divider">

        {{-- Heading --}}
        <div class="sidebar-heading">
            {{ __('Sales Management') }}
        </div>
    
        {{-- Nav Item - Product List --}}
        <li class="nav-item {{ Nav::isRoute('new_transaction') }}">
            <a class="nav-link" href="{{ route('transaction.new') }}">
                <i class="fas fa-fw fa-file-contract"></i>
                <span>{{ __('New Transaction') }}</span>
            </a>
        </li>

        {{-- Nav Item - New Product --}}
        <li class="nav-item {{ Nav::isRoute('transaction_history') }}">
            <a class="nav-link" href="{{ route('transaction.history') }}">
                <i class="fas fa-fw fa-handshake"></i>
                <span>{{ __('Transaction History') }}</span>
            </a>
        </li>

        {{-- Divider --}}
        <hr class="sidebar-divider">

        {{-- Heading --}}
        <div class="sidebar-heading">
            {{ __('General') }}
        </div>
        
        {{-- Nav Item - Product List --}}
        <li class="nav-item {{ Nav::isRoute('product_list') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-boxes"></i>
                <span>{{ __('Product list') }}</span>
            </a>

        {{-- Nav Item - Customer & Supplier --}}
        <li class="nav-item {{ Nav::isRoute('partner') }}">
            <a class="nav-link" href="{{ route('partner') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>{{ __('Customer & Supplier') }}</span>
            </a>
        </li>

        {{-- Nav Item - Category --}}
        <li class="nav-item {{ Nav::isRoute('category') }}">
            <a class="nav-link" href="{{ route('about') }}">
                <i class="fas fa-fw fa-file"></i>
                <span>{{ __('Product Category') }}</span>
            </a>
        </li>

        {{-- Nav Item - Employment --}}
        <li class="nav-item {{ Nav::isRoute('employment-user') }}">
            <a class="nav-link" href="{{ route('employment-user') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Employment') }}</span>
            </a>
        </li>

        {{-- Nav Item - Attendance --}}
        <li class="nav-item {{ Nav::isRoute('attendance.user') }}">
            <a class="nav-link" href="{{ route('attendance.user') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Attendance') }}</span>
            </a>
        </li>


        {{-- Divider --}}
        <hr class="sidebar-divider d-none d-md-block">

        {{-- Sidebar Toggler (Sidebar) --}}
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    {{-- End of Sidebar --}}

    {{-- Content Wrapper --}}
    <div id="content-wrapper" class="d-flex flex-column">

        {{-- Main Content --}}
        <div id="content">

            {{-- Topbar --}}
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                {{-- Sidebar Toggle (Topbar) --}}
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                {{-- Page Heading --}}
                <h1 class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">@yield('heading')</h1>

                {{-- Topbar Search --}}
                {{-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form> --}}

                {{-- Topbar Navbar --}}
                <ul class="navbar-nav ml-auto">

                    {{-- Nav Item - User Information --}}
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <figure class="img-profile rounded-circle avatar font-weight-bold" data-initial="{{ Auth::user()->name[0] }}"></figure>
                        </a>
                        {{-- Dropdown - User Information --}}
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Profile') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Settings') }}
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Activity Log') }}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                {{ __('Logout') }}
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            {{-- End of Topbar --}}

            {{-- Begin Page Content --}}
            <div class="container-fluid">
                @stack('notif')
                @yield('main-content')

            </div>
            {{-- /.container-fluid --}}

        </div>
        {{-- End of Main Content --}}

        {{-- Footer --}}
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; CV. Adi Mitra Perdana {{ date('Y') }}</span>
                </div>
            </div>
        </footer>
        {{-- End of Footer --}}

    </div>
    {{-- End of Content Wrapper --}}

</div>

{{-- Scroll to Top Button--}}
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

{{-- Logout Modal--}}
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('Ready to Leave?') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-link" type="button" data-dismiss="modal">{{ __('Cancel') }}</button>
                <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Scripts --}}
{{-- <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/sidewrapper.override.js') }}"></script>
@stack('js')
</body>
</html>
