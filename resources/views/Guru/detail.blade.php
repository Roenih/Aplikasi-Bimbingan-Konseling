
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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
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
    <title>Guru</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    {{-- <p>Data Detail Guru</p> --}}
                </div>
                 <div class="from-horizontal">
                    <div class="panel-body">
                      <br/>

                        <form method="post" action="/index-guru">
                        {{ csrf_field() }}
                        {{-- {{ method_field('PUT')}} --}}

                            <div class="mb-3 row">
                                <label for="nip" class="col-sm-2 col-form-label">nip</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nip" value="{{$guru->nip }}"disabled>
                                    {{-- <p>{{ $guru->nip }}</p> --}}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="nm_jabatan" class="col-sm-2 col-form-label">nm_jabatan</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nm_jabatan" value="{{$guru->nm_jabatan }}"disabled>
                                    {{-- <p>{{ $guru->nm_jabatan }}</p> --}}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="no_tlp" class="col-sm-2 col-form-label">no_tlp</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="no_tlp" value="{{$guru->no_tlp }}"disabled>
                                    {{-- <p>{{ $guru->no_tlp }}</p> --}}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="email" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="email" value="{{$guru->email }}"disabled>
                                    {{-- <p>{{ $guru->email }}</p> --}}
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="password" class="col-sm-2 col-form-label">password</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="password" value="{{$guru->password }}"disabled>
                                    {{-- <p>{{ $guru->password }}</p> --}}
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="/guru" class="btn btn-warning">Kembali</a>
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
