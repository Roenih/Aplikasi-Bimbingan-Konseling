<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['nis','nm_siswa','kode_kelas','tgl_lahir','jenkel','nm_ayah','pekerjaan_ayah','no_tlp','alamat','email'];
    protected $primarykey = 'nis';

    public function kelas() {
        return $this->belongsTo('App\Kelas', 'kode_kelas', 'kode_kelas');
    }

    public function bimbingan() {
        return $this->hasMany('App\Bimbingan','nis');
    }
}


