<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link href="{{ asset('css1/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <section id="nav-bar">

        {{-- navbar --}}

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href=""><img src="image1/logo.jpeg" style="height: 80px "></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported"
                aria-controls="navbarSupported" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupported">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#profil">PENDIDIKAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#visi">TENTANG KAMI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kegiatan">KEGIATAN SEKOLAH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fasilitas">FASILITAS SEKOLAH</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">KONTAK</a>
                    </li>
                </ul>
            </div>
        </nav>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
            integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
            integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    </section>

    {{-- banner --}}

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="sekolah-title">Madrasah Tsanawiyah</p>
                    <p class="sekolah-titlek">Generasi Teladan</p>
                    <P class="kamu1">Tumbuhnya kesadaran mengamalkan ajaran yang berlandaskan Alqur'an dan Hadist
                        , Menjadikan MTs Generasi Teladan sebagai Madrasah yang siswanya berbudi pekerti luhur yang
                        berwawasan lingkungan
                        , Sasaran Rencana Kerja Jangka Menengah mengarah ke 8 Standar Nasional Pendidikan
                        , Terbentuknya kebiasaan berbahasa Arab
                        , Menjadikan MTs Generasi Teladan berprestasi dalam bidang akademik maupun non akademik
                        , Mempunyai sarana dan pra sarana yang memadai
                        , Mendajidakan MTs Generasi Teladan sebagai Madrasah yang didukung oleh komite Madrasah,
                        lingkungan dan orang tua siswa
                        , Menjadikan MTs Generasi Teladan sebagai Madrasah yang siswanya tanggap terhadap perubahan
                        global dan peduli terhadap lingkungan
                        , Menjadikan MTs Generasi Teladan menciptakan dan memiliki hubungan denga lembaga untuk
                        mewujudan kerja sama dan toleransi
                    </P>
                </div>
                <div class="col-md-6 text-center1">
                    <img src="image1/3.png" class="img-fluid">
                </div>
            </div>
        </div>

        <img src="image1/gelombang.svg" class="footer-img">

    </section>

    {{-- Pelajaran --}}

    <section id="profil">

        <div class="container  mt-10">
            <div class="row justify-content-center">

                <div class="card shadow p-2 mb-5 m-3" style="width: 15rem;">
                    <img src="image1/book.gif" class="img-fluid">
                    <div class="card-body" `>
                        <h5 class="card-title">AGAMA</h5>
                        <p class="card-text">Bahasa Arab, Aqidah, Sejarah, Fiqih, dll</p>
                    </div>
                </div>

                <div class="card shadow p-2 mb-5 m-3" style="width: 15rem;">
                    <img src="image1/book.gif" class="img-fluid">
                    <div class="card-body" `>
                        <h5 class="card-title">UMUM</h5>
                        <p class="card-text">Bahasa Inggris, IPA, IPS, PKN, Bahasa Indonesia, dll</p>
                    </div>
                </div>


            </div>
        </div>

    </section>


    {{-- Tentang Kami --}}

    <section id="visi">

        <div class="container ">
            <h1 class="title1 text-center">
                TENTANG KAMI</h1>
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="image1/visi1.png" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p class="sekolah-title1"><i class="fa fa-line-chart" aria-hidden="true"></i></p>
                    <h2>Visi</h2>
                    <P>Terwujudnya Siswa yang Berakhlakul Karimah, Cinta Ilmu, serta beramal Sesuai Al-Qur'an dan
                        As-Sunnah</P>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="image1/misi.jpeg" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <p class="sekolah-title1"><i class="fa fa-rocket" aria-hidden="true"></i></p>
                    <h2>Misi</h2>
                    <P><b>1.</b> Mengamalkan nilai-nilai Islam yang berlandaskan Alqur'an dan Hadist.
                        <b>2.</b> Membiasakan meneladani Rosullah Sallahu alaihi wa salam
                        <b>3.</b> Mewujudkan kompetensi dalam berbahasa terkhusus Bahasa Arab
                        <b>4.</b> Mewujudkan pembelajaran secaara efektif, optimal, dan menyenangkan
                        <b>5.</b> Menggiatkan siswa senang membaca
                        <b>6.</b> Mewujudkan penguasaan Teknologi Informasi dan Komunikasi
                        <b>7.</b> Mengasah kreatifitas warga Madrasah
                        <b>8.</b> Memantapkan jiwa kempemimpinan siswa
                        <b>9.</b> Menetapkan jia kewirausahaan
                        <b>10</b>. Mewujudkan toleransi kehidupan intern dan antar umat beragamaa</P>
                </div>
            </div>
        </div>


    </section>

    {{-- fasilitas sekolah --}}

    <section id="fasilitas">
        <div class="container ">
            <h1 class="title1 text-center">
                FASILITAS </h1>
            <div class="row">
                <div class="col-md-6 ">
                    <p class="fasilitas-title">DIANTARANYA :</p>
                    <ul>
                        <li>Kelas Yang Nyaman</li>
                        <li>Lapangan Bola</li>
                        <li>Tenis Meja</li>
                        <li>Perpustakaan</li>
                        <li>Lab Bahasa</li>
                        <li>Aula</li>
                        <li>Lapangan Bulu Tangkis</li>
                        <li>Lab Komputer</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="image1/scholl.png" class="img-fluid">
                </div>
            </div>
        </div>

    </section>

    {{-- Pengajar --}}

    {{-- <section id="pengajar">
        <div class="container">
            <h1 class="title1 text-center">
                PENGAJAR</h1>
            <div class="row offset-1">
                <div class="col-md-5 pengajar-q">
                    <P>Menjaga lembaga pendidikan terbaik di indonesia yang dapat menciptakan santri yang bertaqwa,
                        profesional, mandiri dan berbagi</P>
                    <img src="image1/guru.png" style="height: 100px">
                    <p class="user-detail"><b>Khalil</b><br> Kepala Sekolah</p>
                </div>
                <div class="col-md-5 pengajar-q">
                    <P>Menjaga lembaga pendidikan terbaik di indonesia yang dapat menciptakan santri yang bertaqwa,
                        profesional, mandiri dan berbagi</P>
                    <img src="image1/guru.png" style="height: 100px">
                    <p class="user-detail"><b>Nuri Alfianto</b><br> Komite Sekolah</p>
                </div>
            </div>
        </div>

    </section> --}}

    {{-- Alamat Media --}}
    {{-- <section id="alamat">
        <div class="container">
            <p class="text-center">FIND LOCATION IN PETA</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.503377988949!2d115.11598931462164!3d-8.547497089013524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23a67d7f37b85%3A0xc0b22101de8dd56c!2sPanti%20Asuhan%20Al-inayah!5e0!3m2!1sid!2sid!4v1603948849143!5m2!1sid!2sid"
                width=100% height=300% style=”border:0″ allowfullscreen>
            </iframe>

        </div>
        </div>

    </section> --}}

    {{-- Sosial Media --}}

    <img src="image1/gelombang2.svg" class="footer-img">
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-box">
                    <img src="image1/logo.jpeg" style="width: 100px">
                    <P>Terwujudnya Siswa yang Berakhlakul Karimah, Cinta Ilmu, serta beramal Sesuai Al-Qur'an dan
                        As-Sunnah</P>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>CONTACT US</b></p>
                    <P><i class="fa fa-map-marker"></i>Jln By Pass Ir Soekarno Tabanan Bali</P>
                    <p><i class="fa fa-phone"></i>+62 0899-0400-887</p>
                    <p><i class="fa fa-envelope-open-o"></i>mts.generasiteladan2019@gmail.com</p>
                </div>

                <div class="col-md-4 footer-box">
                    <p><b>NEWS LETTER</b></p>
                    <input type="email" class="form-control" placeholder="Your Email">
                    <button type="button" class="btn btn-primary">Kirim Pesan</button>
                </div>

            </div>
        </div>
    </section>

    <section id="sosmed">
        <div class="container text-center">
            <div class="sosmed-icons">
                <a href="#"><img src="image1/fb.png"></a>
                <a href="#"><img src="image1/ig.png"></a>
                <a href="#"><img src="image1/wa.png"></a>
            </div>
        </div>

    </section>
    <footer class="foot">© 2020 MTS GENERASI TELADAN </footer>


</body>

</html>
