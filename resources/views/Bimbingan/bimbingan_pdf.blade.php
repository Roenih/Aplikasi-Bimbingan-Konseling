<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Laporan Bimbingan</h1>
    <table border="1" style="width: 100%">
        <tr>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>Nama Kelas</th>
            <th>Tanggal Konsultasi</th>
            <th>Jenis Masalah</th>
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
</body>
</html>