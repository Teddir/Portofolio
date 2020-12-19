@extends('gurudash.index')

@section('isi')

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Elements</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Form Design <small>different form elements</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="dropdown-item" href="/guru/prestasi">Prestasi </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form action="{{url('/guru/ubah_prestasi', $prestasi->id)}}" method="post" enctype="multipart/form-data">@method('put') @csrf 
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" name="name_lomba" id="name_lomba">prestasi
                                    Name 
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name_lomba" name="name_lomba"  class="form-control " value="{{$prestasi->name_lomba}}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 "></label>
                                <div class=" col-md-5 col-sm-10 " rows="3">
                                    <textarea class="resizable_textarea form-control"
                                        placeholder="isi prestasi" name="keterangan" id="keterangan">{{$prestasi->keterangan}}</textarea>
                                </div>
                            </div>

                            <div class="item form-group">
                                <div class="" style="float:right;">
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
