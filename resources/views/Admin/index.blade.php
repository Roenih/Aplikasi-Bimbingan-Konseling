<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Admin</title>
    </head>
    <body>
        @include('Dashboard.navbar')
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    Data Admin
                </div>
                <div class="card-body">
                    <a href="/tambah-admin" class="btn btn-primary">Input Admin</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                {{-- <th>Id Admin</th> --}}
                                <th>Nama Admin</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th colspan="3" style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($admin as $p)
                            <tr>
                                {{-- <td>{{ $p->id_admin }}</td> --}}
                                <td>{{ $p->nm_admin }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->password }}</td>
                                <td>
                                    <a href="/edit-admin/{{ $p->id_admin }}" class="btn btn-warning">Edit</a>
                                    <a href="/detail-admin/{{ $p->id_admin }}" class="btn btn-success">detail</a>
                                    <a href="/delete-admin/{{ $p->id_admin }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js"
            integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
        </script>
    </body>
</html>