@extends('tampilan.tampilan')

@section('title',' Mts Generasi Teladan')

@section('lihat')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1>Learning Today,<br>Leading Tomorrow</h1>
        <h2>Mts Generasi Teladan</h2>
        <h2>We are school of talanted making ahlaq with Sunnah</h2>
        <a href="courses.html" class="btn-get-started">Get Started</a>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>About</h2>
                <p>About Us</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                    <img src="assets/img/gentel.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>Madrasah Tsanawiyah (MTs) Generasi Teladan.</h3>
                    <p class="font-italic">
                        Segala puji bagi ALLAH yang telah menganugerahkan akal bagi setiap manusia. Sholawat serta salam
                        semoga selalu tercurahkan Kepada
                        Nabi MUHAMMAD Shollallahu 'alaihi wasallam. Madrasah Tsanawiyah (MTs) Generasi Teladan adalah
                        sekolah bertaraf menengah pertama yang baru
                        didirikan pada Tahun ajaran 2019-2020.
                    </p>
                    <p>
                        Berada di bawah naungan Yayasan Al-Inayah, MTs Generasi Teladan mencoba menyediakan sarana
                        pendidikan bagi anak-anak yang ingin melanjutkan studi ke
                        jenjang menengah pertama (SMP). Madrasah ini sendiri berdiri atas dorongan dari ketua Yayasan
                        Al-Inayah yang menginginkan adanya sekolah di
                        lingkungan panti Asuhan Al-Inayah, tujuanya agar anak-anak yang tinggal di dalam panti bisa
                        lebih terkontrol. <br>
                        Meski berdiri di lingkungan Panti Asuhan Al-Inayah, MTs Generasi Teladan tidak di khususkan
                        untuk anak Panti saja, tapi juga terbuka untuk umum,
                        megingat banyaknya jumlah penduduk muslim yang tinggal di sekitar Panti Asuhan Al-Inayah,
                        sehingga akses mereka ke sekolah menjadi lebih dekat. <br>
                        Semoga dengan didirikannya MTs Generasi Teladan ini, dapat memberikan kontribusi pendidikan
                        terkhusus pendidikan islami bagi masyarakat Tabanan khususnya dan Bali pada umumnya.
                    </p>
                    {{-- <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p>
            <a href="about.html" class="learn-more-btn">Learn More</a> --}}
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">

                <div class="col-lg-3 col-6 text-center">
                    <a href=""><i class="icofont-group-students"></i></a>
                    <span data-toggle="counter-up">23</span>
                    <p>Students</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <a href=""><i class="icofont-home"></i></a>
                    <span data-toggle="counter-up">3</span>
                    <p>Kelas</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <a href=""><i class="icofont-teacher"></i></a>
                    <span data-toggle="counter-up">6</span>
                    <p>Guru</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <a href=""><i class="icofont-graduate-alt"></i></a>
                    <span data-toggle="counter-up">0</span>
                    <p>alumni</p>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us MTs Generasi Teladan And Visi Misi Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Mengapa Memilih MTs Generasi Teladan ?</h3>
                        <p>
                            MTs Generasi Teladan memadukan kurikulum
                            nasional dengan kurikulum pesantren. <br>
                            Jika ingin mandiri dan merasakan kurikulum nasional yang diintegrasikan dengan kurikulum
                            pesantren,
                            MTs Generasi Teladan bisa dijadikan pilihan tempat menuntut ilmu. Baarakallahu fiikum
                        </p>
                        <div class="text-center">
                            <a href="/profil" class="more-btn">Lihat Profil<i class="bx bx-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-paper-plane"></i>
                                    <h4>Tujuan</h4>
                                    <p>Mewujudkan madrasah berbasis Al-Qur'an dan Sunnah, bermanfaat bagi lingkungan dan
                                        menjadi contoh bagi madrasah lainnya.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-pin"></i>
                                    <h4>Visi</h4>
                                    <p>Mencetak generasi yang menjujung tinggi al-qur'an dan sunnah serta meneladani
                                        Rasulallah Shollallahu 'alaihi wa sallam.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-task"></i>
                                    <h4>Misi</h4>
                                    <p>1. Membiasakan siswa meneladani Rasulallah SAW dalam berprilaku.
                                        2. Menggiatkan siswa untuk senang membaca.
                                        3. Melaksanakan pembelajaran yang menyenagkan bagi siswa.
                                    </p>
                                    <a href="/profil" class="more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End .content-->
                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Fasiitasa Section ======= -->
    <section id="features" class="features">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Fasilitas</h2>
                <p>Fasilitas</p>
            </div>

            <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="las la-school" style="color: #ffbb2c;"></i>
                            <h3><a href="">Classroom</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="las la-landmark" style="color: #5578ff;"></i>
                            <h3><a href="">Library</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="las la-desktop" style="color: #e80368;"></i>
                            <h3><a href="">Computer Lab</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="las la-volleyball-ball" style="color: #e361ff;"></i>
                            <h3><a href="">Lapangan Volly</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="las la-table-tennis" style="color: #47aeff;"></i>
                            <h3><a href="">Tenis Meja</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="las la-mosque" style="color: #11dbcf;"></i>
                            <h3><a href="">Aula</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Features Section -->

    <!-- ======= Breking News Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Berita Terbaru MTs Generasi Teladan </h2>
                <p>Breaking News</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($berita as $item)
                    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="/gambar/imageuser/{{$item->image}}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>new</h4>
                            </div>

                            <h3><a href="course-details.html">{{$item->name_berita}}</a></h3>
                            <p>{{$item->keterangan}}</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="assets/img/trainers/logo.jpeg" class="img-fluid" alt="">
                                    <span>ITpusat | {{date('y')}}</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <a href="{{url('/detail_berita', $item->id)}}" class="learn-more-btn">Learn More ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->

                @endforeach
            </div>

        </div>
    </section><!-- End Popular Courses Section -->

    <!-- ======= Artikel Islam Section ======= -->
    <section id="popular-courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Artikel </h2>
                <p>Artikel Islam</p>
            </div>

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                @foreach ($artikel as $item)
                    
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <img src="/gambar/imageuser/{{$item->image}}" class="img-fluid" alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>new</h4>
                            </div>

                            <h3><a href="course-details.html">{{$item->name_artikel}}</a></h3>
                            <p>{{substr($item->keterangan, 0, 50)}}...</p>
                            <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="assets/img/trainers/logo.jpeg" class="img-fluid" alt="">
                                    <span>ITpusat | {{date('y')}}</span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <a href="{{url('/detail_artikel', $item->id)}}" class="learn-more-btn">Read More ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                
                @endforeach
            </div>

        </div>
    </section>
    <!-<!-- End Trainers Section -->

