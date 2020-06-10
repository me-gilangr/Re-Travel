<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Padma Tours Backend</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('assets/global/plugins/pace/pace.min.js') }}" type="text/javascript"></script>
    <!-- Fonts -->
    <link href="{{ asset('css/opensans.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Styles -->
    <link href="{{ asset('assets/global/plugins/pace/themes/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/css/components-rounded.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/global/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/layouts/layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/layouts/layout/css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />

    @yield('css')
    {{-- <link href="{{ asset('assets/global/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    {{-- <link href="{{ asset('assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" /> --}}
    
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div id="app">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('logo-backend.png') }}" alt="Logo Aplikasi" class="logo-default" style="height: 27px; margin-top: 10px" />
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                        <span></span>
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                    <span></span>
                </a>
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <li class="dropdown dropdown-extended dropdown-inbox">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <i class="icon-bell"></i>
                                <span class="badge badge-danger">
                                <div id="notif">0</div>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="external">
                                    <h3>
                                    <span class="bold" id="count">0</span> pemberitahuan baru 
                                    </h3>
                                </li>
                                {{-- <li>
                                    <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                        @forelse (auth()->user()->notifications as $item)
                                          @foreach ($item->data as $item2)
                                          @php 
                                            $datetime1 = new DateTime();
                                            $datetime2 = new DateTime($item->created_at);

                                            $interval = $datetime1->diff($datetime2);

                                            $tahun = $interval->format('%y');
                                            $bulan = $interval->format('%m');
                                            $hari = $interval->format('%a');
                                            $jam = $interval->format('%h');
                                            $menit = $interval->format('%i');
                                            $detik = $interval->format('%s');

                                            // echo "<script>console.log('$item->notifiable_id : $tahun Tahun $bulan Bulan $hari Hari $jam Jam $menit Menit $detik Detik')</script>";
                                          
                                            if ($tahun != '0') {
                                              $waktu = $tahun . ' Tahun Lalu';
                                            } else if ($bulan != '0') {
                                              $waktu = $bulan . ' Bulan Lalu';
                                            } else if ($hari != '0') {
                                              $waktu = $hari . ' Hari Lalu';
                                            } else if ($jam != '0') {
                                              $waktu = $jam . ' Jam Lalu';
                                            } else if ($menit != '0') {
                                              $waktu = $menit . ' Menit Lalu';
                                            } else if ($detik != '0') {
                                              $waktu = 'Baru Saja';
                                            } else {
                                              $waktu = 'Baru Saja';
                                            }
                                          @endphp
                                          <li>
                                              <a href="{{ url('backend') }}/{{ $item2['url'] }}">
                                                  <span class="photo"><img src="{{ asset('assets/layouts/layout/img/avatar.png') }}" class="img-circle" alt=""> </span>
                                                  <span class="subject">
                                                      <span class="from">{{ $item2['first_name'] }}</span>
                                                      <span class="time">{{ $waktu }}</span>
                                                  </span>
                                                  <span class="message">{{ $item2['message'] }}</span>
                                              </a>
                                          </li>
                                          @endforeach
                                        @empty
                                        <li>
                                            <a href="#">
                                                <span class="message">Belum Ada Notifikasi Pemberi Tahuan</span>
                                            </a>
                                        </li>
                                        @endforelse
                                    </ul>
                                </li> --}}
                                <li class="external">
                                    <h3 class="text-center">
                                        <a href="{{ url('backend/notifications') }}">
                                        <u>Lihat Semua Pemberitahuan</u>
                                        </a>
                                    </h3>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <img alt="" class="img-circle" src="{{ asset('assets/layouts/layout/img/avatar.png') }}" />
                                <span class="username username-hide-on-mobile"> {{ Auth::user()->first_name }} </span>
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="{{ url('backend/users/changepassword') }}">
                                        <i class="fa fa-key"></i> Ganti Kata Sandi
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out"></i> Keluar
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 2px;">
                        <li class="sidebar-toggler-wrapper hide">
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                        </li>
                        <li class="heading">
                            <h3 class="uppercase">Main Menu</h3>
                        </li>
                        <li class="nav-item start {{ Request::is('backend') ? 'active' : '' }}">
                            <a href="{{ url('/backend') }}" class="nav-link nav-toggle">
                                <i class="icon-bar-chart"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
                        </li>
                        <li class="nav-item start {{ Request::is(['backend/currency*']) ? 'active' : '' }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-edit"></i>
                                <span class="title">Master Data</span>
                                <span class="selected"></span>
                                <span class="arrow {{ Request::is(['backend/currency*']) ? 'open' : '' }}"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item {{ Request::is('backend/currency*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/currency') }}" class="nav-link ">
                                        <span class="title">Currency / Mata Uang</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start {{ Request::is(['backend/packages*', 'backend/customers*', 'backend/hotoffers*', 'backend/payments*', 'backend/preorder*']) ? 'active' : '' }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-notebook"></i>
                                <span class="title">Manajemen</span>
                                <span class="selected"></span>
                                <span class="arrow {{ Request::is(['backend/packages*', 'backend/customers*', 'backend/hotoffers*', 'backend/payments*', 'backend/preorder*', 'backend/bookings*']) ? 'open' : '' }}"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item {{ Request::is('backend/packages*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/packages') }}" class="nav-link ">
                                        <span class="title">Paket</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('backend/hotoffers*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/hotoffers') }}" class="nav-link ">
                                        <span class="title">Promo</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('backend/customers*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/customers') }}" class="nav-link ">
                                        <span class="title">Customer</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('backend/bookings*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/booking') }}" class="nav-link ">
                                        <span class="title">Pemesanan</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('backend/payments*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/payments') }}" class="nav-link ">
                                        <span class="title">Pembayaran</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('backend/preorder*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/preorders') }}" class="nav-link ">
                                        <span class="title">Custom Tour</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item start {{ Request::is(['backend/users*', 'backend/permissions*']) ? 'active' : '' }}">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-settings"></i>
                                <span class="title">Pengaturan</span>
                                <span class="selected"></span>
                                <span class="arrow {{ Request::is(['backend/users*', 'backend/permissions*']) ? 'open' : '' }}"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item {{ Request::is('backend/users*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/users') }}" class="nav-link ">
                                        <span class="title">Pengguna</span>
                                    </a>
                                </li>
                                <li class="nav-item {{ Request::is('backend/permissions*') ? 'active' : '' }}">
                                    <a href="{{ url('backend/permissions') }}" class="nav-link ">
                                        <span class="title">Hak Akses</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container-fluid" style="padding-left: 0px !important; padding-right: 0px !important;">
                <div class="page-content-wrapper">
                    <div class="page-content">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div class="page-footer pull-right">
            <div class="page-footer-inner">
                2019 &copy; Padma Tours | v1.0
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/layouts/layout/scripts/layout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>

    @yield('script')
    {{-- <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('assets/global/plugins/bootstrap-growl/jquery.bootstrap-growl.min.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script> --}}
    {{-- <script src="https://js.pusher.com/5.0/pusher.min.js"></script> --}}
    {{-- <script src="{{ asset('assets/moment/moment.min.js') }}"></script> --}}
</body>
</html>
