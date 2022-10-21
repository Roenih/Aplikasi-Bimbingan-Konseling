<!DOCTYPE html>
<html>
<head>
    <title>Laporan Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    <div class="container">
        <h1 >Laporan Masalah</h1>
        <table class="table table-bordered">
            <tr>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Nama Kelas</th>
                <th>Tanggal Konsultasi</th>
                <th>Id Masalah</th>
                <th>Deskripsi Bimbingan</th>
                <th>Penyelesaian</th>
            </tr>
            @foreach ($bimbingan as $data)
                <tr>
                    <td>{{$data->nis}}</td>
                    <td>{{$data->siswa->nm_siswa}}</td>
                    <td>{{$data->kelas->nm_kelas}}</td>
                    <td>{{$data->tgl_konsultasi}}</td>
                    <td>{{$data->jenismasalah->nm_masalah}}</td>
                    <td>{{$data->diskripsi_bimbingan}}</td>
                    <td>{{$data->penyelesaian}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>