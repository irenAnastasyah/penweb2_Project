
  <!-- Navbar -->
 @include('layouts.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th colspan="5"><h2>Biodata</h2></th>
    </tr>
    <tr>
      <th><h4>nama</h4></th>
      <th><h4>umur</h4></th>
      <th><h4>email</h4></th>
      <th><h4>Nim</h4></th>
      <th><h4>Alamat</h4></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><h4>{{$nama}}</h4></td>
      <td><h4>{{$umur}}</h4></td>
      <td><h4>{{$email}}</h4></td>
      <td><h4>{{$nim}}</h4></td>
      <td><h4>{{$alamat}}</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>fani</h4></td>
      <td><h4>19</h4></td>
      <td><h4>Syarifani@gmail.com</h4></td>
      <td><h4>0110123975</h4></td>
      <td><h4>Depok</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>nanda</h4></td>
      <td><h4>23</h4></td>
      <td><h4>ananda@gmail.com</h4></td>
      <td><h4>0110123753</h4></td>
      <td><h4>Depok</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>rina</h4></td>
      <td><h4>22</h4></td>
      <td><h4>rina@gmail.com</h4></td>
      <td><h4>01101237976</h4></td>
      <td><h4>Sidimpuan</h4></td>
    </tr>
  </tbody>
  <tbody>
    <tr>
      <td><h4>monica</h4></td>
      <td><h4>19</h4></td>
      <td><h4>monica@gmail.com</h4></td>
      <td><h4>0110123886</h4></td>
      <td><h4>Bogor</h4></td>
    </tr>
  </tbody>
  
</table>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}


  