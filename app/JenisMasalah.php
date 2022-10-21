<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisMasalah extends Model
{
    protected $table = 'jenismasalahs';
    protected $fillable = ['id_masalah','nm_masalah'];
    protected $primarykey = ['id_masalah'];

    public function bimbingan()
    {
        return $this->hasMany('\App\Bimbingan','id_bimbingan');
    }
}

