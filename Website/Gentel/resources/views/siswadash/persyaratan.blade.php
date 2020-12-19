@extends('siswadash.index')

@section('isi')
<div class="container-fluid">
  <!-- ============================================================== -->
  <!-- Start Page Content -->
  <!-- ============================================================== -->
  <div class="row">
      <div class="col-sm-12">
          <div class="white-box">
              <h3 class="box-title">Basic Table</h3>
              <p class="text-muted">Add class <code>.table</code></p>
              <div class="table-responsive">
                  <table class="table">
                      <thead>
                          <tr>
                              <th class="border-top-0">#</th>
                              <th class="border-top-0">First Name</th>
                              <th class="border-top-0">Last Name</th>
                              <th class="border-top-0">Username</th>
                              <th class="border-top-0">Role</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Deshmukh</td>
                              <td>Prohaska</td>
                              <td>@Genelia</td>
                              <td>admin</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Deshmukh</td>
                              <td>Gaylord</td>
                              <td>@Ritesh</td>
                              <td>member</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Sanghani</td>
                              <td>Gusikowski</td>
                              <td>@Govinda</td>
                              <td>developer</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>Roshan</td>
                              <td>Rogahn</td>
                              <td>@Hritik</td>
                              <td>supporter</td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>Joshi</td>
                              <td>Hickle</td>
                              <td>@Maruti</td>
                              <td>member</td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>Nigam</td>
                              <td>Eichmann</td>
                              <td>@Sonu</td>
                              <td>supporter</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End PAge Content -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
  <!-- Right sidebar -->
  <!-- ============================================================== -->
  <!-- .right-sidebar -->
  <!-- ============================================================== -->
  <!-- End Right sidebar -->
  <!-- ============================================================== -->
</div>
@endsection