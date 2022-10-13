<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('gambar/logosmki.jpeg')}}" alt="" class="brand-image img-circle elevation-3">
    <span class="brand-text font-weight-light">SMKI Utama</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist" class="img-circle elevation-2" alt="">
      </div>
      <div class="info">
        <a href="#" class="d-block">Bimbingan Konseling</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             <li class="nav-item">
              <a href="{{route('beranda')}}" class="nav-link {{ Request::is('beranda') ? 'active' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt" ></i>
                <p>Home</p>
              </a>
            </li>
        
        <li class="nav-item  menu-open">
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