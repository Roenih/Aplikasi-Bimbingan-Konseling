<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bimbingan extends Model
{
    protected $table = 'bimbingans';
    protected $fillable = ['nis','nm_siswa','nm_kelas','tgl_konsultasi','id_masalah','diskripsi_bimbingan','penyelesaian'];
    protected $primarykey = 'id_bimbingan';

    public function jenismasalah()
    {
        return $this->belongsTo('\App\JenisMasalah','id_masalah','id_masalah');
    }

    public function siswa()
    {
        return $this->belongsTo('\App\Siswa','nis','nis');
    }

    public function kelas()
    {
        return $this->belongsTo('\App\Kelas','nm_kelas','kode_kelas');
    }
}
