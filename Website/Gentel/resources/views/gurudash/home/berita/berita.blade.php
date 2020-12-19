@extends('gurudash.index')

@section('isi')

<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Berita</small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Berita Gallery <small> Berita design </small></h2>
            <div class="clearfix"></div>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/guru/create_berita">Create</a>
                </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
              <div class="clearfix"></div>
            </div>
            </ul>
            
          <div class="x_content">

            <div class="row">
              @foreach ($berita as $item)
                  {{-- {{dd($item)}} --}}
              <div class="col-md-55">
                <div class="thumbnail">
                  <div class="image view view-first">
                    <img style="width: 100%; display: block;" src="/gambar/imageuser/{{$item->image}}" alt="image" />
                    <div class="mask no-caption">
                      <div class="tools tools-bottom">
                        <a href="/guru/update_berita/{{$item->id}}"><i class="fa fa-pencil"></i></a>
                        <a href="{{url('/guru/delete_berita', $item->id )}}"><i class="fa fa-times"></i></a>
                      </div>
                    </div>
                  </div>
                  <div class="caption">
                    <p><strong>{{$item->name_berita}}</strong>
                    </p>
                    <p>{{substr($item->keterangan, 0, 20) }}....</p>
                    
                  </div>
                </div>
              </div>
              
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection