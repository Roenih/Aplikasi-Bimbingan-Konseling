<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.boostrapcdn.com/boostrap/4.2.1/css/boostrap.min.css" rel
    <title>OrangTua</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    <p>Data Detail OrangTua</p>
                </div>
                <div class="from-horizontal">
                    <div class="panel-body">
                        <form method="post" action"/index-OrangTua">

                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2">id</label>
                                <div class="col-sm-10">
                                    <p>{{ $OrangTua->id }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">nm_wali</label>
                                <div class="col-sm-10">
                                    <p>{{ $OrangTua->nm_wali }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">no_tlp</label>
                                <div class="col-sm-10">
                                    <p>{{ $OrangTua->no_tlp }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">pekerjaan_wali</label>
                                <div class="col-sm-10">
                                    <p>{{ $OrangTua->pekerjaan_wali }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">alamat</label>
                                <div class="col-sm-10">
                                    <p>{{ $OrangTua->alamat }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="/OrangTua" class="btn btn-warning">Data OrangTua</a>
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