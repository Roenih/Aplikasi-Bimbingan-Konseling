<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.boostrapcdn.com/boostrap/4.2.1/css/boostrap.min.css" rel>
    <title>Bimbingan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    <p>Data Detail Bimbingan</p>
                </div>
                <div class="from-horizontal">
                    <div class="panel-body">
                        <form method="post" action"/index-bimbingan">

                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2">nis</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->nis }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">nm_siswa</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->nm_siswa }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">nm_kelas</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->nm_kelas }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">tgl_konsultasi</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->tgl_konsultasi }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">kode_kelas</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->kode_kelas }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">jenis_masalah</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->jenis_masalah }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">diskripsi_bimbingan</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->diskripsi_bimbingan }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2">penyelesaian</label>
                                <div class="col-sm-10">
                                    <p>{{ $bimbingan->penyelesaian }}</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="/bimbingan" class="btn btn-warning">Data Bimbingan</a>
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