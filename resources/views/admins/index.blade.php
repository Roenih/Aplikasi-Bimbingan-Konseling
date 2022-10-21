
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
            <h1 class="m-0">Admin</h1>
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
        <title>Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Bimbingan --}}
                </div>
                <div class="card-body">
                    <a href="/tambah-admins" class="btn btn-success float-right"><i class=" fa fa-plus"></i>Tambah admin</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped" id="table-data">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                {{-- <th>Id Admin</th> --}}
                                <th>Nama Admin</th>
                                <th>Email</th>
                                {{-- <th>Password</th> --}}
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($admin as $i => $p)
                                <td>{{ $i+1 }}</td>
                                {{-- <td>{{ $p->id_admin }}</td> --}}
                                <td>{{ $p->nm_admin }}</td>
                                <td>{{ $p->email }}</td>
                                {{-- <td>{{ $p->password }}</td> --}}
                                <td>
                                    <a href="/edit-admins/{{ $p->id_admin }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <a href="/detail-admins/{{ $p->id_admin }}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                    <a href="/delete-admins/{{ $p->id_admin }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