</main><!-- End #main -->

<section id="counts" class="counts section-bg1">
  <div class="container">
    
    {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
      <img src="assets/img/gentel.jpeg" class="img-fluid" alt="">
    </div> --}}
    @if(\Session::has('alert-failed'))
<div class="alert alert-failed">
    <div>{{Session::get('alert-failed')}}</div>
</div>
@endif
@if(\Session::has('alert-success'))
<div class="alert alert-success">
    <div>{{Session::get('alert-success')}}</div>
</div>
@endif


      <h4>Mari bergabung bersama Siswa & Siswi yang sedang belajar dan berkembang di generasi teladan</h4>
      <p align="center" style="color:rgb(0, 225, 255);">Menjadi siswa dan siswa pembaharu global</p>
      <form action="{{ url('/create_pesan')}}" method="post">
        @csrf
          <input type="name" name="name" id="name" required placeholder="Name" size="30" style="height: 40px; font-size:13px; padding:0px 15px;  margin-left:20px; margin-right:20px; margin-top:20px;"></input>
          <input type="email" name="email" id="email" required placeholder="Email" size="30" style="height: 40px; font-size:13px; padding:0px 15px; margin-left:20px; margin-right:20px; margin-top:20px;"></input>
          <input type="number" name="phone_number" required id="phone_number" placeholder="Telepon" size="30" style="height: 40px; font-size:13px; padding:0px 15px; margin-left:20px; margin-top:20px;"></input>
          <button type="submit" class='btn btn-primary' style="align:center;height: 40px; margin-left:20px;">Send</button>
      </form>

  </div>
</section><!-- End Counts Section -->
@endsection

<!-- ======= Footer ======= -->
