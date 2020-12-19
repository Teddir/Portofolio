@extends('tampilan.tampilan')
@section('title','Kalender Pendidikan')
    
@section('lihat')
    <!-- ======= Hero Section ======= -->
    <section id="hero2" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1><strong>KALENDER PENDIDIKAN</strong><br> MTS GENERASI TELADAN</h1>
        <h2>NEW.</h2>
      </div>
    </section><!-- End Hero -->
  
<div class="container mt-5 mb-10">
<div id="accordion">
  <div class="section-title">
    <h2>Kalender Pendidikan</h2>
    <p>Semester Ganjil (New)</p>
  </div>
    @foreach ($akademik as $item)
    <img loading="lazy" width="1080" height="950"  src="/gambar/imageuser/{{$item->kalender_pendidikan}}" alt="kalender pendidikan Gentel 2020-2021">
    @endforeach
    {{-- <img style="max-width: 100%;margin: auto;" src="assets/img/grad.jpg" alt=""> --}}
</div>
</div>
@endsection