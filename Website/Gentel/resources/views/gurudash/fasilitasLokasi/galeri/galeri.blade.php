@extends('gurudash.index')

@section('isi')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Galeri Sekolah</small> </h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Gallery <small> design </small></h2>
                        <div class="clearfix"></div>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/guru/create_galeri">Create</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>

                            @if(\Session::has('alert-failed'))
                            <div class="alert alert-failed">
                                <div>{{Session::get('alert-failed')}}</div>
                            </div>
                            @endif
                            @if(\Session::has('alert-success'))
                            <div class="alert alert-success">
                                <div>{{Session::get('alert-success')}}</div>
                            </div>
                            @endif

                            <div class="clearfix"></div>
                    </div>
                    </ul>

                    <div class="x_content">

                        <div class="row">
                            @foreach ($galerilo as $item)
                            {{-- {{dd($item)}} --}}
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%; display: block;"
                                            src="/gambar/imageuser/{{$item->image}}" alt="image" />
                                        <div class="mask no-caption">
                                            <div class="tools tools-bottom">
                                                <a href="{{url('/guru/delete_galeri', $item->id )}}"><i
                                                        class="fa fa-times"></i></a>
                                            </div>
                                        </div>
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
