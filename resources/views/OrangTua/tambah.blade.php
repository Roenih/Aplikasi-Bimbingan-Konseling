<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>tambah Orangtua</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data OrangTua - <strong>TAMBAH DATA ORANGTUA</strong>
                </div>
                <div class="card-body">
                    <a href="/OrangTua" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/store-OrangTua">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Nama Wali</label>
                            <input type="text" autocomplete="off" name="nm_wali" class="form-control">
 
                            @if($errors->has('nm_wali'))
                                <div class="text-danger">
                                    {{ $errors->first('nm_wali')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <label>No Telepon</label>
                            <input type="text" autocomplete="off" name="no_tlp" class="form-control">
 
                            @if($errors->has('no_tlp'))
                                <div class="text-danger">
                                    {{ $errors->first('no_tlp')}}
                                </div>
                            @endif
 
                        </div>
 
                        <div class="form-group">
                            <labe>Pekerjaan Wali</label>
                            <input type="text" autocomplete="off" name="pekerjaan_wali" class="form-control">
                            
                             @if($errors->has('pekerjaan_wali'))
                                <div class="text-danger">
                                    {{ $errors->first('pekerjaan_wali')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <labe>Alamat</label>
                            <input type="text" autocomplete="off" name="alamat" class="form-control">
                            
                             @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
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