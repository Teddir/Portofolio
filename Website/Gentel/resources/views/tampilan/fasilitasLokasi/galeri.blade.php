@extends('tampilan.tampilan')
@section('title','Kegiatan Ektrakurikuler')
    
@section('lihat')
<section id="popular-courses" class="courses">
  <div class="container" data-aos="fade-up">

      <div class="section-title">
          <h2>Artikel </h2>
          <p>Galeri</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($galerilo as $item)
              
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="course-item">
                  <img src="/gambar/imageuser/{{$item->image}}" class="img-fluid" alt="...">
              </div>
          </div> <!-- End Course Item-->
          
          @endforeach
      </div>

  </div>
</section>

@endsection