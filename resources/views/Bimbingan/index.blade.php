
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
    <div>
      @if(session('Data dihapus'))
      <div class="alert alert-danger" role="alert">
          {{session('Data dihapus')}}
      </div>
      @endif
      @if(session('Data ditambah'))
      <div class="alert alert-info" role="alert">
          {{session('Data ditambah')}}
      </div>
      @endif
      @if(session('Data diedit'))
      <div class="alert alert-warning" role="alert">
          {{session('Data diedit')}}
      </div>
      @endif
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Bimbingan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              {{-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> --}}
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
    <!-- Main content -->
    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Bimbingan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Bimbingan --}}
                </div>
                <div class="card-body">
                    <a href="/tambah-bimbingan" class="btn btn-success float-right"><i class=" fa fa-plus"></i>Tambah Data Bimbingan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped" id="table-data">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Siswa</th>
                                <th>Nama Kelas</th>
                                <th>Tanggal Konsultasi</th>
                                {{-- <th>Id Kelas</th> --}}
                                <th> Jenis Masalah</th>
                                <th>Diskripsi Permasalahan</th>
                                <th>Penyelesaian</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($bimbingan as $i => $p)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $p->nis }}</td>
                                    <td>{{ $p->siswa->nm_siswa ??''}}</td>
                                    <td>{{ $p->kelas->nm_kelas ?? '' }}</td>
                                    <td>{{ $p->tgl_konsultasi }}</td>
                                    {{-- <td>{{ $p->id_kelas }}</td> --}}
                                    <td>{{ $p->jenismasalah->nm_masalah ??''}}</td>
                                    <td>{{ $p->diskripsi_bimbingan }}</td>
                                    <td>{{ $p->penyelesaian }}</td>

                                    <td>
                                        <a href="/edit-bimbingan/{{ $p->id_bimbingan }}" class="btn btn-warning"><i class="fa fa-edit"></i></a> 
                                        <a href="/delete-bimbingan/{{ $p->id_bimbingan }}" class="btn btn-danger" onclick="return confirm('Yakin anda ingin menghapus data ini?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
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
