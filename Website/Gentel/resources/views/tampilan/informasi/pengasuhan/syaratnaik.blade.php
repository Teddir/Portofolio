@extends('tampilan.tampilan')
@section('title','Syarat Kenaikan Kelas')
    
@section('lihat')
      <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Syarat Kenaikan Kelas</h2>
      <p> MTs Generasi Teladan Boarding School</p>
    </div>
  </div><!-- End Breadcrumbs -->

  
<div class="container mt-5 mb-10">
<div id="accordion">
  <div class="section-title">
    <h2>Syarat Kenaikan Kelas</h2>
  </div>
    @foreach ($syarat as $item)
    <img loading="lazy" width="1080" height="950"  src="/gambar/imageuser/{{$item->syarat}}" alt="kalender pendidikan Gentel 2020-2021">
    @endforeach
    {{-- <img style="max-width: 100%;margin: auto;" src="assets/img/grad.jpg" alt=""> --}}
</div>
</div>
@endsection