@extends('tampilan.tampilan')
@section('title','Kegiatan Ektrakurikuler')
    
@section('lihat')
      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2>Kegiatan Ekstrakurikuler</h2>
          <p> MTs Generasi Teladan Boarding School</p>
        </div>
      </div><!-- End Breadcrumbs -->
    
      
<div class="container mt-5">
  <div class="section-title">
    <h2>Kegiatan Ekstrakurikuler Siswa</h2>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead class="bg-primary">
        <tr>
          <th scope="col">NO.</th>
          <th scope="col">Ekstrakurikuler</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ekstrakuli as $item)
            
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->name_ekstrakuli}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
  <div class="card-body">
    <table class="table table-bordered">
      <thead >
        <tr>
          <th scope="col"></th>
          <th scope="col">Study Club</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ekstrakuli as $item)
            
        <tr>
          <td>{{$loop->iteration}}</td>
          <td>{{$item->name_studyClub}}</td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection