
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
        <title>tambah Bimbingan</title>
    </head>
    <body>
        {{-- <header>
            <marquee behavior="10" direction="">Harap belajar lagi :)</marquee>
        </header> --}}
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Bimbingan - <strong>TAMBAH DATA BIMBINGAN</strong> --}}
                </div>
                <div class="card-body">
                    {{-- <a href="/bimbingan" class="btn btn-primary">Kembali</a> --}}
                    <br/>
                    <br/>
                    
                    <form method="post" action="/store-bimbingan">
 
                        {{ csrf_field() }}

                        <div class="form-group">
                          <label>Nis / Nama </label>
                          <select name="nis" class="form-control">
                            <option value="">Pilih Nis atau Nama</option>
                            @foreach ($siswa as $s)
                                <option value="{{$s->nis}}">{{ $s->nis }} {{ $s->nm_siswa }}</option>
                            @endforeach
                          </select>
                          @if($errors->has('nis'))
                              <div class="text-danger">
                                  {{ $errors->first('nis')}}
                              </div>
                          @endif

                      </div>
                        <div class="form-group">
                            <label>Nama Kelas </label>
                                <select name="nm_kelas" class="form-control" name="id_kelas">
                                <option value="">Pilih Kelas</option>
                                @foreach ($kelas as $item)
                                <option value="{{ $item->kode_kelas}}">{{ $item->nm_kelas}}</option>
                                @endforeach
                                </select>
                          </div>
                        
                        <div class="form-group">
                            <labe><b>Tanggal Konsultasi</b></label>
                            <input type="date" autocomplete="off" name="tgl_konsultasi" class="form-control">
                            
                             @if($errors->has('tgl_konsultasi'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_konsultasi')}}
                                </div>
                            @endif
                        </div>

                        {{-- <div class="form-group">
                            <labe>Id Kelas</label>
                            <input type="text" autocomplete="off" name="id_kelas" class="form-control">
                            
                             @if($errors->has('id_kelas'))
                                <div class="text-danger">
                                    {{ $errors->first('id_kelas')}}
                                </div>
                            @endif
                        </div> --}}
                        
                        <div class="form-group">
                            <label>Id Masalah</label>
                                <select class="form-control" name="id_masalah">
                                <option value="">Pilih Masalah</option>
                                @foreach ($jenismasalah as $item)
                                <option value="{{ $item->id_masalah}}">{{ $item->nm_masalah}}</option>
                                @endforeach
                                </select>
                            {{-- <div class="input-group-append">
                              <button class="btn btn-outline-secondary" class="form-control" type="button">Button</button></a>
                            </div> --}}
                          </div>
                          
                        <div class="form-group">
                            <label>Diskripsi Bimbingan</label>
                            <textarea name="diskripsi_bimbingan" class="form-control" placeholder=""{{ old('diskripsi_bimbingan') }}></textarea>

                            @if($errors->has('diskripsi_bimbingan'))
                                <div class="text-danger">
                                    {{ $errors->first('diskripsi_bimbingan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Penyelesaian</label>
                            <input type="text" autocomplete="off" name="penyelesaian" class="form-control">
 
                            @if($errors->has('penyelesaian'))
                                <div class="text-danger">
                                    {{ $errors->first('penyelesaian')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/bimbingan" class="btn btn-primary">Kembali</a>
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
