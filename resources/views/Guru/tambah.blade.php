
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
    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>tambah Guru</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Guru - <strong>TAMBAH DATA GURU</strong> --}}
                </div>
                <div class="card-body">
                    {{-- <a href="/guru" class="btn btn-primary">Kembali</a> --}}
                    <br/>
                    <br/>
                    
                    <form method="post" action="/store-guru">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nip</label>
                            <input type="text" autocomplete="off" name="nip" class="form-control">
 
                            @if($errors->has('nip'))
                                <div class="text-danger">
                                    {{ $errors->first('nip')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Jabatan</label>
                            <input type="text" autocomplete="off" name="nm_jabatan" class="form-control">
 
                            @if($errors->has('nm_jabatan'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_jabatan')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" autocomplete="off" name="no_tlp" class="form-control">
 
                            @if($errors->has('no_tlp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_tlp')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autocomplete="off" name="email" class="form-control">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" autocomplete="off" name="password" class="form-control">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/guru" class="btn btn-primary">Kembali</a>
                        </div>
 
                    </form>
 
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
