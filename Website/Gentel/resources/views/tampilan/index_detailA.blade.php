@extends('tampilan.tampilan')
@section('title','Artikel')
    
@section('lihat')
<style>
  #artikel {
  width: 100%;
  height: 80vh;
  background: url(/gambar/imageuser/{{$artikel->image}}) top center;
  background-size: cover;
  position: relative;
}

#artikel:before {
  content: "";
  background: rgba(109, 109, 109, 0.4);
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#artikel .container {
  padding-top: 72px;
}

@media (max-width: 992px) {
  #artikel .container {
    padding-top: 62px;
  }
}

#artikel h1 {
  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #fff;
  font-family: "Poppins", sans-serif;
}

#artikel h2 {
  color: #eee;
  margin: 10px 0 0 0;
  font-size: 24px;
}

#artikel .btn-get-started {
  font-family: "Raleway", sans-serif;
  font-weight: 500;
  font-size: 15px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 10px 35px;
  border-radius: 50px;
  transition: 0.5s;
  margin-top: 30px;
  border: 2px solid #fff;
  color: #fff;
}

#artikel .btn-get-started:hover {
  background: #312ee4;
  border: 2px solid #1310ac;
}

@media (min-width: 1024px) {
  #artikel {
    background-attachment: fixed;
  }
}

@media (max-width: 768px) {
  #artikel {
    height: 100vh;
  }
  #artikel h1 {
    font-size: 28px;
    line-height: 36px;
  }
  #artikel h2 {
    font-size: 18px;
    line-height: 24px;
  }
}

</style>
    <!-- ======= Hero Section ======= -->
    <section id="artikel" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1><strong>ARTIKEL</strong> ISLAM</h1>
        <h2>-update-</h2>
      </div>
    </section><!-- End Hero -->
  
<div class="container mt-5">
  <div class="row">
    <div class="col-md-9">
      <h3>{{$artikel->name_artikel}}</h3>
      <p>{{$artikel->keterangan}}</p>        
  </div>
    <div class="col-md-3">
      <section id="counts" class="counts section-bg">
        <div class="container">
          
          {{-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/gentel.jpeg" class="img-fluid" alt="">
          </div> --}}
      
            <h4>Mari bergabung bersama Siswa & Siswi yang sedang belajar dan berkembang di generasi teladan</h4>
            <p align="center" style="color:rgb(0, 225, 255);">Menjadi siswa dan siswa pembaharu global</p>      
        </div>
      </section><!-- End Counts Section -->
      
    </div>
  </div>
</div>
@endsection