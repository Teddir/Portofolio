@extends('tampilan.tampilan')
@section('title','Prestasi')

@section('lihat')
<!-- ======= Hero Section ======= -->
<section id="hero1" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1><strong>PRESTASI</strong><br> MTS GENERASI TELADAN</h1>
        <h2>Dari Tahun ke Tahun.</h2>
    </div>
</section><!-- End Hero -->
<div class="container mt-5">
  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <div id="accordion">
            <div class="card wadidaw">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-plus" aria-hidden="true"></i>&nbsp PRESTASI MTS GENERASI TELADAN 2019/2020
                        </button>
                    </h5>
                </div>
                @foreach ($prestasi as $item)
                    
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <h3>{{$item->name_lomba}}</h3>
                        <p>{{$item->keterangan}}</p>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
