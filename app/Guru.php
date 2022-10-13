<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'gurus';
    protected $fillable = ['nip','nm_jabatan','no_tlp','email','password'];
    protected $primarykey = ['nip'];
}
