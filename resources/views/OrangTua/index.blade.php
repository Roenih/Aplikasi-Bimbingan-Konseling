<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>OrangTua</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data OrangTua
                </div>
                <div class="card-body">
                    <a href="/tambah-OrangTua" class="btn btn-primary">Input OrangTua</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama Wali</th>
                                <th>No Telepon</th>
                                <th>Pekerjaan Wali</th>
                                <th>Alamat</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($OrangTua as $p)
                            <tr>
                                <td>{{ $p->nm_wali }}</td>
                                <td>{{ $p->no_tlp }}</td>
                                <td>{{ $p->pekerjaan_wali}}</td>
                                <td>{{ $p->alamat }}</td>
                                <td>
                                    <a href="/edit-OrangTua/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/detail-OrangTua/{{ $p->id }}" class="btn btn-success">detail</a>
                                    <a href="/delete-OrangTua/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>