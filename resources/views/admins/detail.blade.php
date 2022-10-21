
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
        <title>Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-head container-fluid" style="margin-top: 10px;">
                        <p>Data Detail Admin</p>
                    </div>
                    <div class="form-horizontal">
                        <div class="panel-body">
                            <form method="post" action="/index-admins">
    
                            {{ csrf_field() }}
                                {{-- <div class="form-group">
                                    <label class="col-sm-2">id_admin</label>
                                    <div class="col-sm-10">
                                        <p>{{ $admin->id_admin }}</p>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <label class="col-sm-2">nm_admin</label>
                                    <div class="col-sm-10">
                                        <p>{{ $admin->nm_admin }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">email</label>
                                    <div class="col-sm-10">
                                        <p>{{ $admin->email }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2">password</label>
                                    <div class="col-sm-10">
                                        <p>{{ $admin->password }}</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <a href="/admins" class="btn btn-warning">Data Admin</a>
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
