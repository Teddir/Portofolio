<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo.jpeg')}}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
  integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- =======================================================
  * Template Name: Mentor - v2.1.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">GENTEL</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class=""><a href="/">HOME</a></li>
          <li class="drop-down"><a href="">AKADEMIK</a>
            <ul>
              <li><a href="/profil">Profil Generasi Teladan</a></li>
              <li><a href="/kalender">Kalender Pendidikan</a></li>
              <li><a href="/prestasi">Prestasi</a></li>
              <li><a href="/guru">Dewan Guru</a></li>
              <li><a href="#">Persebaran Alumni <span class="badge badge-warning">coming soon</span></a></li>
            </ul>
          </li>
          {{-- <li class="drop-down"><a href="">PROGRAM</a>
            <ul>
              <li><a href="/program">MTS Generasi Teladan</a></li>
            </ul>
          </li> --}}
          <li class="drop-down"><a href="">INFORMASI</a>
            <ul>
              <li class="drop-down"><a href="#">Pengasuhan</a>
                <ul>
                  <li><a href="/tatibsiswa">Tata Tertib</a></li>
                  <li><a href="/syaratnaik">Syarat Kenaikan Kelas</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Keuangan <span class="badge badge-warning">coming soon</span></a>
                {{-- <ul>
                  <li><a href="#">No Virtual Account New</a></li>
                  <li><a href="#">Tata Cara Pembayaran VA</a></li>
                  <li><a href="#">Maklumat Administrasi Keuangan</a></li>
                </ul> --}}
              </li>
              <li class="drop-down"><a href="#">Kegiatan Siswa</a>
                <ul>
                  <li><a href="/ekstraku">Kegiatan Ekstrakulikuler</a></li>
                  <li><a href="/harian">Kegiatan Harian Gentel</a></li>
                </ul>
              </li>                
              <li><a href="#">Sumbangan Untuk Panti Asuhan <span class="badge badge-warning">coming soon</span></a></li>
              <li><a href="#">Program Tahfidz <span class="badge badge-warning">coming soon</span></a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">PENDAFTARAN</a>
            <ul>
              <li><a href="https://forms.gle/L3yd6CkXgfVoNXqb8">Penerimaan Santri Baru MTS 2021-2022</a></li>
              <li><a href="#"><p>Biaya Pendidikan</p>MTS Generasi Teladan 2021-2020 <span class="badge badge-warning">coming soon</span></a></li>
              <li><a href="#">Petunjuk Teknis PSB <span class="badge badge-warning">coming soon</span></a></li>
              <li class="drop-down"><a href="#">Download </a>
                <ul>
                  <li><a href="#">Form Isian Nilai Raport <span class="badge badge-warning">coming soon</span></a></li>
                  <li><a href="#">Form Kesehatan <span class="badge badge-warning">coming soon</span></a></li>
                </ul>
              </li>  
              <li><a href="#"><p>Daerah Perwakilan Tes PSB /</p>Test Online <span class="badge badge-warning">coming soon</span></a></li>
            </ul>
          </li>
          <li class="drop-down"><a href="">GALERI & LOKASI</a>
            <ul>
              <li><a href="/galeri">Galeri Mts Gentel</a></li>
              <li><a href="/lokasi">Lokasi Mts Gentel</a></li>
            </ul>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="https://forms.gle/L3yd6CkXgfVoNXqb8" class="get-started-btn">Daftar</a>

    </div>
  </header><!-- End Header -->

  @yield('lihat')

  <footer id="footer">

    <div class="footer-top mt-5">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>GENERASI TELADAN IBS</h3>
            <p>
              Jln By Pass Ir Soekarno, Tabanan Bali <br>
              Tabanan,Bali 82111<br>
              Indonesia<br><br>
              <strong>Phone:</strong>&nbsp +62 821-4481-4419<br>
              <strong>Email:</strong>&nbspmts.generasiteladan2019@gmail.com<br>
              <strong>Time:</strong>&nbsp Senin - Sabtu: 7:00 - 15:00<br>
              Ahad : Libur<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">  
            <h4>RECENT POSTS</h4>                                     
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/profil">About us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-10 footer-links">
            <h4>KATEGORI</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Artikel Islam</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Bakti Sosial <span class="badge badge-warning">coming soon</span></a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/harian">Kegiatan</a></li>
            </ul>
            <h4 class="mt-3">PENERIMAAN SANTRI BARU <span class="badge badge-warning">coming soon</span></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Biaya Pendidikan Santri Baru</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Persyaratan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Test Online</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-10 footer-links">
            <h4>AKADEMIK</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/profil">Profil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/kalender">Kalender Pendidikan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/prestasi">Prestasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Alumni</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/guru">Dewan Guru</a></li>
            </ul>
            <h4 class="mt-3">TAUTAN <span class="badge badge-warning">coming soon</span></h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Puldapii</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Puldapii TV</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Radio Gentel</a></li>
            </ul>
          </div>
          </div>

        </div>
      </div>
    </div>
    

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy<strong><span>Generasi Teladan</span></strong>. 
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/ponpesyatim.alinayah" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/panti_asuhan_alinayah/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>