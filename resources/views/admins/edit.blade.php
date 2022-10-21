
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
            <h1 class="m-0">Edit Admin</h1>
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

    <!-- Main content -->
    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT DATA ADMIN</strong>
                </div>
                <div class="card-body">
                    <a href="/admins" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/update-admins/{{ $admin->id_admin }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        {{-- <div class="form-group">
                            <label>Id Admin</label>
                            <input type="text" autocomplete="off" name="id_admin" class="form-control" value=" {{ $admin->id_admin }}">
 
                            @if($errors->has('id_admin'))
                                <div class="text-danger">
                                    {{ $errors->first('id_admin')}}
                                </div>
                            @endif
 
                        </div> --}}
 
                        <div class="form-group">
                            <label>Nama Admin</label>
                            <input type="nm_admin" autocomplete="off" name="nm_admin" class="form-control" value=" {{ $admin->nm_admin }}">
 
                            @if($errors->has('nm_admin'))
                                <div class="text-danger">
                                    {{ $errors->first('id_admin')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autocomplete="off" name="email" class="form-control" value=" {{ $admin->email }}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <labe>Password</label>
                            <input type="password" autocomplete="off" name="password" class="form-control">
                            
                             @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
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
