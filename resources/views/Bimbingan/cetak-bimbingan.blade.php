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
                            <h1 class="m-0">Cetak Data</h1>
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
            <body>
                <div class="container">
                    <div class="card mt-2">
                        <div class="card-header text-center">
                            Cetak Data
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Bimbingan</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Siswa</button>
                                </li>
                              </ul>
                              <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <form action="/cetak-bimbingan-pertanggal" class="mt-5" method="get">
                                        <div class="form-group" style="display: flex; gap: 10px; align-items: flex-end;">
                                            <div style="width: 100%">
                                                <input type="date" name="start" class="form-control" id="startInput"
                                                    placeholder="Enter date" value="old('start')">
                                            </div>
                                            <div>
                                                <h5>TO</h5>
                                            </div>
                                            <div style="width: 100%">
                                                <input type="date" name="end" class="form-control" id="endInput"
                                                    placeholder="Enter date" value="old('end')">
                                            </div>
                                        </div>
                                        {{-- <a href="" style="margin-right: 10px;"> --}}
                                            <button type="submit" class="btn btn-primary">Print <i class="fas fa-print"></i></button>
                                        {{-- </a> --}}
                                        </form>
                                        <a href="/cetak-bimbingan/pdf">
                                            <button class="btn btn-primary mt-3">Print Keseluruhan <i class="fas fa-print"></i></button>
                                        </a>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <form action="/cetak-bimbingan-pertanggal" class="mt-5" method="get">
                                        <div class="form-group" style="display: flex; gap: 10px; align-items: flex-end;">
                                            <div style="width: 100%">
                                                <input type="date" name="start" class="form-control" id="startInput"
                                                    placeholder="Enter date" value="old('start')">
                                            </div>
                                            <div>
                                                <h5>TO</h5>
                                            </div>
                                            <div style="width: 100%">
                                                <input type="date" name="end" class="form-control" id="endInput"
                                                    placeholder="Enter date" value="old('end')">
                                            </div>
                                        </div>
                                        {{-- <a href="" style="margin-right: 10px;"> --}}
                                            <button type="submit" class="btn btn-primary">Print <i class="fas fa-print"></i></button>
                                        {{-- </a> --}}
                                        </form>
                                        <a href="/cetak-bimbingan/pdf">
                                            <button class="btn btn-primary mt-3">Print Keseluruhan <i class="fas fa-print"></i></button>
                                        </a>
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
    <script>
        const startInput = document.getElementById('startInput');
        const endInput = document.getElementById('endInput');
        const tablesHide = document.getElementById('tablesHide');
        const btnTampil = document.getElementById('btnTampil');

        tablesHide.style.display = 'none';

        btnTampil.addEventListener('click', () => {
            tablesHide.style.display === 'none' ? tablesHide.style.display = 'block' : tablesHide.style.display = 'none';
            
        })

        startInput.addEventListener('change', (e) => {
            console.log(e.target.value);
        })
        endInput.addEventListener('change', (e) => {
            console.log(e.target.value);
        })
    </script>

    @include('Template.script')
</body>

</html>
