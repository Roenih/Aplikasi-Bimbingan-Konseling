
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
        <title>tambah Siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Siswa - <strong>TAMBAH DATA SISWA</strong> --}}
                </div>
                <div class="card-body">
                    {{-- <a href="/siswa" class="btn btn-primary">Kembali</a> --}}
                    <br/>
                    <br/>

                    
                    
                    <form method="post" action="/store-siswa">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <labe><b>Nis</b></label>
                            <input type="text" autocomplete="off" name="nis" class="form-control">
 
                            @if($errors->has('nis'))
                                <div class="text-danger">
                                    {{ $errors->first('nis')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" autocomplete="off" name="nm_siswa" class="form-control">
 
                            @if($errors->has('nm_siswa'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_siswa')}}
                                </div>
                            @endif
 
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="kode_kelas">Kelas</label>
                                <select class="form-control" id="kode_kelas" name="kode_kelas">
                                <option value="">Pilih Kelas</option>
                                @foreach ($kelas as $item)
                                <option value="{{ $item->kode_kelas }}">{{ $item->nm_kelas }}</option>
                                @endforeach
                                </select>
                            {{-- <div class="input-group-append">
                              <button class="btn btn-outline-secondary" class="form-control" type="button">Button</button></a>
                            </div> --}}
                          </div>
                        

                        <div class="form-group">
                            <labe><b>Tanggal Lahir</b></label>
                            <input type="date" autocomplete="off" name="tgl_lahir" class="form-control">
                            
                             @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <labe><b>Jenis Kelamin</b></label>
                                <input type="radio" name="jenkel" value="Laki-laki" id="Laki-laki" checked> &nbsp; Laki-laki
                                <input type="radio" name="jenkel" value="Perempuan" id="Perempuan"> &nbsp; Perempuan
                            @if ($errors->has('jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('jenkel')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <labe><b>Nama Ayah</b></label>
                            <input type="text" autocomplete="off" name="nm_ayah" class="form-control">
                            
                             @if($errors->has('nm_ayah'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_ayah')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <labe><b>Pekerjaan Ayah</b></label>
                            <input type="text" autocomplete="off" name="pekerjaan_ayah" class="form-control">
                            
                             @if($errors->has('pekerjaan_ayah'))
                                <div class="text-danger">
                                    {{ $errors->first('pekerjaan_ayah')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <labe><b>No Telepon</b></label>
                            <input type="number" autocomplete="off" name="no_tlp" class="form-control">
                            
                             @if($errors->has('no_tlp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_tlp')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <labe><b>Alamat</b></label>
                            <textarea name="alamat" class="form-control" placeholder="">{{ old('alamat') }}</textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                            
                        </div>

                        <div class="form-group">
                            <labe><b>Email</b></label>
                            <input type="email" autocomplete="off" name="email" class="form-control">

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif

                        </div>
                        
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                            <a href="/siswa" class="btn btn-primary">Kembali</a>
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
