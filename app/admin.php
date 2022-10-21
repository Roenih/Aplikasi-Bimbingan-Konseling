<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['id_admin','nm_admin','email','password','user_id'];
    protected $primarykey = 'id_admin';

}
