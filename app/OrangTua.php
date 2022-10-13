<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTua extends Model
{
    protected $table = 'orang_tuas';
    protected $fillable = ['id','nm_wali','no_tlp','pekerjaan_wali','alamat'];
    protected $primarykey = ['id'];
}
