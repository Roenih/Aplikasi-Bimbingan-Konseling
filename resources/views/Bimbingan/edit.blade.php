
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
            <h1 class="m-0">Edit Data Bimbingan</h1>
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
        <title>Edit Bimbingan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-2">
                <div class="card-header text-center">
                    {{-- Data Bimbingan - <strong>EDIT DATA BIMBINGAN</strong> --}}
                </div>
                <div class="card-body">
                    <a href="/bimbingan" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/update-bimbingan/{{ $bimbingan->id_bimbingan }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        <div class="form-group">
                            <label>Nis / Nama </label>
                            <select name="nis" class="form-control" id="check_nis">
                              <option selected value="{{$bimbingan->nis}}">{{$bimbingan->nis}} {{$bimbingan->siswa->nm_siswa}}</option>
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
                                <select name="nm_kelas" id="nm_kelas" class="form-control">
                                  <option selected value="{{$bimbingan->kode_kelas}}">{{ $bimbingan->kelas->nm_kelas }}</option>
                                </select>
                          </div>
                        <div class="form-group">
                            <labe><b>Tanggal Konsultasi</b></label>
                            <input type="date" autocomplete="off" name="tgl_konsultasi" value="{{$bimbingan->tgl_konsultasi}}" class="form-control">
                            
                             @if($errors->has('tgl_konsultasi'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_konsultasi')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Jenis Masalah</label>
                                <select class="form-control" name="id_masalah">
                                <option value="{{$bimbingan->id_masalah}}">{{$bimbingan->jenismasalah->nm_masalah}}</option>
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
                            <textarea name="diskripsi_bimbingan" class="form-control">{{$bimbingan->diskripsi_bimbingan}}</textarea>

                            {{-- <input type="text" autocomplete="off" name="diskripsi_bimbingan" value="{{$bimbingan->diskripsi_bimbingan}}" class="form-control"> --}}
 
                            @if($errors->has('diskripsi_bimbingan'))
                                <div class="text-danger">
                                    {{ $errors->first('diskripsi_bimbingan')}}
                                </div>
                            @endif
 
                        </div>

                        <div class="form-group">
                            <label>Penyelesaian</label>
                            <input type="text" autocomplete="off" name="penyelesaian" value="{{$bimbingan->penyelesaian}}" class="form-control">
 
                            @if($errors->has('penyelesaian'))
                                <div class="text-danger">
                                    {{ $errors->first('penyelesaian')}}
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
    <script>
      const checkNis = document.querySelector('#check_nis');

      checkNis.addEventListener('change', (e) => {
        fetch(`http://127.0.0.1:8000/check-kelas/${e.target.value}`)
          .then(response => response.json())
          .then(res => {
              let selectKelas = document.querySelector('#nm_kelas');
              let option = document.createElement('option');
              option.text = res.nm_kelas;
              option.value = res.kode_kelas;
              selectKelas.add(option, selectKelas[0]);
              if (selectKelas.length > 0) {
                selectKelas.remove(selectKelas.length-1);
              }
          })
      })
    </script>
</body>
</html>
