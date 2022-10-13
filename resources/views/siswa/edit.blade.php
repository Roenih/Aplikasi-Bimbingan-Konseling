
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
            <h1 class="m-0">Edit Data Siswa</h1>
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
    <!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Siswa</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Siswa - <strong>EDIT DATA SISWA</strong> --}}
                </div>
                <div class="card-body">
                    <a href="/siswa" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/update-siswa/{{ $siswa->nis }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <labe>NIS</label>
                            <input type="text" name="nis" value="{{$siswa->nis}}" class="form-control">
 
                            @if($errors->has('nis'))
                                <div class="text-danger">
                                    {{ $errors->first('nis')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>Nama Siswa</label>
                            <input type="text" autocomplete="off" name="nm_siswa" value="{{$siswa->nm_siswa}}" class="form-control">
 
                            @if($errors->has('nm_siswa'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_siswa')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="input-group">
                            <label>Kode Kelas </label>
                                <select class="kode_kelas" class="form-control" id="kode_kelas">
                                <option value="">Pilih Kode</option>
                                @foreach ($kelas as $item)
                                <option value="{{ $item->kode_kelas}}">{{ $item->kode_kelas}}</option>
                                @endforeach
                                </select>
                            {{-- <div class="input-group-append">
                              <button class="btn btn-outline-secondary" class="form-control" type="button">Button</button></a>
                            </div> --}}
                          </div>

                        <div class="form-group">
                            <labe>Tanggal Lahir</label>
                            <input type="date" autocomplete="off" value="{{$siswa->tgl_lahir}}" name="tgl_lahir" class="form-control">
                            
                             @if($errors->has('tgl_lahir'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_lahir')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>Jenis Kelamin</label>
                                <input type="radio" name="jenkel" value="Laki-laki" id="Laki-laki" checked> &nbsp; Laki-laki
                                <input type="radio" name="jenkel" value="Perempuan" id="Perempuan"> &nbsp; Perempuan
                            @if ($errors->has('jenkel'))
                                <div class="text-danger">
                                    {{ $errors->first('jenkel')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>Nama Ayah</label>
                            <input type="text" autocomplete="off" name="nm_ayah" value="{{$siswa->nm_ayah}}" class="form-control">
                            
                             @if($errors->has('nm_ayah'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_ayah')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>Pekerjaan Ayah</label>
                            <input type="text" autocomplete="off" name="pekerjaan_ayah" value="{{$siswa->pekerjaan_ayah}}" class="form-control">
                            
                             @if($errors->has('pekerjaan_ayah'))
                                <div class="text-danger">
                                    {{ $errors->first('pekerjaan_ayah')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>No Telepon</label>
                            <input type="text" autocomplete="off" name="no_tlp" value="{{$siswa->no_tlp}}" class="form-control">
                            
                             @if($errors->has('no_tlp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_tlp')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>Alamat</label>
                            <textarea autocomplete="off" name="alamat" value="{{$siswa->alamat}}" class="form-control"></textarea>

                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>Email</label>
                            <input type="text" autocomplete="off" name="email" value="{{$siswa->email}}" class="form-control">

                             @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
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
