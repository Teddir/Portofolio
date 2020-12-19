@extends('tampilan.tampilan')
@section('title','Daftar Staf MTS Generasi Teladan')
    
@section('lihat')
    <!-- ======= Hero Section ======= -->
    <section id="hero3" class="d-flex justify-content-center align-items-center">
      <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
        <h1><strong>PENGAJAR DAN STAF</strong><br> MTS GENERASI TELADAN</h1>
        <h2>2019.</h2>
      </div>
    </section><!-- End Hero -->
  
<div class="container mt-5">
  <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
    <h3>Daftar Staf Dewan Guru.</h3>
    <p class="font-italic">
      MTS Generasi Teladan Boarding School didukung dengan tenaga kependidikan yang terdiri dari :
    </p>
    <ul>
      <li><i class="icofont-check-circled"></i> Para pendidik profesional.</li>
      <li><i class="icofont-check-circled"></i> Setara pendidikan tinggi.</li>
      <li><i class="icofont-check-circled"></i> Berdedikasi tinggi pada dunia pendidikan.</li>
      <li><i class="icofont-check-circled"></i> Berakhlaq Al-Karimah.</li>
      <li><i class="icofont-check-circled"></i> Senang berinteraksi dengan peserta didik.</li>
      <li><i class="icofont-check-circled"></i> Mampu mengembangkan Active Learning Methods.</li>
      <li><i class="icofont-check-circled"></i> Kualifikasi yang sesuai dengan bidang ilmunya masing-masing.</li>
    </ul>
    <p>
      Adapun daftar tenaga pendidik di Mts Generasi Teladan sebagaimana tercantum dalam tabel di bawah ini:
    </p>


    <div id="accordion" >
      <div class="card wadidaw">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fa fa-plus" aria-hidden="true"></i>&nbsp TENAGA PENGAJAR DAN STAF GENERASI TELADAN
            </button>
          </h5>
        </div>
    
        <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
            <table class="table table-bordered">
              <thead class="bg-primary">
                <tr>
                  <th scope="col">NO.</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">TMT</th>
                  <th scope="col">JABATAN</th>
                  <th scope="col">KETERANGAN</th>
                </tr>
              </thead>
              @foreach ($user as $item)
              <tbody>
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$item->name}}</td>
                  <td>{{$item->tmt}}</td>
                  <td>{{$item->jabatan}}</td>
                  <td>{{$item->keterangan}}</td>
                </tr>
              </tbody>
              @endforeach
            </table>
                
          </div>
        </div>
      </div>
    </div>
  
  </div>
</div>
@endsection