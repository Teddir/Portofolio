@extends('tampilan.tampilan')
@section('title','Tata Tertib')
    
@section('lihat')
      <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Tata Tertib</h2>
      <p> MTs Generasi Teladan Boarding School</p>
    </div>
  </div><!-- End Breadcrumbs -->

  
<div class="container mt-5">
<div id="accordion">
  <div class="card wadidaw">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fa fa-plus" aria-hidden="true"></i>&nbsp TATA TERTIB SISWA MTS GENERASI TELADAN
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        @foreach ($tatib as $item)
        <img loading="lazy" width="1080" height="950"  src="/gambar/imageuser/{{$item->tatib}}" alt="kalender pendidikan Gentel 2020-2021">
        @endforeach
      </div>
    </div>
  </div>
</div>
</div>
@endsection