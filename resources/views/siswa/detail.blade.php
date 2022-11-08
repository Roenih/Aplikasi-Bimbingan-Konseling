
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    @include('Template.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0">Starter Page</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">
            {{-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol> --}}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.boostrapcdn.com/boostrap/4.2.1/css/boostrap.min.css" rel>
    <title>Siswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    {{-- <p>Data Detail Siswa</p> --}}
                </div>
                <div class="from-horizontal">
                    <div class="panel-body">
                        <form method="post" action="/index-siswa">

                        {{ csrf_field() }}
                            <div class="mb-3 row">
                                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nis" value="{{ $siswa->nis }}" disabled>
                                    {{-- <p>{{ $siswa->nis }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nm_siswa" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nm_siswa" value="{{ $siswa->nm_siswa }}" disabled>
                                    {{-- <p>{{ $siswa->nm_siswa }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="kode_kelas" class="col-sm-2 col-form-label">Kelas</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="kode_kelas" value="{{ !empty($siswa->kode_kelas) ? $siswa->kelas->kode_kelas : '-' }}" disabled>
                                    {{-- <p>{{ $siswa->kelas->nm_kelas }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="tgl_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="tgl_lahir" value="{{ $siswa->tgl_lahir }}" disabled>
                                    {{-- <p>{{ $siswa->tgl_lahir }}</p> --}}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="jenkel" value="{{ $siswa->jenkel }}" disabled>
                                    {{-- <p>{{ $siswa->jenkel }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nm_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nm_ayah" value="{{ $siswa->nm_ayah }}" disabled>
                                    {{-- <p>{{ $siswa->nm_ayah }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="pekerjaan_ayah" class="col-sm-2 col-form-control">Pekerjaan Ayah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="pekerjaan_ayah" value="{{ $siswa->pekerjaan_ayah }}" disabled>
                                    {{-- <p>{{ $siswa->pekerjaan_ayah }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="no_tlp" class="col-sm-2 col-form-label">No Telepon</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="no_tlp" value="{{ $siswa->no_tlp }}" disabled>
                                    {{-- <p>{{ $siswa->no_tlp }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="alamat" value="{{ $siswa->alamat }}" disabled>
                                    {{-- <p>{{ $siswa->alamat }}</p> --}}
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" value="{{ $siswa->email }}" disabled>
                                    {{-- <p>{{ $siswa->email }}</p> --}}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="/siswa" class="btn btn-warning">Kembali</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    @include('Template.footer')
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

    @include('Template.script')
</body>
</html>
