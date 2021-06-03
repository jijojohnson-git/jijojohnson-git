<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    {{-- <link rel="icon" href="{{ URL::asset('/images/logo.png') }}" type="image/x-icon"/> --}}
    <link rel="icon" href="{{ URL::asset('/images/favicon.png') }}" type="image/x-icon"/>
    <title>Pepper BItes | Admin</title>
    <link href="{{asset('css/app.css')}}" crossorigin="anonymous" />
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    <link href="{{asset('css/admin-styles.css')}}" rel="stylesheet" />
    <!-- <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    @yield('styles')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    @yield('script-top')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    @auth
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/home') }}"><img src="{{asset('images/logo-white.png')}}" style="height: 40px;" alt="brosgroups-logo"></a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <!-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div> -->
        </form>
        <!-- Navbar-->

        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" style="position:relative; padding-left:50px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <!-- <img src="images/avatar/{{Auth::user()->avatar}}" alt="" style="position:absolute; width:32px; height:32px; top:4px; left:10px; border-radius:50%;"> -->
                    <img src="{{asset('images/favicon.png')}}" alt="" style="position:absolute; width:32px; height:32px; top:4px; left:10px; border-radius:50%;">
                    {{ ucfirst(Auth::user()->name) }}
                    <!-- <i class="fas fa-user fa-fw"></i> -->
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <!-- <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>-->
                    <!-- <div class="dropdown-divider"></div>  -->
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">

            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">ADMIN PANEL</div>
                        <a class="nav-link" href="{{url('/home')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="{{url('/admin/categories')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Categories
                        </a>
                        <a class="nav-link" href="{{url('/admin/items')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Items
                        </a>
                        <a class="nav-link" href="{{url('/admin/orders')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Orders
                        </a>
                        <a class="nav-link" href="{{url('/admin/summary')}}">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Summary
                        </a>

                        {{-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{url('/admin/nursing')}}">Nursing</a>
                                <a class="nav-link" href="{{url('/admin/placement')}}">Placement</a>
                                <a class="nav-link" href="{{url('/admin/customer')}}">Customer</a>
                            </nav>
                        </div> --}}
                        {{-- <a class="nav-link" href="">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Testimonials
                        </a> --}}
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
            @endauth
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </main>
            @auth
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">&copy;2021 <a href="http://pepperbitesmalta.com" class="text-muted" style="text-decoration: none;">pepperbitesmalta.com </a>| Powered by <a href="https://crioweb.in/" target="_blank" class="text-custom" style="color: #70b435 !important;">crioweb.</a></div>
                        <div>
                            <!-- <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a> -->
                        </div>
                    </div>
                </div>
            </footer>
            @endauth
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin-scripts.js') }}"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> --}}
    {{-- <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> --}}
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
    <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script> -->
    <!-- <script src="assets/demo/datatables-demo.js"></script> -->

    @yield('scripts')
</body>

</html>
