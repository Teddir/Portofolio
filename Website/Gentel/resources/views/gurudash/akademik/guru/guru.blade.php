@extends('gurudash.index')
@section('title','Daftar Staf MTS Generasi Teladan')
    
@section('isi')
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Daftar Guru</small> </h3>
      </div>
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Daftar <small> Daftar Staf Pengajar </small></h2>
            <div class="clearfix"></div>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/guru/register">Create</a>
                </div>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </div>
          </ul>
          <div class="clearfix"></div>
          <div class="x_content">

            <p>Add Teacher</p>

            <div class="table-responsive">
              <table class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th>
                      <input type="checkbox" id="check-all" class="flat">
                    </th>
                    <th class="column-title">TMT </th>
                    <th class="column-title">Tanggal Dibuat </th>
                    <th class="column-title">Name </th>
                    <th class="column-title">Status </th>
                    <th class="column-title no-link last"><span class="nobr">Keterangan</span>
                    </th>
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>
                @foreach ($user as $item)
                    
                <tbody>
                  <tr class="even pointer">
                    <td class="a-center ">
                      <input type="checkbox" class="flat" name="table_records">
                    </td>
                    <td class=" ">{{$item->tmt}}</td>
                    <td class=" ">{{$item->created_at}}</td>
                    <td class=" ">{{$item->name}}</td>
                    <td class=" ">{{$item->jabatan}}</td>
                    <td class=" last"><a href="#">{{$item->keterangan}}</a>
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
