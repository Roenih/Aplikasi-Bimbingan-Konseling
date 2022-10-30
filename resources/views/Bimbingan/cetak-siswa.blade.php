<!DOCTYPE html>
<html>
<head>
    <title>Laporan Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
    <style type="text/css">
		table tr td,
		table tr th{
			font-size: 7pt;
		}
	</style>
    <div class="container">
        <center>
            <h4>Laporan Data siswa</h4>
            <h4>Bimbingan Konseling SMK Informatika Utama</h4>
        </center>
        <table border="1" cellspascing="0" cellpadding="8" style="widt: 100;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Kelas</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $data => $p)
                <tr>
                    <td>{{ $data+1 }}</td>
                    <td>{{ $p->nis }}</td>
                    <td>{{ $p->nm_siswa }}</td>
                    <td>{{ $p->kelas->nm_kelas ?? ''}}</td>
                    <td>{{ $p->tgl_lahir}}</td>
                    <td>{{ $p->jenkel }}</td>
                    <td>{{ $p->no_tlp }}</td>
                    <td>{{ $p->alamat }}</td>
                        <td>{{ $p->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>