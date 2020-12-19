@extends('gurudash.index')
@section('title','Kalender Pendidikan')

@section('isi')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form Upload <br> </h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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
            <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Dropzone multiple file uploader</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <p>Drag multiple files to the box below for multi upload or click to select files. This is for
                            demonstration purposes only, the files are not uploaded to any server.</p>
                        <form action="{{url('/guru/tambah_pengasuhan')}}" method="POST" enctype="multipart/form-data">@method('post') @csrf

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" name="tatib"
                                    id="tatib">Scanner Tata Tertib

                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="tatib" name="tatib" required="required"
                                        class="form-control ">
                                </div>
                                
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" name="syarat"
                                    id="syarat">Scanner Syarat Kenaikan Kelas

                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="syarat" name="syarat" required="required"
                                        class="form-control ">
                                        <button type="submit" class="btn btn-success mt-2">Create</button>

                                </div>
                                
                            </div>

                        </form>
                        <br />
                        <br />
                        <br />
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="/gurutem/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/gurutem/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="/gurutem/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/gurutem/vendors/nprogress/nprogress.js"></script>
<!-- Dropzone.js -->
<script src="/gurutem/vendors/dropzone/dist/min/dropzone.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="/gurutem/build/js/custom.min.js"></script>
@endsection
