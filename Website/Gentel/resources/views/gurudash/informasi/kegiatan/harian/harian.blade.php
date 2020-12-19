@extends('gurudash.index')
@section('title','Daftar Staf MTS Generasi Teladan')
    
@section('isi')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Daftar Kegiatan</small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2><small> Daftar Kegiatan Harian</small></h2>
            <div class="clearfix"></div>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/guru/create_harian">Create</a>
                </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </div>
          </ul>
          <div class="clearfix"></div>
          <div class="x_content">

            <p>Harian ---------></p>
            {{-- Table Harian --}}
            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Waktu </th>
                    <th class="column-title">Nama Kegiatan</th>
                    <th class="column-title">Action</th>
                    <th class="column-title"></th>
                  </tr>
                </thead>
                @foreach ($harian as $item)
                    
                <tbody>
                  <tr class="even pointer">
                    <td class=" ">{{$loop->iteration}}</td>
                    <td class=" ">{{$item->waktu
                    }}</td>
                    <td class=" ">{{$item->name_kegiatan_harian}}</td>
                    <td><a  href="/guru/update_harian/{{$item->id}}"><i class="fa fa-pencil"> Update</i></a></td>
                    <td><a  href="{{url('/guru/delete_harian', $item->id)}}"><i class="fa fa-close"> Hapus</i></a></td>
                    </td>
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
</div>
@endsection
