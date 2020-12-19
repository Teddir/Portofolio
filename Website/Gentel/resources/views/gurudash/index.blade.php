<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Dashboard Guru</title>

    <!-- Bootstrap -->
    <link href="/gurutem/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gurutem/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gurutem/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/gurutem/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="/gurutem/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/gurutem/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="/gurutem/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/gurutem/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Dashboard Guru</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="/gurutem/images/images.jpeg" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>{{auth()->user()->name}}</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/guru/artikel">Artikel Islam</a></li>
                                        <li><a href="/guru/berita">Berita Sekolah</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i>Pendaftaran<span
                                    class="label label-success pull-right">Coming Soon</span></a>
                                    {{-- <ul class="nav child_menu">
                                        <li><a href="form_advanced.html">Pendaftaran Siswa Baru</a></li>
                                        <li><a href="form_validation.html">Biaya Pendidikan</a></li>
                                        <li><a href="form_wizards.html">Petunjuk Teknis PSB</a></li>
                                        <li><a><i class="fa fa-cloud-download"></i> Download</a>
                                            <ul class="nav child_menu">
                                                <li><a href="form_validation.html">Form Raport</a></li>
                                                <li><a href="form_wizards.html">Form Kesehatan</a></li>    
                                            </ul>
                                        </li>
                                        <li><a href="form_buttons.html">Test Online</a></li>
                                    </ul> --}}
                                </li>
                                <li><a><i class="fa fa-desktop"></i> Akademik <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/profil">Profil Madrasah</a></li>
                                        <li><a href="/guru/dewan_guru">Daftar Dewan Guru</a></li>
                                        <li><a href="/guru/alumni">Daftar Alumni</a></li>
                                        <li><a href="/guru/prestasi">Prestasi</a></li>
                                        <li><a href="/guru/kalender">Kalender Pendidikan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-table"></i> Informasi <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a><i class="fa fa-recycle"></i> Pengasuhan</a>
                                            <ul class="nav child_menu">
                                                <li><a href="/guru/tatib">Tata Tertib</a></li>
                                                <li><a href="/guru/syarat">Syarat Kenaikan Kelas</a></li>    
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-archive"></i> Kegiatan Siswa</a>
                                            <ul class="nav child_menu">
                                                <li><a href="/guru/ekstrakuli">Kegiatan Ekstrakulikuler</a></li>
                                                <li><a href="/guru/harian">Kegiatan Harian</a></li>    
                                            </ul>
                                        </li>

                                        <li><a href="javascript:void(0)">Sumbangan Ke Panti</a></li>
                                        <li><a href="javascript:void(0)">Program Tahfidz</a></li>
                                        <li><a href="javascript:void(0)">Keuangan</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-image"></i> Galeri & Lokasi <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="/guru/galeri">Galeri Sekolah</a></li>
                                        <li><a href="/guru/message">Message</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_section">
                            <h3>Live On</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-user"></i> Akun <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        {{-- <li><a href="/guru/profile">Profile</a></li> --}}
                                        <li><a href="/guru/register">Register</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span
                                            class="label label-success pull-right">Coming Soon</span></a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" title="Settings">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                            <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Lock">
                            <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                        </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="/gurutem/images/images.jpeg" alt="">{{auth()->user()->name}}
                                </a>
                            </li>

                            <li role="presentation" class="nav-item dropdown open">
                                <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1"
                                    data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="badge bg-green">1</span>
                                </a>
                                <ul class="dropdown-menu list-unstyled msg_list" role="menu"
                                    aria-labelledby="navbarDropdown1">
                                    <li class="nav-item">
                                        <div class="text-center">
                                            <a class="dropdown-item">
                                                <a href="/guru/message"><strong>See All Alerts</strong></a>
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
                <!-- top tiles -->
                @yield('isi')
            <!-- /page content -->

            <!-- footer content -->
            <footer>
                <div class="pull-right">
                    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="/gurutem/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/gurutem/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/gurutem/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/gurutem/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/gurutem/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/gurutem/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/gurutem/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/gurutem/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/gurutem/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/gurutem/vendors/Flot/jquery.flot.js"></script>
    <script src="/gurutem/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/gurutem/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/gurutem/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/gurutem/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/gurutem/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/gurutem/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/gurutem/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/gurutem/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/gurutem/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/gurutem/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/gurutem/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/gurutem/vendors/moment/min/moment.min.js"></script>
    <script src="/gurutem/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/gurutem/build/js/custom.min.js"></script>

</body>

</html>
