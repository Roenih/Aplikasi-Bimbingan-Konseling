<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Admin</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Admin - <strong>EDIT DATA ADMIN</strong>
                </div>
                <div class="card-body">
                    <a href="/admin" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
 
                    <form method="post" action="/update-admin/{{ $admin->id_admin }}">
 
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
 
                        {{-- <div class="form-group">
                            <label>Id Admin</label>
                            <input type="text" autocomplete="off" name="id_admin" class="form-control" value=" {{ $admin->id_admin }}">
 
                            @if($errors->has('id_admin'))
                                <div class="text-danger">
                                    {{ $errors->first('id_admin')}}
                                </div>
                            @endif
 
                        </div> --}}
 
                        <div class="form-group">
                            <label>Nama Admin</label>
                            <input type="nm_admin" autocomplete="off" name="nm_admin" class="form-control" value=" {{ $admin->nm_admin }}">
 
                            @if($errors->has('nm_admin'))
                                <div class="text-danger">
                                    {{ $errors->first('id_admin')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" autocomplete="off" name="email" class="form-control" value=" {{ $admin->email }}">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
 
                        </div>
                        
                        <div class="form-group">
                            <labe>Password</label>
                            <input type="password" autocomplete="off" name="password" class="form-control">
                            
                             @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
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