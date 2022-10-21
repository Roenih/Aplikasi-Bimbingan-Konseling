<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <title>SMKI Utama</title>
    @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('Template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-primary elevation-4">
            <!-- Brand Logo -->
            <h4></h4>
            <a href="/beranda" class="brand-link">
                <img src="Gambar/logosmki.png" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><b>SMKI Utama</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="nav-item menu-open">
                            <a href="/beranda" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p>
                                forms
                                <i class="right fas fa-angle-left"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="{{route('siswa')}}" class="nav-link {{ Request::is('siswa') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data siswa</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{route('guru')}}" class="nav-link {{ Request::is('guru') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Guru</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{route('bimbingan')}}" class="nav-link {{ Request::is('bimbingan') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Bimbingan</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{route('kelas')}}" class="nav-link {{ Request::is('kelas') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Kelas</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="{{route('jenismasalah')}}" class="nav-link {{ Request::is('jenismasalah') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Data Jenis Masalah</p>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('cetak-bimbingan')}}" class="nav-link">
                              <i class="nav-icon fas fa-copy"></i>
                              <p>
                                Cetak Bimbingan
                                <span class="right badge badge-danger"></span>
                              </p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="{{route('Login')}}" class="nav-link">
                              <i class="nav-icon fas fa-th"></i>
                              <p>
                                Logout
                                <span class="right badge badge-danger"></span>
                              </p>
                            </a>
                          </li>
                        </ul>
                      </nav>
                      <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                  </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Starter Page</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{ $jumlah_siswa }}</h3>
                    
                                    <p>Jumlah Siswa</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-bag"></i>
                                  </div>
                                  <a href="/siswa" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                              <!-- ./col -->
                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                  <div class="inner">
                                    <h3>{{ $jumlah_guru }}</h3>
                    
                                    <p>Jumlah Guru</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                  </div>
                                  <a href="/guru" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                              <!-- ./col -->
                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                  <div class="inner">
                                    <h3>{{ $jumlah_bimbingan }}</h3>
                    
                                    <p>Jumlah Bimbingan</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                  </div>
                                  <a href="/bimbingan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                              <!-- ./col -->
                              <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                  <div class="inner">
                                    <h3>{{ $jumlah_kelas }}</h3>
                    
                                    <p>Jumlah Kelas</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                  </div>
                                  <a href="/kelas" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                              </div>
                             <!-- ./col -->
    </div>
    <!-- /.row -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-light">
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

    <!-- jQuery -->
    @include('Template.script')
</body>

</html>