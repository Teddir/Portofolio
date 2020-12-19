@extends('tampilan.tampilan')
@section('title','Kegiatan Harian Generasi Teladan')
    
@section('lihat')
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs " data-aos="fade-in">
    <div class="container">
      <h2>Kegiatan Harian</h2>
      <p> MTs Generasi Teladan Boarding School</p>
    </div>
  </div><!-- End Breadcrumbs -->
  
<div class="container mt-5">
  <div class="section-title">
    <h2>A. Kegiatan Harian Generasi Teladan</h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead class="bg-primary">
        <tr>
          <th scope="col">NO.</th>
          <th scope="col">Waktu</th>
          <th scope="col">Nama Kegiatan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($harian as $item)
        
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->waktu}}</td>
          <td>{{$item->name_kegiatan_harian}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection