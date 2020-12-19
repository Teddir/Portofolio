@extends('gurudash.index')
@section('title','Prestasi')

@section('isi')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Prestasi</small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Prestasi <small> Prestasi Doc </small></h2>
            <div class="clearfix"></div>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/guru/create_prestasi">Create</a>
                </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </div>
            <div class="clearfix"></div>
            </ul>
            <ul class="list-unstyled top_profiles scroll-view">
              @foreach ($prestasi as $item)
              <li class="media event">
                <a class="pull-left border-aero profile_thumb">
                  <i class="fa fa-check-square-o"></i>
                </a>

                <div class="media-body">
                      
                  <a class="title" href="#">{{$item->name_lomba}}</a>
                  <p><strong>{{$item->created_at}}</p>
                  <p> <small>{{substr($item->keterangan, 0, 60)}}...</small>
                  </p>
                  <div class="tools tools-bottom">
                    <a href="/guru/update_prestasi/{{$item->id}}"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('/guru/delete_prestasi', $item->id )}}"><i class="fa fa-times"></i></a>
                  </div>

                </div>
                
              </li>
              @endforeach
              <div class="clearfix"></div>
            </ul>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
