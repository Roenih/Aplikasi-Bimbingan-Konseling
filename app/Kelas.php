<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = ['kode_kelas','nm_kelas'];
    protected $primarykey = 'kode_kelas';

    public function siswa() {
        return $this->hasMany('App\Siswa', 'kode_kelas');
    }

    public function bimbingan() {
        return $this->hasMany('App\Bimbingan', 'kode_kelas');
    }
}
