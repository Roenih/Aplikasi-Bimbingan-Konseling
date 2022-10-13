<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.boostrapcdn.com/boostrap/4.2.1/css/boostrap.min.css" rel
    <title>Admin</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    <p>Data Detail Admin</p>
                </div>
                <div class="form-horizontal">
                    <div class="panel-body">
                        <form method="post" action"/index-admin">

                        {{ csrf_field() }}
                            {{-- <div class="form-group">
                                <label class="col-sm-2">id_admin</label>
                                <div class="col-sm-10">
                                    <p>{{ $admin->id_admin }}</p>
                                </div>
                            </div> --}}
                            <div class="form-group">
                                <label class="col-sm-2">nm_admin</label>
                                <div class="col-sm-10">
                                    <p>{{ $admin->nm_admin }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">email</label>
                                <div class="col-sm-10">
                                    <p>{{ $admin->email }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">password</label>
                                <div class="col-sm-10">
                                    <p>{{ $admin->password }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="/admin" class="btn btn-warning">Data ASdmin</a>
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>